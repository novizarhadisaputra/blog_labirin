
scrollBtn = document.getElementById("scrollBtn");

window.onscroll = function() {scrollFunction(), stickyHeaderNav()};

//Sticky Navbar:
function stickyHeaderNav() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector(".nav-scroller").classList.add("nav-stick");
  } else {
    document.querySelector(".nav-scroller").classList.remove("nav-stick");
  }
}

//Scroll button:
function scrollFunction() {
  scrollBtn.style.display = "none";
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    scrollBtn.style.display = "block";
  } else {
    scrollBtn.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}