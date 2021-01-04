
//cv leader
// mencari id button lalu membuat dia dapat di clik setelah itu terjadi function
document.getElementById('button').addEventListener('click', 
function() {
    /*mencari tag yang mempunyai clas bg-modal. lalu saya mau mengganti css bagian display
    menjadi flex (display none menjadi display yg di bg-modal)*/
    document.querySelector('.bg-modal').style.display = 'flex';
});

document.querySelector('.close-btn').addEventListener('click', 
function() {
    document.querySelector('.bg-modal').style.display ='none';

});



// flazz card leader
// mencari id button lalu membuat dia dapat di clik setelah itu terjadi function
document.getElementById('buttonx').addEventListener('click', 
function() {
    /*mencari tag yang mempunyai clas bg-modal. lalu saya mau mengganti css bagian display
    menjadi flex (display none menjadi display yg di bg-modal)*/
    document.querySelector('.bg-modalx').style.display = 'flex';
});

document.querySelector('.close-btnx').addEventListener('click', 
function() {
    document.querySelector('.bg-modalx').style.display ='none';

});


//cv member
// mencari id button lalu membuat dia dapat di clik setelah itu terjadi function
document.getElementById('buttony').addEventListener('click', 
function() {
    /*mencari tag yang mempunyai clas bg-modal. lalu saya mau mengganti css bagian display
    menjadi flex (display none menjadi display yg di bg-modal)*/
    document.querySelector('.bg-modaly').style.display = 'flex';
});

document.querySelector('.close-btny').addEventListener('click', 
function() {
    document.querySelector('.bg-modaly').style.display ='none';

});


//flazz card member
// mencari id button lalu membuat dia dapat di clik setelah itu terjadi function
document.getElementById('buttonz').addEventListener('click', 
function() {
    /*mencari tag yang mempunyai clas bg-modal. lalu saya mau mengganti css bagian display
    menjadi flex (display none menjadi display yg di bg-modal)*/
    document.querySelector('.bg-modalz').style.display = 'flex';
});

document.querySelector('.close-btnz').addEventListener('click', 
function() {
    document.querySelector('.bg-modalz').style.display ='none';

});