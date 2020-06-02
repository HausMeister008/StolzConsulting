var controller = new ScrollMagic.Controller();
//content
$(".content").each(function(){
    var scene3 = new ScrollMagic.Scene({
        triggerElement: this,
        reverse: false,
        triggerHook: 0.6
    })
    .setClassToggle(this, 'visible')
    .addTo(controller);  
})

//startbilder
var Timeline = new TimelineMax();
Timeline
.fromTo('#img_start', 2, {width: "90vw"}, {width: "40vw", x:"13vw", y:"20vh"})
.fromTo("#img_text", 1, {autoAlpha: 0}, {autoAlpha:1}, 2)
.fromTo('#Nav', 1, {opacity:0}, {opacity:1},0)
.fromTo('#Einleitung', 0.1, {marginTop:"-4%"}, {marginTop:"10%"},0.3)
.fromTo('#Nav ul', 3, {width: "70%", marginLeft:"5vw"}, {width:"50%", marginLeft:"15%"},0)
//Ideen
//fromTo("#Einleitung", 1, {opacity:0}, {opacity:1},2)
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
