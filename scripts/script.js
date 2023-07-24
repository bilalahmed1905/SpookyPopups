let faq = document.getElementsByClassName("accordion");
let i;
for (i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function () {
                this.classList.toggle("active");
                let panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                        panel.style.display = "none";
                } else {
                        panel.style.display = "block";
                }
        });
}
let availableStock = function () {
        let all = document.getElementsByClassName("product");
        const locations = ["Calgary", "Edmonton", "Vancouver", "All Locations", , "All Locations", "All Locations", "All Locations"]
        for (let i = 0, max = all.length; i < max; i++) {
                let r = Math.floor(Math.random() * (locations.length - 1))
                console.log(locations[r])
                if (locations[r] == undefined) {
                        locations[r] = locations[r - 1]
                }
                all[i].innerHTML += `\n ${locations[r]} <i class="fa-solid fa-check"></i>`
                all[i].style.margin = "10px 15px"
                all[i].textAlign = "center"
                all[i].className += " subtitle"
        }
}
availableStock()
document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                });
        });

});
let validateContactForm = function () {
        let form = document.getElementById('contact')
        let fullname = document.getElementById('fullname')
        let email = document.getElementById('email')
        let howYouFoundUs = document.getElementById('howYouFoundUs')
        if (fullname.value == "" || email.value == "" && howYouFoundUs.value == "") {
                form.onsubmit(() => {
                        let e = event;
                        e.preventDefault()
                        if (e.defaultPrevented) {
                                window.alert("Please fill out all fields")
                                return true;
                        } else {
                                window.alert("Please fill out all fields")
                        }
                })
        }
}
let j = 0;
let txt = "Popping up to provide you with top quality halloween gear!";
let speed = 50;
let spook = document.getElementById("spook");
spook.style.textAlign = "center";
spook.style.color = "orange";
spook.style.fontSize = "20px";
let typeWriter = function () {
        if (j < txt.length) {
                spook.innerHTML += txt.charAt(j);
                j++;
                setTimeout(typeWriter, speed);
        }
}
typeWriter();

let slideIndex = 0;

let showSlides = function () {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2500);
}

let currentSlide = function (n) {
        showSlides(slideIndex = n);
}