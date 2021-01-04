const slider = document.querySelector('.slides');
const carousel = document.querySelector('.carousel');
const prev = document.querySelector('.prev-btn');
const next = document.querySelector('.next-btn');

var direction;

prev.addEventListener('click', function(){
    direction = 1;
    carousel.style.justifyContent = 'flex-end';
    slider.style.transform = 'translateX(100%)';
});

next.addEventListener('click', function(){
    direction = -1;
    carousel.style.justifyContent = 'flex-start';
    slider.style.transform = 'translateX(-100%)';
});

slider.addEventListener('transitionend', function(){
    if(direction === -1){
        slider.appendChild(slider.firstElementChild);
    }else if(direction === 1){
        slider.prepend(slider.lastElementChild);
    }
    slider.style.transition = 'none';
    slider.style.transform = 'translateX(0%)';
    setTimeout(function(){
        slider.style.transition = 'all 0.5s';
    });
});