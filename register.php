<?php include("./nav.php"); ?>

<section id='register' class="py-5">
    <div class='containerLogin'>
        <div class="row">
          
        </div>
        <div class="col-md-6 offset-md-3">
        <a href='./login.php' class='backBtn btn btn-primary'>⬅️ Back</a>
        <h2>Registration</h2>
            <form action="./script.php" method="post">
                <div class='form-group'>
                    <label for='name'>Full Name</label>
                    <input type='text' class='form-control' placeholder='Enter Full Name' autoComplete='off' name='name'>
                </div>

                <div class='form-group'>
                    <label for='reg num'>Registration Number</label>
                    <input type='text' class='form-control' placeholder='Student registration number' autoComplete='off' name='regNum'>
                </div>

                <div class='form-group'>
                    <label for='room num'>Room Number</label>
                    <input type='text' class='form-control' placeholder='Student room number' autoComplete='off' name='roomNum'>
                </div>

                <div class='form-group'>
                    <label for='password'>Password</label>
                    <input type='password' class='form-control' placeholder='Enter Password' autoComplete='off' name='password'>
                </div>

                <div class='form-group'>
                    <label for='Confirm_password'>Confirm Password</label>
                    <input type='password' class='form-control' placeholder='Confirm Password' autoComplete='off' name='confirmPassword'>
                </div>

                <button class='loginBtn btn btn-primary' type='submit' name='register'>Register</button><br/>

                <div>
                    <a class='regBtn btn btn-secondary' href='./login.php'>Login</a>
                    <p class='formPara'>If you Already sign in please goto login</p>
                </div>
            </form>
        </div>
    </div>
</section>
<!--<div class='form-group'>
                    <label for='address'>Address</label>
                    <input type='text' class='form-control' placeholder='Address' autoComplete='off' name='address'>
                </div>

                <div class='form-group'>
                    <label for='faculty'>Email</label>
                    <input type='text' class='form-control' placeholder='Enter Faculty' autoComplete='off' name='email'>
                </div>

                <div class='form-group'>
                    <label for='Mobile number'>Mobile Number</label>
                    <input type='number' class='form-control' placeholder='Enter Mobile Number' autoComplete='off' name='mobNum'>
                </div>

                <div class='form-group'>
                    <label for='Ga_mob_num'>Gradient mobile number</label>
                    <input type='text' class='form-control' placeholder='Gradient mobile number' autoComplete='off' name='Ga_mob_num'>
                </div>

                <div class='form-group'>
                    <label for='DOB'>Mobile Number</label>
                    <input type='date' class='form-control' placeholder='Enter Date of Birth' autoComplete='off' name='dob'>
                </div>

                <div class='form-group'>
                    Select your gender
                    <select name="gender" id="gender">
                        <option value="1">Male</option>
                        <option value="1">Female</option>
                        <option value="1">None</option>
                    </select>
                </div>-->