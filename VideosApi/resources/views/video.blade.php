<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videos</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                           integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                           crossorigin="anonymous">
    <!--<link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" /> -->
    <link href="http://vjs.zencdn.net/5.10.2/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<body style="background-image:linear-gradient(-90deg, #868686, #E6E6E6, black, #760C0C, black, #E6E6E6, #868686)">
  <div class="container" style="background-color: #E8E7E7; border-left:1px solid #A1A1A1; border-right:1px solid #A1A1A1;">
    <a class="navbar-brand d-flex pt-4">
       <div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="40" id="svg" version="1.1" viewBox="0, 0, 400,214.22594142259413"  class="pr-3 pl-5">  <g id="svgg">
           <path id="path0" d="M41.964 55.852 C 39.135 60.797,36.820 65.316,36.820 65.894 C 36.820 66.472,45.481 66.946,56.067 66.946 C 66.653 66.946,75.314 67.551,75.314 68.290 C 75.314 69.030,69.016 89.365,61.319 113.479 L 47.324 157.322 56.219 157.322 C 69.035 157.322,70.903 155.934,90.798 131.617 C 100.695 119.521,111.785 106.234,115.443 102.092 C 123.065 93.461,123.450 90.655,112.205 125.670 C 104.555 149.491,104.209 152.343,108.500 156.226 C 115.115 162.213,118.614 160.093,143.874 134.787 C 157.165 121.472,168.259 110.797,168.526 111.065 C 168.794 111.332,166.006 119.267,162.331 128.697 C 151.294 157.018,151.947 157.837,184.949 157.031 C 204.559 156.552,207.878 156.053,212.018 152.961 C 221.748 145.692,219.593 143.933,200.960 143.933 C 191.687 143.933,184.100 143.426,184.100 142.807 C 184.100 142.188,188.243 130.922,193.305 117.771 C 203.490 91.317,204.591 83.655,198.791 79.593 C 190.005 73.439,185.097 76.079,157.228 101.946 C 140.034 117.906,140.373 118.488,150.060 89.629 C 156.434 70.643,156.915 65.263,152.588 61.347 C 144.201 53.757,135.936 58.720,112.971 85.136 C 101.925 97.842,92.680 107.739,92.426 107.130 C 92.173 106.521,95.374 95.438,99.539 82.501 C 111.480 45.417,112.471 46.862,75.102 46.862 L 47.108 46.862 41.964 55.852 M253.949 48.683 C 210.021 59.032,205.589 113.914,248.325 118.325 C 265.462 120.094,276.151 112.950,276.151 99.728 C 276.151 78.824,247.558 73.152,237.425 92.047 C 234.971 96.622,234.223 97.119,233.323 94.773 C 230.019 86.164,236.820 73.674,247.227 69.240 C 252.735 66.893,301.255 65.784,301.255 68.005 C 301.255 69.497,277.591 142.956,276.856 143.742 C 276.525 144.098,267.529 142.674,256.866 140.578 C 234.256 136.135,231.407 136.827,225.958 148.083 C 224.108 151.905,222.594 155.547,222.594 156.177 C 222.594 158.183,281.169 157.457,288.151 155.365 C 299.123 152.078,305.692 142.856,313.737 119.443 C 314.110 118.358,319.540 117.256,326.433 116.866 C 336.547 116.295,338.982 115.563,341.624 112.301 C 347.357 105.220,345.918 103.943,331.608 103.415 L 318.446 102.929 324.130 84.937 L 329.814 66.946 344.586 66.946 L 359.359 66.946 365.453 57.766 C 368.806 52.718,371.548 48.199,371.548 47.724 C 371.548 46.224,260.545 47.129,253.949 48.683 " stroke="none" fill="#000000" fill-rule="evenodd"/></g></svg>
       </div>
       <div class="h2 pl-3 pr-4 justify-content-start" style="border-left:2px solid #333;">MyFlix</div>
    </a>
    <div class="h5 pr-5 d-flex justify-content-end"><a href="/">Home</a></div>
    
    <div class="d-flex">
        <div class="pl-1" style=""><img src="{{ $video->image }}" decoding="async" style="height:70px; width:90px;"></div>
        <div class="h3 pt-4" style="margin-left: 50px;"> &#10077; {{ $video->name }} &#10078; </div>
        <div class="h5 pt-4" style="padding-left: 500px;"><strong>Category </strong>: {{ $video->category }}</div>
    </div>

    <hr>
    <div class="pt-2" style="margin-left: 13%; margin-right:20%;">
       <video  id="my-video"
               class="video-js vjs-big-play-centered"
               controls
               width="820"
               height="400"
               poster="{{ $video->image }}"
               data-setup="{}"
       >
          <source src="{{ $video->url }}" type="video/mp4">

          <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading
              to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
       </video>
    </div>

    <div class="pt-5 d-flex" style="padding-left:150px;">
       <?php
         $video_category = $video->category;
         $video_name = $video->name;
       ?>
       <div style="font-size:125%; padding-top:3px;">
          Because you watched a <strong>{{ $video->category }}</strong> Video :
       </div>
       <div class="pt-0" style="font-size:120%;">
         @foreach ($videos as $video)
           @if (($video->category == $video_category) && ($video->name != $video_name))
              <div class="pt-1 d-flex" style="padding-left:25px;">
                    &#10148; &nbsp;
                 <div class="font-italic font-weight-bolder">{{ $video->name }}</div> &nbsp; &nbsp;
                 <div class="badge badge-primary text-wrap" style="width: 6rem;">
                    <a href="/videos1/{{ $video->id }}" style="color:white;">
                        Watch Now
                    </a>
                 </div>
              </div>
           @endif
         @endforeach
       </div>
    </div>
    <div class="text-center" style="font-size:150%; padding-top:120px; padding-bottom:70px;">
       <div style="border:2px solid #B5127E; margin-left:38%; margin-right:38%; background-color: #B5127E; border-radius:20px;">
          <a href="/catalogues1/1" style="color:white;">
             Back to catalogues
          </a>
       </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="http://vjs.zencdn.net/5.10.2/video.js"></script>
    <script src="//cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="dist/app.js"></script>
  </div>
</body>
</html>
