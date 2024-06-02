const contactModal = document.getElementById('contactModal');
const openContactModal = document.getElementById('contact');
const closeContactModal = document.getElementById('closeContactModal');

const clientModal = document.getElementById('clientModal');
const openClientModal = document.getElementById('openClientModal');
const closeClientModal = document.getElementById('closeClientModal');

/* window.onload = function(){

    contactModal.showModal();

} */
openContactModal.addEventListener('click', () => {
 
    contactModal.showModal();

});

closeContactModal.addEventListener('click', () =>{

    contactModal.close();

});

openClientModal.addEventListener('click', () => {

    clientModal.showModal();

});

closeClientModal.addEventListener('click', () => {

    clientModal.close();

});

contactModal.addEventListener("click", e => {
    const dialogDimensions = contactModal.getBoundingClientRect();
    if (
        e.clientX < dialogDimensions.left ||
        e.clientX > dialogDimensions.right ||
        e.clientY < dialogDimensions.top ||
        e.clientY > dialogDimensions.bottom
    ) {
        contactModal.close();
    }
});

clientModal.addEventListener("click", e => {
    const dialogDimensions = clientModal.getBoundingClientRect();
    if (
        e.clientX < dialogDimensions.left ||
        e.clientX > dialogDimensions.right ||
        e.clientY < dialogDimensions.top ||
        e.clientY > dialogDimensions.bottom
    ) {
        clientModal.close();
    }
});