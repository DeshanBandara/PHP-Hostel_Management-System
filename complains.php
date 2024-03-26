<?php include("./navAfterLog.php"); ?>


<h1 class="text-center" >Complains</h1>

<table class="table table-stripped m-4">
    <thead>
        <tr>
            <th>Id</th>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Room ID</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $sql='SELECT * FROM complain';
        $res=mysqli_query($connect,$sql);

        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                $id=$row['id'];
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['regNum']."</td>";
                echo "<td>".$row['roomId']."</td>";
                echo "<td>".$row['message']."</td>";
                echo "<td>";
                echo "<a class='btn btn-danger btn-sm' href='./deleteComplain.php?id=$id'>Delete<a>";
            }
        }
    ?>

    </tbody>
</table>


<?php include("./footer.php"); ?>