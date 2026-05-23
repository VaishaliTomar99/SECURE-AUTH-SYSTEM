<?php

include "config/db.php";

$message = "";

if(isset($_POST['register'])){

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $password = $_POST['password'];

    $confirmPassword = $_POST['confirm_password'];

    if($password != $confirmPassword){

        $message = "Passwords do not match ❌";

    }else{

        $checkEmail = "SELECT * FROM users WHERE email='$email'";

        $result = mysqli_query($conn, $checkEmail);

        if(mysqli_num_rows($result) > 0){

            $message = "Email already exists ⚠️";

        }else{

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $insertQuery = "INSERT INTO users(fullname,email,password)
                            VALUES('$fullname','$email','$hashedPassword')";

            if(mysqli_query($conn, $insertQuery)){

                $message = "Registration Successful ";

            }else{

                $message = "Something went wrong ❌";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#0f172a,#1e3a8a);
    font-family:Arial,sans-serif;
}

.glass-card{
    width:400px;
    padding:40px;
    border-radius:25px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(15px);
    border:1px solid rgba(255,255,255,0.2);
    color:white;
}

.form-control{
    margin-bottom:15px;
    border-radius:12px;
}

.btn-custom{
    width:100%;
    padding:12px;
    border:none;
    border-radius:30px;
    background:linear-gradient(135deg,#00bfff,#8a2be2);
    color:white;
    font-weight:bold;
}

.message{
    text-align:center;
    margin-bottom:15px;
    color:#00ffcc;
}

a{
    color:#00d4ff;
    text-decoration:none;
}

</style>

</head>

<body>

<div class="glass-card">

    <h2 class="text-center mb-4">
        Register 
    </h2>

    <?php if($message != ""){ ?>
        <div class="message">
            <?php echo $message; ?>
        </div>
    <?php } ?>

    <form method="POST" enctype="multipart/form-data">

        <input
            type="text"
            name="fullname"
            class="form-control"
            placeholder="Full Name"
            required
        >

        <input
            type="email"
            name="email"
            class="form-control"
            placeholder="Email Address"
            required
        >

        <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Password"
            required
        >

        <input
            type="password"
            name="confirm_password"
            class="form-control"
            placeholder="Confirm Password"
            required
        >

        <button
            type="submit"
            name="register"
            class="btn btn-custom"
        >
            Register
        </button>

    </form>

    <p class="text-center mt-3">
        Already have an account?
        <a href="login.php">Login</a>
    </p>

</div>

</body>
</html>
