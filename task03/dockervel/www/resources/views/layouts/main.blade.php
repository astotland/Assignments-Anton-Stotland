<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Web development</title>
    <link rel="stylesheet" type="text/css" href={{ asset('css/style.css')}} />
</head>
<body>

<div id="headline">
    @yield('headline')
</div>

<div id="section1">
    @yield('section1')
</div>

<div id="section2">
    @yield('section2')
</div>

<div id="section3">
    @yield('section3')
</div>

<footer>
    @yield('footer')
</footer>

<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-52746336-1');ga('send','pageview');
    var isCompleted = {};
    function sampleCompleted(sampleName){
        if (ga && !isCompleted.hasOwnProperty(sampleName)) {
            ga('send', 'event', 'WebCentralSample', sampleName, 'completed');
            isCompleted[sampleName] = true;
        }
    }
</script>
<script type="text/javascript">
    function init() {
        window.matchMedia("(max-width: 600px)").addListener(hitMQ);
    }

    function hitMQ(evt) {
        sampleCompleted("GettingStarted-ContentWithStyles");
    }

    init();

</script>

</body>
</html>
