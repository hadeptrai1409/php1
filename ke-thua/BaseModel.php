<?php
class BaseModel{

    function __construct()
    {
        
    }

    function getConnect(){
        $this->conn = new PDO("mysql:host=localhost; dbname=kaopiz; charset=utf8", "root", "");
    }
    
    function all(){
        $getAllQuery = "select * from " . $this->table;
        $data = $this->executeQuery($getAllQuery);
        return $data;
    }

    function remove($id){
        // delete from tên bảng where id = $id
        // kiểm tra xem có tồn tại bản ghi hay không
        $object = $this->findOne($id);
        if(empty($object)){
            return false;
        }
        $removeRecordQuery = "delete from " . $this->table . " where id = $id";
        $this->executeQuery($removeRecordQuery);
        return true;
    }
    
    function findOne($id){
        // tìm bản ghi phù hợp dựa vào id truyền vào
        $getAllQuery = "select * from " . $this->table . " where id = $id";
        $data = $this->executeQuery($getAllQuery);
        if(count($data) > 0){
            return $data[0];
        }

        return null;
        
    }

    function executeQuery($query){
        $this->getConnect();
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        // tham số trong fetchAll để ép dữ liệu trả về thành dạng object
        // object loại gì thì phụ thuộc vào get_class
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
    } 
} 

//PDO::FETCH_CLASS, get_class($this)

?>