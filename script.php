<?php 

    include('./dbconnect.php');
    session_start();

    //Register
    if(isset($_POST['register'])){
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $regNum = mysqli_real_escape_string($connect, $_POST['regNum']); // Corrected column name
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($connect, $_POST['confirmPassword']);
    
        #$address = mysqli_real_escape_string($connect, $_POST['address']);
        #$email = mysqli_real_escape_string($connect, $_POST['email']);
        #$mobNum = mysqli_real_escape_string($connect, $_POST['mobNum']);
        #$Ga_mob_num = mysqli_real_escape_string($connect, $_POST['Ga_mob_num']);
        #$dob = mysqli_real_escape_string($connect, $_POST['dob']);
        #$gender = mysqli_real_escape_string($connect, $_POST['gender']);

        #name, regNun, address, email, mobileNumber, gardientMobileNumber, bDay, gender, password, confirmPassword

        $sql="INSERT INTO studens(name,regNum,password,confirmPassword) VALUES('$name','$regNum','$password','$confirmPassword')";
        $result = mysqli_query($connect, $sql);

        if($result){
            if($password == $confirmPassword) {
                header('location:login.php');
                exit();
            } else {
                echo 'Password not matched. Try again!';
            }
        } else {
            echo 'Failed to connect' . mysqli_error($connect);
        }
    }

    #----------Login ----------------

    if(isset($_POST['login'])){
        $regNum = mysqli_real_escape_string($connect, $_POST['regNum']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        $sql = "SELECT * FROM studens WHERE regNum='$regNum' AND password='$password'";
        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $role = $row['role'];
            $username = $row['name'];
            if($role == 'admin'){
                $_SESSION['name']=$username;
                $_SESSION['regNum']=$regNum;
                header('location:admin.php');
                exit();
            } elseif ($role == 'warden'){
                $_SESSION['name']=$username;
                $_SESSION['regNum']=$regNum;
                header('location:warden.php');
                exit();
            } else {
                $_SESSION['name']=$username;
                $_SESSION['regNum']=$regNum;
                header('location:home.php');
                exit();
            }
        } else {
            echo 'Failed to login' . mysqli_error($connect);
        }
    }

    #-------- complain ----------
    if(isset($_POST['complain'])){
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $regNum = mysqli_real_escape_string($connect, $_POST['regNum']);
        $message = mysqli_real_escape_string($connect, $_POST['message']);

        $sql="INSERT INTO complain(name,regNum,message) VALUES('$name','$regNum','$message')";
        $result = mysqli_query($connect, $sql);

        if($result){
            header('location:home.php');
        }
    }
?>