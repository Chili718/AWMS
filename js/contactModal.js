const contactModal = document.getElementById('contactModal');
const openContactModal = document.getElementById('contact');
const closeContactModal = document.getElementById('closeContactModal');

/* clientModal.close(); */

openContactModal.addEventListener('click', () => {
 
    contactModal.showModal();

});

closeContactModal.addEventListener('click', () =>{

    contactModal.close();

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