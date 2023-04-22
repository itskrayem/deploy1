let laptop= document.getElementById('laptop');
let layer1= document.getElementById('layer_1');
let layer2= document.getElementById('layer_2');
let layer3= document.getElementById('layer_3');
let stars= document.getElementById('stars');
let btn= document.getElementById('btn');
let btn1= document.getElementById('btn1');
let text= document.getElementById('text');

window.addEventListener('scroll', function(){
    let value = window.scrollY;
    stars.style.left = value *0.25+ 'px';
    laptop.style.top = value *0.6+ 'px';
    layer_3.style.top = value *0.2+ 'px';
    layer_2.style.top = value *0.4+ 'px';
    // text.style.marginTop = value *0.6+ 'px';
    btn.style.marginTop=value *0.2+ 'px';
    btn1.style.marginTop=value *0.2+ 'px';
})

// animation 
const elementsToAnimate = document.querySelectorAll('.animate-me');

function isElementInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom -300 <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function handleScroll() {
  elementsToAnimate.forEach(element => {
    if (isElementInViewport(element)) {
      element.classList.add('show');
    }
  });
}

window.addEventListener('scroll', handleScroll);