<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                           integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                           crossorigin="anonymous">

</head>

<body>
<div role="img" class="section-background-image"
     style="background-position: 50% 50%; background-image: url(&quot;https://images.pexels.com/photos/2917442/pexels-photo-2917442.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=1850&amp;w=860&quot;);"
     data-image-width="1024" data-image-height= auto;>

  <div class="container bg-light text-dark" style="opacity:95%;">
    <form action="/registers" enctype="multipart/form-data" method="post">

        <a class="navbar-brand d-flex pt-4  text-center">
           <div><img src="/svg/mf.svg" style="height:40px; border-right:2px solid #333;" class="pr-3 pl-5"></div>
           <div class="h2 pl-3 pr-4 justify-content-start">MyFlix</div>
        </a>
        <a class="navbar-brand d-flex">
           <div class="h5 pr-5 d-flex justify-content-end"><a href="/">Home</a></div>

        </a>
          <div>
            <div class="h1 p-1 pt-4 text-center">Registration</div>

            <div class="text-center">
                <label for="username" class="col-form-label">Username</label>
                <input id="username"
                       type="text"
                       class="form-control"
                       style="border-radius:10px; width:40%; margin-left:30%; margin-right:30%;"
                       name="username"
                       required autocomplete="username">
            </div>
            <div class="text-center">
                <label for="email" class="col-form-label">Email</label>
                <input id="email"
                       type="email"
                       class="form-control"
                       style="border-radius:10px; width:40%; margin-left:30%; margin-right:30%;"
                       name="email"
                       required autocomplete="email">
            </div>
            <div class="text-center">
                <label for="password" class="col-form-label">Password</label>
                <input id="password"
                       type="password"
                       class="form-control"
                       style="border-radius:10px; width:40%; margin-left:30%; margin-right:30%;"
                       name="password"
                       required autocomplete="password">
            </div>
            <div class="text-center">
                <label for="conf_password" class="col-form-label">Confirm Password</label>
                <input id="conf_password"
                       type="password"
                       class="form-control"
                       style="border-radius:10px; width:40%; margin-left:30%; margin-right:30%;"
                       name="conf_password"
                       required autocomplete="conf_password">
            </div>

            <div class="pt-3 text-center">
                 <button class="btn btn-primary">Register</button>
            </div>
            <div class="pt-1 text-center" style="padding-bottom:370px;"> Already a Member? <a href="/logins1">Sign in</a></div>

       </div>
    </form>
  </div>
   <script src="dist/app.js"></script>
</div>
</body>

</html>
