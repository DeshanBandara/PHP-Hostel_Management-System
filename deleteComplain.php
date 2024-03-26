<?php

    include("./dbconnect.php");

    if(isset($_GET["id"])){
        $id = mysqli_real_escape_string($connect, $_GET['id']);
        $sql = "DELETE FROM complain WHERE id='$id'";
        $res = mysqli_query($connect, $sql);

        if($res){
            header("location:complains.php");
        } else {
            echo "Failed to Delete";
        }
    } else {
        echo "ID parameter is missing";
    }
 ?>