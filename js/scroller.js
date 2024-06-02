const scroller = document.querySelector(".logoScroller");
const scrollerInner = scroller.querySelector(".logoScrollerInner");
const scrollerContent = Array.from(scrollerInner.children);

scrollerContent.forEach(item => {

    const dupItem = item.cloneNode(true);
    dupItem.setAttribute('aria-hidden', true);
    scrollerInner.appendChild(dupItem);

});
