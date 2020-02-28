function openNav(){
    var nav = document.getElementById("hamburger");
    var overlay = document.getElementById("overlay");
    nav.addEventListener('click',function(){
        console.log("click!")
        nav.classList.toggle("is-active");
        overlay.classList.toggle("show-overlay");
    })
}
