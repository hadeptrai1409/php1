<?php
namespace App\controllers;
use app\models\User;
class HomController {
 public function index() {
    echo User::all();
 }

}

?>