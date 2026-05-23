<?php

session_start();

include "config/db.php";

$message = "";

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])){

            $_SESSION['user'] = $user['fullname'];
            $_SESSION['profile_pic'] = $user['profile_pic'];

            header("Location: dashboard.php");
            exit();

        }else{

            $message = "Incorrect Password ❌";
        }

    }else{

        $message = "Email not found ⚠️";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

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
        Login 🔐
    </h2>

    <?php if($message != ""){ ?>
        <div class="message">
            <?php echo $message; ?>
        </div>
    <?php } ?>

    <form method="POST">

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

        <button
            type="submit"
            name="login"
            class="btn btn-custom"
        >
            Login
        </button>

    </form>

    <p class="text-center mt-3">
        Don't have an account?
        <a href="register.php">Register</a>
    </p>

</div>

</body>
</html>