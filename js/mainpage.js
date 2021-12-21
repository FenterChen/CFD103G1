gsap.set(".mainpage", { zIndex: (i, target, targets) => targets.length - i });

var tl = new TimelineMax({ onUpdate: updatePercentage });
var tl2 = new TimelineMax();
const controller = new ScrollMagic.Controller();

tl.from('.prayTitle>h2', .5, { x: 200, opacity: 0 });
tl.from('.paryContent', .5, { x: 200, opacity: 0 });
tl.from('.prayTitle>button', .5, { y: -500, opacity: 0 });
tl.from('.prayBg', 1, { x: -200, opacity: 0, ease: Power4.easeInOut }, "=-1");


const scene = new ScrollMagic.Scene({
  triggerElement: ".adPray",
  // start: '+=100',
  triggerHook: "onLeave",
  duration: "100%"
})
  .setPin(".adPray")
  .setTween(tl)
  .addTo(controller);

const scene2 = new ScrollMagic.Scene({
  triggerElement: ".prayTitle"
})
  .setTween(tl2)
  .addTo(controller);


function updatePercentage() {
  //percent.innerHTML = (tl.progress() *100 ).toFixed();
  tl.progress();
  console.log(tl.progress());
}

function updatePercentage_4() {
  //percent.innerHTML = (tl.progress() *100 ).toFixed();
  tl_4.progress();
}


var tl_4 = new TimelineMax({ onUpdate: updatePercentage_4 });
var tl2_4 = new TimelineMax();
const controller2 = new ScrollMagic.Controller();

tl_4.from('.pomesTitle>h2', .5, { x: 200, opacity: 0 });
tl_4.from('.pomesContent', .5, { x: 200, opacity: 0 });
tl_4.from('.pomesTitle>button', .5, { y: -500, opacity: 0 });
tl_4.from('.pomesBg', 1, { x: -200, opacity: 0, ease: Power4.easeInOut }, "=-1");


const scene_4 = new ScrollMagic.Scene({
  triggerElement: ".adPomes",
  // start: '+=100',
  triggerHook: "onLeave",
  duration: "100%"
})
  .setPin(".adPomes")
  .setTween(tl_4)
  .addTo(controller);

const scene2_4 = new ScrollMagic.Scene({
  triggerElement: ".pomesTitle"
})
  .setTween(tl2_4)
  .addTo(controller2);
