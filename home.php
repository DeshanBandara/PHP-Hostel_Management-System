<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Profile</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .container {
    max-width: 800px;
    margin: 50px auto;
  }
  h1 {
    text-align: center;
    margin-bottom: 30px;
  }
  .profile-info {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 30px;
  }
  .profile-info p {
    margin-bottom: 10px;
  }
</style>
</head>
<body>

<div class="container">
  <h1>Student Profile</h1>
  
  <div class="profile-info">
    <p><strong>Name:</strong> John Doe</p>
    <p><strong>Email:</strong> john@example.com</p>
    <p><strong>Student ID:</strong> 123456</p>
    <p><strong>Department:</strong> Computer Science</p>
    <p><strong>Batch:</strong> 2023</p>
    <p><strong>Address:</strong> 123 Main Street, Cityville</p>
  </div>
  
  <a href="edit_profile.html" class="btn btn-primary">Edit Profile</a>
  <a href="change_password.html" class="btn btn-secondary">Change Password</a>
  <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

</body>
</html>
