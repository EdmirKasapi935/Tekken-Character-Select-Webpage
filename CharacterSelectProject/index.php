<?php

include("inits.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body style="background-image: url('Assets/ScreenBG.jpeg'); background-size: cover;">

<!-- height="540px" width="480px" -->

<div class="flex-container" style="position: static; z-index: 1;">
    <div class="flex-child">
        <img src="CharacterNames/Name_Alisa.png" id="currentP1Name" style="position: fixed; z-index: 3; margin-top:20%; margin-left:10%" >
        <img src="" id="currentP1Picture" style="display: block; margin-top:10%; margin-left: auto; margin-right: auto;" class="increase-size">
       
    </div>
    <div class="flex-child">
        <img src="CharacterNames/Name_Alisa.png" id="currentP2Name" style="position: fixed; z-index: 10; margin-top:20%; margin-left:25%" >
        <img src="" id="currentP2Picture" style="display: block; margin-top:10%; margin-left: auto; margin-right: auto;" class="increase-size">
    </div>
</div>

    
   
    <img src="Assets/P1Indicator.png" style="position: absolute; z-index: 5;" class="indicatorAnim" id="P1Indicator">
    <img src="Assets/P2Indicator.png" style="position: absolute; z-index: 5;" class="indicatorAnim" id="P2Indicator">      

    <div style="width: 54.2%; margin: auto; background-color:red; position:relative; z-index:4;">

        

        <div style="display:flex; background-color:blue; ">

            <?php
            renderCharacterSection($characters['Kuma'], $characters['Baek'], $characters['Lei'], $characters['Nina']);
            ?>

            <?php
            renderCharacterSection($characters['Marduk'], $characters['Paul'], $characters['Raven'], $characters['Feng']);
            ?>

            <?php
            renderCharacterSection($characters['Kazuya'], $characters['Lars'], $characters['Alisa'], $characters['Jin']);
            ?>

            <?php
            renderCharacterSection($characters['Dragunov'], $characters['Armor King'], $characters['King'], $characters['Julia']);
            ?>

            <?php
            renderCharacterSection($characters['Anna'], $characters['Law'], $characters['Ganryu'], $characters['Roger']);
            ?>

            

        </div>

        <div style="display: flex;">

            <?php
            renderCharacterSection($characters['Mokujin'], $characters['Jack-6'], $characters['Bryan'], $characters['Eddy']);
            ?>

            <?php
            renderCharacterSection($characters['Christie'], $characters['Xiaoyu'], $characters['Devil Jin'], $characters['Asuka']);
            ?>

            <?php
            renderCharacterSection($characters['Bob'], $characters['Leo'], $characters['Miguel'], $characters['Zafina']);
            ?>

            <?php
            renderCharacterSection($characters['Lili'], $characters['Hwoarang'], $characters['Heihachi'], $characters['Lee']);
            ?>

            <?php
            renderCharacterSection($characters['Steve'], $characters['Bruce'], $characters['Yoshimitsu'], $characters['Wang']);
            ?>
        </div>

    </div>

    <script>
        //the graph of the characters is converted to json from PHP
        var characters = <?php echo json_encode($characters) ?>;
        
        //initializing Kazuya as the default character for Players
        var currentP1 = characters.Kazuya.character;
        var currentP2 = characters.Kazuya.character;

        //setting the name and icon for Player 1
        var P1Name = document.getElementById("currentP1Name");
        var P1Image = document.getElementById("currentP1Picture");
        P1Image.src = "CharacterPictures/" + currentP1.name + ".png";
        P1Name.src = "CharacterNames/Name_" + currentP1.name + ".png";
        P1Image.classList.add("animp1");

        var P1Icon = document.getElementById(currentP1.name + "Icon");
        var P1iconCoords = P1Icon.getBoundingClientRect();
        var indicator1 = document.getElementById("P1Indicator");

        //setting the name and icon for Player 2
        var P2Name = document.getElementById("currentP2Name");
        var P2Image = document.getElementById("currentP2Picture");
        P2Image.src = "CharacterPictures/" + currentP2.name + ".png";
        P2Name.src = "CharacterNames/Name_" + currentP2.name + ".png";
        P2Image.classList.add("animp2");
        

        var P2Icon = document.getElementById(currentP2.name + "Icon");
        var P2iconCoords = P2Icon.getBoundingClientRect();
        var indicator2 = document.getElementById("P2Indicator");
        
        //coordinates of the kazuya icon, beacause the image is initially rendered at the top of the page
        indicator1.style.left = 684.25 + "px";
        indicator1.style.top = 501.8374938964844 + "px";

        indicator2.style.left = 684.25 + "px";
        indicator2.style.top = 501.8374938964844 + "px";

        //event listener for Player 1, navigates with WASD
        document.addEventListener('keydown', function(e) {
            switch (e.code) {
                case 'KeyW':
                    if (currentP1.up) {
                        currentP1 = characters[currentP1.up].character
                        P1Image.classList.remove("animp1");
                        P1Image.offsetWidth;
                        P1Image.classList.add("animp1");
                        
                        P1Icon = document.getElementById(currentP1.name + "Icon");
                        P1iconCoords = P1Icon.getBoundingClientRect();
                        indicator1.style.left = P1iconCoords.left + "px";
                        indicator1.style.top = P1iconCoords.top + "px";
                    }
  
                   
                    P1Name.src = "CharacterNames/Name_" + currentP1.name + ".png";
                    P1Image.src = "CharacterPictures/" + currentP1.name + ".png";
                    break;
                case 'KeyS':
                    if (currentP1.down) {
                        currentP1 = characters[currentP1.down].character
                        P1Image.classList.remove("animp1");
                        P1Image.offsetWidth;
                        P1Image.classList.add("animp1");
                        
                        P1Icon = document.getElementById(currentP1.name + "Icon");
                        P1iconCoords = P1Icon.getBoundingClientRect();
                        indicator1.style.left = P1iconCoords.left + "px";
                        indicator1.style.top = P1iconCoords.top + "px";
                    }
  
                   
                    P1Name.src = "CharacterNames/Name_" + currentP1.name + ".png";
                    P1Image.src = "CharacterPictures/" + currentP1.name + ".png";
                    break;
                case 'KeyA':
                   if (currentP1.left) {
                        currentP1 = characters[currentP1.left].character
                        P1Image.classList.remove("animp1");
                        P1Image.offsetWidth;
                        P1Image.classList.add("animp1");
                        
                        P1Icon = document.getElementById(currentP1.name + "Icon");
                        P1iconCoords = P1Icon.getBoundingClientRect();
                        indicator1.style.left = P1iconCoords.left + "px";
                        indicator1.style.top = P1iconCoords.top + "px";
                    }
  
                   
                    P1Name.src = "CharacterNames/Name_" + currentP1.name + ".png";
                    P1Image.src = "CharacterPictures/" + currentP1.name + ".png";
                    break;
                case 'KeyD':
                   if (currentP1.right) {
                        currentP1 = characters[currentP1.right].character
                        P1Image.classList.remove("animp1");
                        P1Image.offsetWidth;
                        P1Image.classList.add("animp1");
                        
                        P1Icon = document.getElementById(currentP1.name + "Icon");
                        P1iconCoords = P1Icon.getBoundingClientRect();
                        indicator1.style.left = P1iconCoords.left + "px";
                        indicator1.style.top = P1iconCoords.top + "px";
                    }
  
                   
                    P1Name.src = "CharacterNames/Name_" + currentP1.name + ".png";
                    P1Image.src = "CharacterPictures/" + currentP1.name + ".png";
                    break;
            }
        });

        //Event listner for Player 2, navigates with arrow keys
        document.addEventListener('keydown', function(e) {
            switch (e.key) {
                case 'ArrowUp':
                   if (currentP2.up) {
                        currentP2 = characters[currentP2.up].character
                        P2Image.classList.remove("animp2");
                        P2Image.offsetWidth;
                        P2Image.classList.add("animp2");
                        
                        P2Icon = document.getElementById(currentP2.name + "Icon");
                        P2iconCoords = P2Icon.getBoundingClientRect();
                        indicator2.style.left = P2iconCoords.left + "px";
                        indicator2.style.top = P2iconCoords.top + "px";
                    }
  
                   
                    P2Name.src = "CharacterNames/Name_" + currentP2.name + ".png";
                    P2Image.src = "CharacterPictures/" + currentP2.name + ".png";
                    break;
                case 'ArrowDown':
                   if (currentP2.down) {
                        currentP2 = characters[currentP2.down].character
                        P2Image.classList.remove("animp2");
                        P2Image.offsetWidth;
                        P2Image.classList.add("animp2");
                        
                        P2Icon = document.getElementById(currentP2.name + "Icon");
                        P2iconCoords = P2Icon.getBoundingClientRect();
                        indicator2.style.left = P2iconCoords.left + "px";
                        indicator2.style.top = P2iconCoords.top + "px";
                    }
  
                   
                    P2Name.src = "CharacterNames/Name_" + currentP2.name + ".png";
                    P2Image.src = "CharacterPictures/" + currentP2.name + ".png";
                    break;
                case 'ArrowLeft':
                   if (currentP2.left) {
                        currentP2 = characters[currentP2.left].character
                        P2Image.classList.remove("animp2");
                        P2Image.offsetWidth;
                        P2Image.classList.add("animp2");
                        
                        P2Icon = document.getElementById(currentP2.name + "Icon");
                        P2iconCoords = P2Icon.getBoundingClientRect();
                        indicator2.style.left = P2iconCoords.left + "px";
                        indicator2.style.top = P2iconCoords.top + "px";
                    }
  
                   
                    P2Name.src = "CharacterNames/Name_" + currentP2.name + ".png";
                    P2Image.src = "CharacterPictures/" + currentP2.name + ".png";
                    break;
                case 'ArrowRight':
                   if (currentP2.right) {
                        currentP2 = characters[currentP2.right].character
                        P2Image.classList.remove("animp2");
                        P2Image.offsetWidth;
                        P2Image.classList.add("animp2");
                        
                        P2Icon = document.getElementById(currentP2.name + "Icon");
                        P2iconCoords = P2Icon.getBoundingClientRect();
                        indicator2.style.left = P2iconCoords.left + "px";
                        indicator2.style.top = P2iconCoords.top + "px";
                    }
  
                   
                    P2Name.src = "CharacterNames/Name_" + currentP2.name + ".png";
                    P2Image.src = "CharacterPictures/" + currentP2.name + ".png";
                    break;
            }
        });
    </script>

</body>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>