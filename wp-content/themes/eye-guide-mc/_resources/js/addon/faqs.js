let allPanes = document.querySelectorAll(".accordion-content");
let allLinks = document.querySelectorAll(".accordion-trigger");

const toggleOpen = (e) => {
    e.preventDefault();
    let isOpen = false;
    let activeClass = "active";
    let timeout = isOpen ? 750 : 0; // 750 matches the transition speed in CSS.
    // let allPanes = document.querySelectorAll(".accordion-content");
    // let allLinks = document.querySelectorAll(".accordion-trigger");

    if (!e.currentTarget.classList.contains(activeClass)) {
      // A different accordion has been clicked. Close the all panes, open this one.
      allPanes.forEach(pane => {
        pane.style.maxHeight = null;
      });

      allLinks.forEach(link => {
        link.classList.remove(activeClass);
      });

      let currentPane = e.currentTarget.nextElementSibling;
      isOpen = true;
      e.currentTarget.classList.add(activeClass);
      setTimeout(() => {
        currentPane.style.maxHeight = currentPane.scrollHeight + "px";
      }, timeout);

      // let element = e.currentTarget;
    //   setTimeout(
    //     () => {
    //       // Let the animations finish before we get the top position...
    //       let elementTop =
    //         element.getBoundingClientRect().top + window.pageYOffset - 100;
    //       window.scrollTo({
    //         top: elementTop,
    //         left: 0,
    //         behavior: "smooth",
    //       });
    //     },
    //     isOpen ? 750 : 1250,
    //   );
    } else {
      // this accordion is already open so we just need to close everything.
      e.currentTarget.classList.remove(activeClass);
      allPanes.forEach(pane => {
        pane.style.maxHeight = null;
      });
      allLinks.forEach(link => {
        link.classList.remove(activeClass);
      });
      isOpen = false;
    }
  };

// Hide all content blocks
setTimeout(() => {
    allPanes[0].style.maxHeight = allPanes[0].scrollHeight + "px";
}, 500);

allLinks.forEach((link, i) => {
    // link.addEventListener('click', function (event) {
    //   toggleOpen(event);
    // });

    link.addEventListener('click', (event) => {toggleOpen(event)});
})



