<?php include('./navAfterLog.php'); ?>

<div class="container">
  <h1>Your complains</h1>
  
    <form action="./script.php" method="post">
      <div class="profile-info">

        <div class='form-group'>
          <label for='name'>Name</label>
          <input type='text' class='form-control' value="<?php echo $_SESSION['name']; ?>" autoComplete='off' name='name'>
        </div>

        <div class='form-group'>
          <label for='Registration number'>Registration number</label>
          <input type='text' class='form-control' value="<?php echo $_SESSION['regNum']; ?>" autoComplete='off' name='regNum'>
        </div>

        <div class='form-group'>
          <label for='Complain'>Registration number</label>
          <textarea class='form-control' cols="30" rows="10" name="message"></textarea>
        </div>

      </div>

      <button class="btn btn-success" type='submit' name='complain'>Submit</button>
    </form>
    
  </div>

</body>
</html>
