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
.fromTo('#Nav ul', 3, {width: "70%", marginLeft:"5vw"}, {width:"45%", marginLeft:"15%"},0)
.fromTo('#Einleitung', 1,{autoAlpha:0}, {autoAlpha:1} , 2)
//Ideen
//.to('#img_start', 0.5 ,{borderColor: "rgba(0,0,0,1)"}, 2.5)
;

var scene = new ScrollMagic.Scene({
    triggerElement: "#start",
    triggerHook: 0,
    duration: "100%"
})
.addTo(controller)
.setPin('#body')
.setTween(Timeline);   