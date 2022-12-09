document.querySelector("#donation_his__button").addEventListener('click', function() {
    document.querySelector('.modal_background').style.display='flex';
    document.querySelector('.edit_modal_background').style.display='flex';
}); 
document.querySelector("#close_button").addEventListener('click',
function() {
    document.querySelector('.modal_background').style.display='none'; 
    document.querySelector('.edit_background').style.display='none'; 
    document.querySelector('.edit_modal_background').style.display='none'; 
}); 
document.querySelector(".edit_modal_background").addEventListener('click',
function() {
    document.querySelector('.modal_background').style.display='none'; 
    document.querySelector('.edit_modal_background').style.display='none'; 
}); 
document.querySelector(".button_edit").addEventListener('click', function() {
    document.querySelector('.edit_background').style.display='flex';
    document.querySelector('.edit_modal_background').style.display='flex';
}); 
document.querySelector(".edit_modal_background").addEventListener('click',
function() {
    document.querySelector('.edit_background').style.display='none'; 
    document.querySelector('.edit_modal_background').style.display='none'; 
}); 

