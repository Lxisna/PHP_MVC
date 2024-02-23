<!-- MVC (model-view-controller),软件系统通过对自身基本部份分离的同时，也赋予了各个基本部分应有的功能 -->
<?php 
session_start();
//On charge le config
require "./config.php";
//On charge le router
require "./services/router.php";

//On charge le controller
require "./controllers/controller_{$page}.php"
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


