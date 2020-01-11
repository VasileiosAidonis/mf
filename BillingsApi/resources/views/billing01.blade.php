<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billing</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-light text-dark">
   <div class="container">
     <a class="navbar-brand d-flex pt-4  text-center">
        <div><img src="/svg/logo.svg" style="height:40px; border-right:2px solid #333;" class="pr-3 pl-5"></div>
        <div class="h2 pl-3 pr-4 justify-content-start">MyFlix</div>
     </a>
     <a class="navbar-brand d-flex">
        <div class="h5 pr-5 d-flex justify-content-end"><a href="/">Home</a></div>

     </a>

     <div id="app">
             <h1>Hello App!</h1>
             <p>
                 <router-link to="/billings">Go to Foo</router-link>
                 <router-link to="/bar">Go to Bar</router-link>
             </p>

             
         </div>

     <div class="my_inputs text-center pt-2">
        <div class="h1">Payment Method</div>
        <div class="pt-2"> Card Type <br><input type="text" name="type" style="border-radius:5px;"></div>
        <div class="pt-2"> Card Holder's Name <br><input type="text" name="name" style="border-radius:5px;"></div>
        <div class="pt-2"> Card Number <br><input type="number" name="number" style="border-radius:5px;"></div>
        <div class="pt-2"> Security Number <br><input type="number" name="triple_number"  style="border-radius:5px;"></div>
        <div class="pt-3"><a href="/billings" class="btn btn-primary btn active" role="button" aria-pressed="true">Confirm</a></div>
      </div>
   </div>
   <script src="dist/app.js"></script>
</body>
</html>
