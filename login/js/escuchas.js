icono2 = document.getElementById('icono2');
icono3 = document.getElementById('icono3');

let btnMenu = document.getElementById('btn-menu');
let mainNav = document.getElementById('main-nav');

icono2.addEventListener('mouseover', () =>{
    icono2.style.color = "yellow"

});
icono2.addEventListener('mouseout', () =>{
    icono2.style.color = "blue"
});

icono3.addEventListener('mouseover', () =>{
    icono3.style.color = "yellow"
});
icono3.addEventListener('mouseout', () =>{
    icono3.style.color = "blue"
});


btnMenu.addEventListener('click', function(){
    mainNav.classList.toggle('mostrar');
});