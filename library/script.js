var btn = document.querySelector(".nav-button");
var navCont = document.querySelector("nav");

btn.addEventListener("click", function(){
    if(navCont.style.display === "none"){
        navCont.style.display = "block";
    }else{
        navCont.style.display = "none";
    }
});