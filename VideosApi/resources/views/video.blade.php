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
<body>
  <div class="container">
    <a class="navbar-brand d-flex pt-4">
       <div><img src="/svg/mf.svg" style="height:40px; border-right:2px solid #333;" class="pr-3 pl-5"></div>
       <div class="h2 pl-3">MyFlix</div>
       <div class="h5 pr-5 d-flex justify-content-end"><a href="/">Home</a></div>
    </a>
    <div class="d-flex">
        <div class="pl-1" style=""><img src="{{ $video->image }}" decoding="async" style="height:70px; width:90px;"></div>
        <div class="h3 pt-4" style="margin-left: 50px;"> {{ $video->name }} </div>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="http://vjs.zencdn.net/5.10.2/video.js"></script>
    <script src="//cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="dist/app.js"></script>
  </div>
</body>
</html>
