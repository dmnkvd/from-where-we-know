// scroll in next prev button

document.addEventListener("scroll", handleScroll);
// get a reference to our predefined button
var scrollToTopBtn1 = document.querySelector(".scrollToTopBtn1");

function handleScroll() {
  var scrollableHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var GOLDEN_RATIO = 0;

  if ((document.documentElement.scrollTop / scrollableHeight) > GOLDEN_RATIO) {
    //show button
    if (!scrollToTopBtn1.classList.contains("showScrollBtn1"))
      scrollToTopBtn1.classList.add("showScrollBtn1")
  } else {
    //hide button
    if (scrollToTopBtn1.classList.contains("showScrollBtn1"))
      scrollToTopBtn1.classList.remove("showScrollBtn1")
  }
}

scrollToTopBtn1.addEventListener("click", scrollToTop);

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}


