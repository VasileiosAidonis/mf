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
    <div class="h3 pt-3 pb-3">My First Video</div>
    <video  id="my-video"
            class="video-js vjs-big-play-centered"
            controls
            poster="http://vjs.zencdn.net/v/oceans.png"
            data-setup="{}"
    >
        <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">

        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading
            to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>
    <video id="my-video"
           class="video-js vjs-big-play-centered"
           controls
           poster="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/poster.png"
           data-setup="{}"
     >
         <source src="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/ed_hd.mp4" type="video/mp4">

        <p class="vjs-no-js">
             To view this video please enable JavaScript, and consider upgrading
             to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
     </video>
     <video id="my-video"
            class="video-js vjs-big-play-centered"
            controls
            poster="https://footage-hls.azureedge.net/footage-graded-thumbnail/3de69a7db5_503897_2-second.jpeg"
            data-setup="{}"
      >
      <source src="/media/examples/flower.mp4"
        type="video/mp4">

         <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading
              to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
         </p>
      </video>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="http://vjs.zencdn.net/5.10.2/video.js"></script>
    <script src="//cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="dist/app.js"></script>
  </div>
</body>
</html>
