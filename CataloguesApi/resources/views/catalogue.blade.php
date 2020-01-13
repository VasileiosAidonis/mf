<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogue</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div role="img" class="section-background-image"
     style="background-position: 50% 50%; background-image: url(&quot;https://images.unsplash.com/photo-1578694025944-dbcbef810b26?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;cs=tinysrgb&amp;dpr=3&amp;h=1850&amp;w=860&quot;);"
     data-image-width="1024" data-image-height= auto;>
   <div class="container text-center" style="background-color: #E8E7E7; opacity:98%">
       <a class="navbar-brand d-flex pt-4">
          <div><img src="/svg/mf.svg" style="height:40px; border-right:2px solid #333;" class="pr-3 pl-5"></div>
          <div class="h2 pl-3">MyFlix</div>
          <div class="h5 pr-5 d-flex justify-content-end"><a href="/">Home</div></a>
       </a>
       <div id="app">
           <div class="pt-1 text-center">
              <div class="pb-3" style="font-size:160%;">
                <div class="pb-1" style="border:2px; border-radius:10px; margin-left:17%; margin-right:17%; background-image:linear-gradient(-90deg, #B56016, #B51616, #760C0C, #B51616, #B56016); color:white; opacity:92%">
                    Select Movies from our {{ 4 ?? $catalogue->count() }} Categories
                 </div>
              </div>
           </div>

           <div class="h4 text-left pl-5 pb-1 pt-1">{{ $catalogue->where('id', 1)->first()->name ?? "Category Not Available" }}</div>
           <div class="row pb-4">
               <div class="col-3 w-100">
                  <div style="font-size:110%;">Oceans</div><a href="/videos1/1"><img alt="Ocean.jpg" src="http://vjs.zencdn.net/v/oceans.png" decoding="async" width="220" height="290" data-file-width="220" data-file-height="290" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="font-size:110%;">Jellyfish</div><a href="/videos1/8"><img alt="Jellyfish.jpg" src="https://images.unsplash.com/photo-1540968221243-29f5d70540bf?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;au" decoding="async" width="220" height="290" data-file-width="259" data-file-height="290" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="font-size:110%;">Startrails</div><a href="/videos1/9"><img alt="Startrails.jpg" src="https://images.unsplash.com/photo-1523911420251-f3e985effe56?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80" decoding="async" width="220" height="290" data-file-width="220" data-file-height="290" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="color:red">Not Available</div><img alt="VideoNotAvailable.jpg" src="https://image.flaticon.com/icons/svg/813/813734.svg" decoding="async" width="220" height="290" data-file-width="220" data-file-height="290" style="border:1px solid #9999; background-color: white;">
               </div>
           </div>
           <div class="h4 text-left pl-5 pb-1 pt-2">{{ $catalogue->where('id', 2)->first()->name ?? "Category Not Available" }}</div>
           <div class="row  pb-4">
               <div class="col-3 w-100">
                  <div style="font-size:110%;">Elephants Dream</div><a href="/videos1/2"><img alt="Elephants_dream.jpg" src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png" decoding="async" width="220" height="290" data-file-width="259" data-file-height="290" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="font-size:110%;">Subaru On Street</div><a href="/videos1/6"><img alt="Subaru On Street.jpg" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/images/SubaruOutbackOnStreetAndDirt.jpg" decoding="async" width="220" height="290" data-file-width="220" data-file-height="296" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="font-size:110%;">Tears Of Steel</div><a href="/videos1/7"><img alt="Tears Of Steel.jpg" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/images/TearsOfSteel.jpg" decoding="async" width="220" height="290" data-file-width="220" data-file-height="290" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="color:red;">Not Available</div><img alt="VideoNotAvailable.jpg" src="https://image.flaticon.com/icons/svg/813/813734.svg" decoding="async" width="220" height="290" data-file-width="220" data-file-height="290" style="border:1px solid #9999; background-color: white;">
               </div>
           </div>
           <div class="h4 text-left pl-5 pb-1 pt-2">{{ $catalogue->where('id', 3)->first()->name ?? "Category Not Available" }}</div>
           <div class="row pb-4">
               <div class="col-3 w-100">
                  <div style="font-size:110%;">Big Buck Bunny</div><a href="/videos1/5"><img alt="BigBuckBunny.jpg" src="https://peach.blender.org/wp-content/uploads/bbb-splash.png?x23406" decoding="async" width="220" height="290" data-file-width="220" data-file-height="290" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="font-size:110%;">Robot</div><a href="/videos1/3"><img alt="Robot.jpg" src="https://images.unsplash.com/photo-1518314916381-77a37c2a49ae?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80" decoding="async" width="220" height="290" data-file-width="220" data-file-height="290" style="border:1px solid #9999;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="color:red;">Not Available</div><a href="#"><img alt="VideoNotAvailable.jpg" src="https://image.flaticon.com/icons/svg/813/813734.svg" decoding="async" width="220" height="290" data-file-width="220" data-file-height="290" style="border:1px solid #9999; background-color: white;"></a>
               </div>
               <div class="col-3 w-100">
                  <div style="color:red;">Not Available</div><img alt="VideoNotAvailable.jpg" src="https://image.flaticon.com/icons/svg/813/813734.svg" decoding="async" width="220" height="290" data-file-width="259" data-file-height="290" style="border:1px solid #9999; background-color: white;">
               </div>
           </div>
       </div>
       <script src="dist/app.js"></script>
   </div>
</div>
</body>
</html>
