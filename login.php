<?php include('./nav.php'); ?>

<section id='login' class="py-5">
  <div class='containerLogin'>
      <div class="row">
          
      </div>
      <div class="col-md-6 offset-md-3">
      <a href="./index.php" class='backBtn btn btn-primary'>⬅️ Back</a>
        <h2>Login</h2>
        <form action="./script.php" method="post">
          <div class='form-group'>
            <label for='email'>Registration Number</label>
            <input type='text' class='form-control' placeholder='Student registration number' autoComplete='off' name='regNum'>
          </div>
          <div class='form-group'>
            <label for='password'>Password</label>
            <input type='password' class='form-control' placeholder='Enter Password' autoComplete='off' name='password'>
          </div>
          <button class='loginBtn btn btn-primary' type='submit' name='login'>Login</button><br/>
          <div>
            <a href="./register.php" class='regBtn btn btn-secondary'>Register</a>
            <p class='formPara'>Don't have an account</p>
          </div>
        </form>
      </div>
  </div>
</section>

