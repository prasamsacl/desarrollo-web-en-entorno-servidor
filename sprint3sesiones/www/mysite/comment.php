<?php
   $db = mysqli_connect("localhost","root", "1234", "web_canciones")or die("fail");
?>
<html>
  <body>
    <?php
       session_start();
       $user_id_a_insertar = "NULL";
       if (!empty($_SESSION["user_id"])){
	$user_id_a_insertar = $_SESSION["user_id"];
}
	$cancion_id = $_POST["cancion_id"];
	$comentario = $_POST["new_comentario"];
	$query = "INSERT INTO tComentario (comentario, cancion_id, usuario_id) VALUES ('".$comentario."',".$cancion_id.",".$user_id_a_insertar.")";
	mysqli_quer($db, $query) or die("error");
	echo "<p>Nuevo comentario";
	echo mysqli_insert_id($db);
	echo "añadido</p>";

	echo "<a href='/detail.php?cancion_id=".$cancion_id."'>Volver</a>";
	mysqli_close($db);
?>
</body>
</html>
