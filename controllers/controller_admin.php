<?php 
if(!isset($_SESSION['isAdim']) ||! $_SESSION['isAdmin']){
  echo "<script>alert('Please log in as an administrator to access this page');</script>";
  header("Location:?page=home");
  exit();
}
 include "./views/base.phtml"
?>
