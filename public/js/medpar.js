const sliderr = document.querySelector('.slidess');
const carousell = document.querySelector('.carouselz');
const prevv = document.querySelector('.previ-btn');
const nextt = document.querySelector('.nextt-btn');

var directionz;

prevv.addEventListener('click', function(){
    directionz = 1;
    carousell.style.justifyContent = 'flex-end';
    sliderr.style.transform = 'translateX(100%)';
});

nextt.addEventListener('click', function(){
    directionz = -1;
    carousell.style.justifyContent = 'flex-start';
    sliderr.style.transform = 'translateX(-100%)';
});

sliderr.addEventListener('transitionend', function(){
    if(directionz === -1){
        sliderr.appendChild(sliderr.firstElementChild);
    }else if(directionz === 1){
        sliderr.prepend(sliderr.lastElementChild);
    }
    sliderr.style.transition = 'none';
    sliderr.style.transform = 'translateX(0%)';
    setTimeout(function(){
        sliderr.style.transition = 'all 0.5s';
    });
});