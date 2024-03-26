<?php 

    include('./dbconnect.php');
    session_start();

    //Register
    if(isset($_POST['register'])){
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $regNum = mysqli_real_escape_string($connect, $_POST['regNum']); // Corrected column name
        $roomNum = mysqli_real_escape_string($connect, $_POST['roomNum']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $confirmPassword = mysqli_real_escape_string($connect, $_POST['confirmPassword']);
    
        #$address = mysqli_real_escape_string($connect, $_POST['address']);
        #$email = mysqli_real_escape_string($connect, $_POST['email']);
        #$mobNum = mysqli_real_escape_string($connect, $_POST['mobNum']);
        #$Ga_mob_num = mysqli_real_escape_string($connect, $_POST['Ga_mob_num']);
        #$dob = mysqli_real_escape_string($connect, $_POST['dob']);
        #$gender = mysqli_real_escape_string($connect, $_POST['gender']);

        #name, regNun, address, email, mobileNumber, gardientMobileNumber, bDay, gender, password, confirmPassword

        $sql="INSERT INTO studens(name,regNum,roomNum,password,confirmPassword) VALUES('$name','$regNum','$roomNum','$password','$confirmPassword')";
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
            $roomNum = $row['roomNum'];
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
                $_SESSION['roomNum']=$roomNum;
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
        $roomId = mysqli_real_escape_string($connect, $_POST['roomId']);

        $sql="INSERT INTO complain(name,regNum,message,roomId) VALUES('$name','$regNum','$message','$roomId')";
        $result = mysqli_query($connect, $sql);

        if($result){
            header('location:home.php');
        }
    }

    if(isset($_POST['add_room'])){
        $roomNum = mysqli_real_escape_string($connect, $_POST['roomNum']);
        $status = mysqli_real_escape_string($connect, $_POST['status']);

        $sql = "INSERT INTO room(roomNum, status) VALUES('$roomNum','$status')";
        $res = mysqli_query($connect, $sql);
        if($res){
            header("location:rooms.php");
        } else {
            echo "Failed to add room". mysqli_error($connect);
        }
    }

    if(isset($_POST['updateRoom'])){
        $id=mysqli_real_escape_string($connect,$_POST['id']);
        $roomNum=mysqli_real_escape_string($connect,$_POST['roomNum']);
        $status=mysqli_real_escape_string($connect,$_POST['status']);

        $sql="UPDATE room SET status='$status' WHERE id='$id'";
        $res=mysqli_query($connect,$sql);

        if($res){
            header('location:rooms.php');
        }else{
            echo "Faild to update";
        }
    }
?>