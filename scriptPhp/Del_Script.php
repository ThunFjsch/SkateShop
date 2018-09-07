<!DOCTYPE html>
<html>
    <head>
        <title>Skateshop</title>
        <meta charset="utf=8">

        <link rel="stylesheet" type="text/css" href="#">
    </head>
    
    <body>
        <form method = "POST">
            Geben sie die ID des Eintrags ein welchen sie löschen möchten
             <input type="number" name="txt_del"> <button>Löschen!!!</button>
        </form>
    </body>
</html>

<?php
    $db = new mysqli("localhost","root","root","fahrbareuntersaetze"); 
    if(isset($_POST['txt_del'])){
        $del = $_POST['txt_del'];        
    $db->query("DELETE FROM $tableName WHERE ID = $del");    
    echo "<script> window.location.replace('$link') </script>";
    }
?>

