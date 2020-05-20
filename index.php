<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Change Management, Leadership, International, Beratung, Consulting, Ingo Stolz, Stolz Consulting">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Stolz Consulting</title>
    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/BezierPlugin.min.js"></script>
</head>

<body>
<hr color="white" id="start">
    <div id="body">
    <?php
    include("content.php")
    ?>
    </div>
</body>
<script> 

    var controller = new ScrollMagic.Controller();
    //content
    $(".content").each(function(){
        var scene3 = new ScrollMagic.Scene({
            triggerElement: this,
            reverse: false,
            triggerHook: 0.5
        })
        .setClassToggle(this, 'visible')
        .addTo(controller);  
    })
    
    //startbilder

    var Timeline = new TimelineMax();
    Timeline
    .fromTo('#img_start', 2, {width: "100vw"}, {width: "20vw", x:"25vw", y:"20vh", zIndex: 99})
    .fromTo("#img_text", 1, {autoAlpha: 0, x:"25vw", y:"12vw"}, {autoAlpha:1}, 2)
    .fromTo('#Nav', 1, {opacity:0}, {opacity:1},0)
    .fromTo('#Nav ul', 3, {width: "70%"}, {width:"45%"},0)
    .fromTo('#Einleitung', 1,{autoAlpha:0}, {autoAlpha:1} , 2)
    ;

    var scene = new ScrollMagic.Scene({
        triggerElement: "#start",
        triggerHook: 0,
        duration: "100%"
    })
    .addTo(controller)
    .setPin('#body')
    .setTween(Timeline);
    



    // Zwischenbilder
    // var Timeline = new TimelineMax();
    // Timeline
    // .from("#lilahemd", 3, {y: "-30%", ease:Power0.easeNone}, 0);   
    //     var scene4 = new ScrollMagic.Scene({
    //     triggerElement: "#lila",
    //     triggerHook: 0.9,
    //     duration: "120%"
    // })
    // .setTween(Timeline)
    // .addTo(controller);

    // var Timeline2 = new TimelineMax();
    // Timeline2
    // .from("#Ingo-Carsten", 3, {y: "-30%", ease:Power0.easeNone}, 0);   
    
    // var scene5 = new ScrollMagic.Scene({
    //     triggerElement: "#carsten",
    //     triggerHook: 0.9,
    //     duration: "120%"
    // })
    // .setTween(Timeline2)
    // .addTo(controller);

    // var Timeline3 = new TimelineMax();
    // Timeline3
    // .from("#Ingo_nach_unten_schauend", 3, {y: "-50%", ease:Power0.easeNone}, 0);
    
    // var scene6 = new ScrollMagic.Scene({
    //     triggerElement: "#untent",
    //     triggerHook: 0.9,
    //     duration: "120%"
    // })
    // .setTween(Timeline3)
    // .addTo(controller);
</script>
</html>