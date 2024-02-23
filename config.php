<?php 
//新的方法用来声明
const CONFIG_SITE_TITLE = "My Super MVC";

//旧方法声明
define("CONFIG_SITE_SLOGAN","Whatever");

const DB_HOST = "localhost";
const DB_PORT = "8080";
const DB_NAME = "mvc_php";
const DB_USER = "root";
const DB_PASS = "root";
//连接数据库的function
function connectDB(){
  $db=false;
  try{
    $db= new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.'',DB_USER,DB_PASS);
  }catch(PDOException $e){
    $error=$e;
  echo "problems!" .$e;
  }
  return $db;
}