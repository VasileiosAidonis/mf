<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-light text-dark">
   <div class="container text-center">
     <div id="register">
        <a class="navbar-brand d-flex pt-4">
           <div><img src="/svg/logo.svg" style="height:40px; border-right:2px solid #333;" class="pr-3 pl-5"></div>
           <div class="h2 pl-3">MyFlix</div>
           <div class="h5 pr-5 d-flex justify-content-end"><a href="~/">Home</div>
        </a>
        <div class="h1 text-center">Register</div>
        <div class="text-center  my_inputs">
            <div class="pt-2"> Username <br><input type="text" name="username" style="border-radius:5px;"></div>
            <div class="pt-2"> Email <br><input type="email" name="email" style="border-radius:5px;"></div>
            <div class="pt-2"> Password <br><input type="password" name="the_password" style="border-radius:5px;"></div>
            <div class="pt-2"> Confirm Password <br><input type="password" name="rew_password" style="border-radius:5px;"></div>
            <div class="pt-3"><a href="/billings" class="btn btn-primary btn active" role="button" aria-pressed="true">Sign Up</a></div>
            <div class="pt-1"> Already a Member? <a href="/logins">Sign in</a></div>
        </div>
     </div>
   </div>
   <script src="dist/app.js"></script>
</body>
</html>
