<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SecureAuth System</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>

    body{
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      background:linear-gradient(135deg,#0f172a,#1e3a8a);
      font-family:Arial, sans-serif;
      overflow:hidden;
    }

    .glass-card{
      width:400px;
      padding:40px;
      border-radius:25px;
      background:rgba(255,255,255,0.08);
      backdrop-filter:blur(15px);
      border:1px solid rgba(255,255,255,0.2);
      box-shadow:0 8px 32px rgba(0,0,0,0.4);
      text-align:center;
      color:white;
    }

    .btn-custom{
      width:100%;
      margin-top:15px;
      padding:12px;
      border:none;
      border-radius:30px;
      background:linear-gradient(135deg,#00bfff,#8a2be2);
      color:white;
      font-weight:bold;
      transition:0.4s;
    }

    .btn-custom:hover{
      transform:scale(1.05);
    }

  </style>

</head>

<body>

  <div class="glass-card">

    <h1>SecureAuth System 🔐</h1>

    <p class="mt-3">
      PHP + MySQL Authentication System
    </p>

    <a href="register.php" class="btn btn-custom">
      Register
    </a>

    <a href="login.php" class="btn btn-custom">
      Login
    </a>

  </div>

</body>
</html>