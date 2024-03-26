<?php include('./navAfterLog.php'); ?>

    <form action="./script.php" method="post" class="m-5" >
        <h1 class="text-center fw-bold" >Create New Employee</h1>

        <div class="form-group">
            <label for="" class="form-label fw-bold">Room ID</label>
            <input type="text" name="roomNum" placeholder="Enter room id" required class="form-control">
        </div>

        <div class="form-group">
            <label for="" class="form-label fw-bold">Status</label>
            <input type="text" name="status" placeholder="Enter room status" required class="form-control">
        </div>

        <input type="submit" name="add_room" class="btn btn-success m-2" value="Add">
        <a href="./rooms.php" class="btn btn-secondary m-2" value="Back">Go back</a>
    </form>

<?php include('./footer.php'); ?>