<?php include("./navAfterLog.php"); ?>


<h1 class="text-center" >Student Details</h1>

<table class="table table-stripped m-4">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Reg. No</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $sql='SELECT * FROM studens';
        $res=mysqli_query($connect,$sql);

        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                $id=$row['id'];
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['regNum']."</td>";
                echo "<td>";
                #echo "<a class='btn btn-primary btn-sm' href='./update.php?id=$id'>Update<a>"; //Warden can't change registered students details
                echo "<a class='btn btn-danger m-2 btn-sm' href='./delete.php?id=$id'>Delete<a>";
            }
        }
    ?>
    </tbody>
</table>


<?php include("./footer.php"); ?>