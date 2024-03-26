<?php include("./navAfterLog.php"); ?>


<h1 class="text-center" >Update Room Details</h1>

<form action="./script.php" method="post">

    <?php 
        $id=$_GET['id'];
        $sql="SELECT * FROM room WHERE id='$id'";
        $res=mysqli_query($connect,$sql);

        if(mysqli_num_rows( $res)> 0){
            $row=mysqli_fetch_assoc( $res );
            ?>
                <div class="form-group">
                    <label for="" class="form-label fw-bold">Id</label>
                    <input type="text" name="id" required class="form-control" readonly value="<?php echo $row['id']; ?>">
                </div>

                <div class="form-group">
                    <label for="" class="form-label fw-bold">Room id</label>
                    <input type="text" name="roomNum" required class="form-control" readonly value="<?php echo $row['roomNum']; ?>">
                </div>

                <div class="form-group">
                    <label for="" class="form-label fw-bold">Status</label>
                    <input type="text" name="status" required class="form-control"  value="<?php echo $row['status']; ?>">
                </div>

                <input type="submit" name="updateRoom" class="btn btn-success m-2" value="Update">
                <a href="./rooms.php" class="btn btn-secondary m-2" value="Back">Go back</a>
            <?php
        }
    ?>

</form>




<?php include("./footer.php"); ?>