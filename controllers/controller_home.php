<!-- 控制器Controller – 负责响应用户请求、准备数据，以及决定如何展示数据。 -->
<?php 
//连接数据库
$db=connectDB();
$posts = [];
if($db){
  $sql = $db->prepare("SELECT * FROM post LIMIT 3");
  $sql->execute();
  // echo "<pre>";
  $posts = $sql ->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($posts);
}
//加载视图
 include "./views/base.phtml"
?>