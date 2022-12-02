function toggleMenu () {  
    const navbar = document.querySelector('.navbar');
    const burger = document.querySelector('.burger');
    
    burger.addEventListener('click', (e) => {    
      navbar.classList.toggle('show-nav');
    });    
  }
  toggleMenu();


  var popup = document.querySelector('.popup');
  var close = document.querySelector('.close');


 window.onload = function(){
     setTimeout(function(){
         popup.style.display = "block"
     },2000)
 }
close.addEventListener('click' , () =>{
 popup.style.display =" none"
          })

 
 
  