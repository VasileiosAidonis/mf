<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div role="img" class="section-background-image"
     style="background-position: 50% 50%; background-image: url(&quot;https://images.pexels.com/photos/2917442/pexels-photo-2917442.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=1850&amp;w=860&quot;);"
     data-image-width="1024" data-image-height= auto;>

  <div class="container bg-light text-dark" style="opacity:95%;">
    <form action="/logins"enctype="multipart/form-data" method="post">

        <a class="navbar-brand d-flex pt-4  text-center">
           <div><img src="/svg/mf.svg" style="height:40px; border-right:2px solid #333;" class="pr-3 pl-5"></div>
           <div class="h2 pl-3 pr-4 justify-content-start">MyFlix</div>
        </a>
        <a class="navbar-brand d-flex">
           <div class="h5 pr-5 d-flex justify-content-end"><a href="/">Home</a></div>
        </a>
        <div>
          <div class="h1 p-1 pt-4 text-center">Login</div>
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
              <label for="password" class="col-form-label">Password</label>
              <input id="password"
                     type="password"
                     class="form-control"
                     style="border-radius:10px; width:40%; margin-left:30%; margin-right:30%;"
                     name="password"
                     required autocomplete="password">
          </div>
          <div class="pt-2" style="color:red; margin-left:32%;">
             @if ( $error != [] )
               <li> {{  $error->content() }}</li>
             @endif
          </div>

          <div class="pt-3 text-center">
               <button class="btn btn-primary">Let's Go</button>
          </div>
          <div class="pt-1 text-center" style="padding-bottom:520px;"> Ready to join? <a href="registers1">Register</a></div>
       </div>
    </form>
  </div>
   <script src="dist/app.js"></script>
</div>
</body>
</html>
