<?php
  $db = mysql_connect("localhost", "root", "1234", "mysitedb") or die("Fail");
?>
<html>
     <body>
        <h1>Conexión establecida</h1>
       <?php
       //Lanzar un query
       $query = "SELECT *  FROM tPeliculas";
        mysqli_query($db, $query) or die("Query error");
        //RECORRER EL RESULTADO, recorremos toda la tabla
         while ($row = mysql_fech_array($result)){
         echo $row["titulo"];
         echo "<br>"
         echo $row[2];
         echo

}

       ?>
</body>
</html>
