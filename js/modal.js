const contactModal = document.getElementById('contactModal');
const openContactModal = document.getElementById('contact');
const closeContactModal = document.getElementById('closeContactModal');

/* window.onload = function(){

    contactModal.showModal();

} */
openContactModal.addEventListener('click', () => {
 
    contactModal.showModal();

});

closeContactModal.addEventListener('click', () =>{

    contactModal.close();

});