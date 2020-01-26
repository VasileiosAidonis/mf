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
     style="background-position: 50% 50%; background-image: url(&quot;https://images.unsplash.com/photo-1578694025944-dbcbef810b26?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;cs=tinysrgb&amp;dpr=4&amp;h=1850&amp;w=550&quot;);"
     data-image-width="1024" data-image-height= auto;>
   <div class="container text-center" style="background-color: #E8E7E7; opacity:98%">
     <a class="navbar-brand d-flex pt-4">
        <div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="40" id="svg" version="1.1" viewBox="0, 0, 400,214.22594142259413"  class="pr-3 pl-5">  <g id="svgg">
            <path id="path0" d="M41.964 55.852 C 39.135 60.797,36.820 65.316,36.820 65.894 C 36.820 66.472,45.481 66.946,56.067 66.946 C 66.653 66.946,75.314 67.551,75.314 68.290 C 75.314 69.030,69.016 89.365,61.319 113.479 L 47.324 157.322 56.219 157.322 C 69.035 157.322,70.903 155.934,90.798 131.617 C 100.695 119.521,111.785 106.234,115.443 102.092 C 123.065 93.461,123.450 90.655,112.205 125.670 C 104.555 149.491,104.209 152.343,108.500 156.226 C 115.115 162.213,118.614 160.093,143.874 134.787 C 157.165 121.472,168.259 110.797,168.526 111.065 C 168.794 111.332,166.006 119.267,162.331 128.697 C 151.294 157.018,151.947 157.837,184.949 157.031 C 204.559 156.552,207.878 156.053,212.018 152.961 C 221.748 145.692,219.593 143.933,200.960 143.933 C 191.687 143.933,184.100 143.426,184.100 142.807 C 184.100 142.188,188.243 130.922,193.305 117.771 C 203.490 91.317,204.591 83.655,198.791 79.593 C 190.005 73.439,185.097 76.079,157.228 101.946 C 140.034 117.906,140.373 118.488,150.060 89.629 C 156.434 70.643,156.915 65.263,152.588 61.347 C 144.201 53.757,135.936 58.720,112.971 85.136 C 101.925 97.842,92.680 107.739,92.426 107.130 C 92.173 106.521,95.374 95.438,99.539 82.501 C 111.480 45.417,112.471 46.862,75.102 46.862 L 47.108 46.862 41.964 55.852 M253.949 48.683 C 210.021 59.032,205.589 113.914,248.325 118.325 C 265.462 120.094,276.151 112.950,276.151 99.728 C 276.151 78.824,247.558 73.152,237.425 92.047 C 234.971 96.622,234.223 97.119,233.323 94.773 C 230.019 86.164,236.820 73.674,247.227 69.240 C 252.735 66.893,301.255 65.784,301.255 68.005 C 301.255 69.497,277.591 142.956,276.856 143.742 C 276.525 144.098,267.529 142.674,256.866 140.578 C 234.256 136.135,231.407 136.827,225.958 148.083 C 224.108 151.905,222.594 155.547,222.594 156.177 C 222.594 158.183,281.169 157.457,288.151 155.365 C 299.123 152.078,305.692 142.856,313.737 119.443 C 314.110 118.358,319.540 117.256,326.433 116.866 C 336.547 116.295,338.982 115.563,341.624 112.301 C 347.357 105.220,345.918 103.943,331.608 103.415 L 318.446 102.929 324.130 84.937 L 329.814 66.946 344.586 66.946 L 359.359 66.946 365.453 57.766 C 368.806 52.718,371.548 48.199,371.548 47.724 C 371.548 46.224,260.545 47.129,253.949 48.683 " stroke="none" fill="#000000" fill-rule="evenodd"/></g></svg>
        </div>
        <div class="h2 pl-3 pr-4 justify-content-start" style="border-left:2px solid #333;">MyFlix</div>
        <div class="h3 pt-3" style="color: black; font-size: 110%; padding-left:62%;">Hi,<b> {{ $user }}</b></div>
     </a>
       <form class="d-flex"  action="/catalogues" enctype="multipart/form-data" method="GET">
           <div class="pr-2 d-flex" style="margin-left:75%;">
              <div class="h5 pl-5 pr-2"style=""><button class="btn btn-secondary" style="font-size:85%;"><strong>Billing</strong></button></div>
           </div>
           <div class="h4 pl-3 d-flex justify-content-end" style="border-left: 1px solid black;">
              <a href="/logins1" style="padding:4px; padding-bottom:2px; background-color: #660B32; color:white; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.15); opacity:94%; text-decoration: none; border:1px solid #240311; border-radius:8px;">Logout</a>
           </div>
       </form>
       <div class="h5 pr-5 pb-1 d-flex justify-content-end"><a href="/">Home</a></div>

       <div id="app">
           <div class="pt-1 text-center">
              <div class="pb-3" style="font-size:160%;">
                <div class="pb-1" style="border:2px; border-radius:10px; margin-left:17%; margin-right:17%; background-image:linear-gradient(-90deg, #B56016, #B51616, #760C0C, #B51616, #B56016); color:white; opacity:92%">
                    Select Movies from our {{ 4 ?? $catalogue->count() }} Categories
                 </div>
              </div>
           </div>

           <form class="d-flex "  action="/catalogues/{catalogue}" enctype="multipart/form-data" method="POST">
              <div class="h4 text-left pl-5 pb-1 pt-1">{{ $catalogue->where('id', 1)->first()->name ?? "Category Not Available" }}</div>
              <div class="pt-2 pl-2"><?php if($catalogue->where('id', 1)->first()->thumbnail == 1){ ?>
                    <button style="background-color:blue;"><div style="opacity: 0%;">*<div></button>
                    <?php }else{?>
                    <button style="background-color: red; "><div style="opacity: 0%;">*<div></button>
              <?php }; ?>
              </div>
           </form>

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
           <div class="row pb-5">
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
