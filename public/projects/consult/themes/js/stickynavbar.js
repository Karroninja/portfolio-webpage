window.onscroll = function() {stickyNavbar()};

let navbar = document.querySelector(".nav-fixed");
let sticky = navbar.offsetTop;

let section = document.getElementById('section');
let windowWidth = window.innerWidth;
let navbarOnTop = document.querySelector('.navbar');

function stickyNavbar() {
    if (this.window.pageYOffset >= sticky) {
        navbar.style.position = "fixed";
        navbar.classList.add("sticky");
    } else {
        navbar.style.position = "relative";
        section.style.paddingTop = "120px";
        navbar.classList.remove("sticky");
    }
}

window.addEventListener('resize', () => {
    if (windowWidth >= 767) {
        navbarOnTop.style.visibility = "hidden";
    } else {
        navbarOnTop.style.visibility = "unset";
    }
})

if (windowWidth >= 767) {
    navbarOnTop.style.visibility = "hidden";
} else {
    navbarOnTop.style.visibility = "unset";
}
