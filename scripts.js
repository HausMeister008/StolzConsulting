var controller = new ScrollMagic.Controller();

var Timeline = new TimelineMax();
Timeline
.fromTo("#img_text", 1, {autoAlpha: 0}, {autoAlpha:1}, 0.2)
.fromTo("#Nav", 0.01, {autoAlpha:0}, {autoAlpha:1}, 0.99)
;

var scene = new ScrollMagic.Scene({
    triggerElement: "#start",
    triggerHook: 0,
    duration: "30%"
})
.addTo(controller)
.setPin('#body')
.setTween(Timeline);   
