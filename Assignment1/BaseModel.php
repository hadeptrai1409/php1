<?php 
class BaseModel 
{
	function __construct()
	{
		
	}
	public function getConnect(){
		$conn = new PDO('mysql:host=localhost;dbname=kaopiz;charset=utf8', 'root', '');
		return $conn;
	}
	public function insert($arr){
		$this->queryBuilder = "insert into $this->tableName ";
		$cols = " (";
		$vals = " (";
		foreach ($arr as $key => $value) {
			$cols .= " `$key`,";
			$vals .= " :$key,";
		}
		$cols = rtrim($cols, ',');
		$vals = rtrim($vals, ',');
		$cols .= ") ";
		$vals .= ") ";
		$this->queryBuilder .= $cols . ' values ' . $vals;
		$stmt = $this->getConnect()->prepare($this->queryBuilder);
		foreach ($arr as $key => &$value) {
			$stmt->bindParam(":$key", $value);
		}
		$stmt->execute();
	}
	public function update($arr){
		$this->queryBuilder = "update $this->tableName set ";
		
		foreach ($arr as $key => $value) {
			$this->queryBuilder .= " `$key` = :$key,";
		}
		$this->queryBuilder = rtrim($this->queryBuilder, ',');
		$this->queryBuilder .= " where id = :id";
		$stmt = $this->getConnect()
					->prepare($this->queryBuilder);
		foreach ($arr as $key => &$value) {
			$stmt->bindParam(":$key", $value);
		}
		$stmt->bindParam(":id", $this->id);
		$stmt->execute();
	}
	public static function rawQuery($sqlQuery){
		$model = new static();
		$model->queryBuilder = $sqlQuery;
		return $model;
	} 
	public function execute(){
		$stmt = $this->getConnect()->prepare($this->queryBuilder);
		return $stmt->execute();
	} 
	public static function all(){
		$model = new static();
		$query = "select * from $model->tableName";
		$stmt = $model->getConnect()->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
	} 
	public static function find($id){
		$model = new static();
		$query = "select * from $model->tableName where id = $id";
		$stmt = $model->getConnect()->prepare($query);
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		if(count($data) > 0){
			return $data[0];
		}
		return null;
 	} 

 	public static function where($arr){
 		$model = new static();
 		$model->queryBuilder = "select * from $model->tableName where $arr[0] $arr[1] '$arr[2]'";

 		return $model;
 	}

 	public static function destroy($id){
 		$model = new static();
 		$model->queryBuilder = "delete from $model->tableName
 								where id = $id";

		return $model->execute();
	}

 	public function andWhere($arr){
 		$this->queryBuilder .= " and $arr[0] $arr[1] '$arr[2]'";
 		return $this;
 	}
 	public function orWhere($arr){
 		$this->queryBuilder .= " or $arr[0] $arr[1] '$arr[2]'";
 		return $this;
 	}
 	public function first(){

 		$stmt = $this->getConnect()->prepare($this->queryBuilder);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));

		if(count($result) > 0){
			return $result[0];
		}else{
			return null;
		}
 	}
 	public function get(){
 		// var_dump($this);die;
 		$stmt = $this->getConnect()->prepare($this->queryBuilder);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $result;
 	}
}


 ?>