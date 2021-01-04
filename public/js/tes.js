
// cara lain view button untuk di bagian view data paticipants

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