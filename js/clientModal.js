/* Functionality for the client modal on clients page */
const clientModal = document.getElementById('clientModal');
const openClientModal = document.getElementById('openClientModal');
const closeClientModal = document.getElementById('closeClientModal');

clientModal.close();

openClientModal.addEventListener('click', () => {

    clientModal.showModal();

});

closeClientModal.addEventListener('click', () => {

    clientModal.close();

});
//functionality for closing the modal on interation of the darkened area
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