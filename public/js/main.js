$('#navbar').onePageNav({ // nv btn clr
	currentClass: 'active',
	changeHash: false,
	scrollSpeed: 750,
	scrollThreshold: 0.5,
	filter: '',
	easing: 'swing'
});

$('.navbar a').on('click', function(e){ // smooth scroll
    if(this.hash !== ' '){
        e.preventDefault();

        const hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        },800);
    }
});