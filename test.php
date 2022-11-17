<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Document</title>
</head>
<body>
<div class="popup">
    <div class="contentBox">
        <div class="close">
        </div>
    <h4>Inscrit toi ou connecte toi pour rejoidre notre communauté !</h4>
        <div class="imgBx">
           <img src="./img/Watch icon.png" alt=""> 
        </div>
        <div class="buttonPopup">
        <li class='navbar__link fifth'><a href='./inscription.php'>S'inscrire</a></li>
        <li class='navbar__link fifth'><a href='./connexion.php'>Connexion</a></li>
        </div>
    </div>
</div>

<script>
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

</script>

</html>