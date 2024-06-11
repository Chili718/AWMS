/* File for the never ending loop of logos on the clients page */

const scroller = document.querySelector(".logoScroller");
const scrollerInner = scroller.querySelector(".logoScrollerInner");
const scrollerContent = Array.from(scrollerInner.children);

//clone each of the logos to ensure a smooth loop of images
scrollerContent.forEach(item => {

    const dupItem = item.cloneNode(true);
    dupItem.setAttribute('aria-hidden', true);
    scrollerInner.appendChild(dupItem);

});
