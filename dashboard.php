<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<style>

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    background:linear-gradient(135deg,#0f172a,#1e3a8a);
    color:white;
    font-family:Arial;
}

a{
    margin-top:20px;
    padding:12px 25px;
    border-radius:30px;
    text-decoration:none;
    background:linear-gradient(135deg,#00bfff,#8a2be2);
    color:white;
}

</style>

</head>

<body>
<img 
    src="uploads/<?php echo $_SESSION['profile_pic']; ?>"
    width="150"
    height="150"
    style="
        border-radius:50%;
        object-fit:cover;
        border:4px solid white;
        margin-bottom:20px;
    "
>

<h1>
    Welcome,
    <?php echo $_SESSION['user']; ?> 🚀
</h1>
<a href="logout.php">
    Logout
</a>

</body>
</html>