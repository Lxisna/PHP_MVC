<?php 
//连接数据库
$db=connectDB();
$keywords = strip_tags(urldecode(trim($_GET['keywords'])));
$posts = [];

if($db){
  $sql = $db->prepare("SELECT * FROM post WHERE title LIKE '%".$keywords."%' OR description LIKE '%".$keywords."%' OR image LIKE '%".$keywords."%' ORDER BY id");
  $sql->execute();
  $posts = $sql ->fetchAll(PDO::FETCH_ASSOC);
  //  var_dump($posts);
}
//加载视图
 include "./views/base.phtml"
?>



