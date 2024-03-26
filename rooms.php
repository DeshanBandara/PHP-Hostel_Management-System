<?php include("./navAfterLog.php"); ?>


<h1 class="text-center" >Room Details</h1>

<table class="table table-stripped m-4">
    <a class="btn btn-success m-2" href="./addroom.php">Add New Room</a>
    <thead>
        <tr>
            <th>Id</th>
            <th>Room ID</th>
            <th>Status</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $sql='SELECT * FROM room';
        $res=mysqli_query($connect,$sql);

        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                $id=$row['id'];
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['roomNum']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>";
                #echo "<a class='btn btn-primary btn-sm' href='./update.php?id=$id'>Update<a>"; //Warden can't change registered students details
                echo "<a class='btn btn-primary m-2 btn-sm' href='./updateRoom.php?id=$id'>Update<a>";
            }
        }
    ?>
    </tbody>
</table>


<?php include("./footer.php"); ?>