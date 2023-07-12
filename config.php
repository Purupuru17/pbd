<?php
class Config {

     public $connect;
     
     public function __construct(){
     	$this->koneksi_db();
     }
     private function koneksi_db(){
     	$server = "app-db";
	$user = "root";
	$password = "root";
	$database = "family_db";

	$this->connect = new mysqli($server,$user,$password,$database);
	return $this->connect;
     }
     public function ambilSemua($sql){
     	$hasil = $this->connect->query($sql)->fetch_all(MYSQLI_ASSOC);
     	return $hasil;
     }
     public function ambilSatu($sql){
     	$hasil = $this->connect->query($sql)->fetch_assoc();
     	return $hasil;
     }
     public function aksiQuery($sql){
     	return $this->connect->query($sql);
     }
}






