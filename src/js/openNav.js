export default function openNav(){
    var nav = document.getElementById("hamburger");
    var overlay = document.getElementById("overlay");
    nav.addEventListener('click',function(){
        nav.classList.toggle("is-active");
        overlay.classList.toggle("show-overlay");
    })
}