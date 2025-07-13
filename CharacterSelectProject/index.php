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

<body>



    <div style="width: 50%" ;>
        <img src="CharacterNames/Name_Alisa.png" style="position: absolute; z-index: 10; margin-top:20%; margin-left:10%" id="currentCharacterName">
        <img src="" id="currentCharacterPicture" style="display: block; margin-top:10%; margin-left: auto; margin-right: auto; position: relative; z-index: -100;" class="">
    </div>

    <img src="Assets/P1Indicator.png" style="position: absolute; z-index: 5;" id="P1Indicator">     

    <div style="width: 65.5%; margin:auto; background-color:red; ">

        

        <div style="position: relative; display:flex; background-color:blue; ">

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

        <div style="position: relative; display: flex;">

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
        var characters = <?php echo json_encode($characters) ?>;
        var current = characters.Kazuya.character;
        var characterName = document.getElementById("currentCharacterName");
        var characterImage = document.getElementById("currentCharacterPicture");
        characterImage.src = "CharacterPictures/" + current.name + ".png";
        characterName.src = "CharacterNames/Name_" + current.name + ".png";
        characterImage.classList.add("anim");

        var characterIcon = document.getElementById(current.name + "Icon");
        var iconCoords = characterIcon.getBoundingClientRect();
        var indicator1 = document.getElementById("P1Indicator");
        indicator1.style.left = 665.2000122070312 + "px";
        indicator1.style.top = 437.8374938964844 + "px";


        document.addEventListener('keydown', function(e) {
            switch (e.key) {
                case 'ArrowUp':
                    if (current.up) {
                        current = characters[current.up].character
                        characterImage.classList.remove("anim");
                        characterImage.offsetWidth;
                        characterImage.classList.add("anim");
                        
                        characterIcon = document.getElementById(current.name + "Icon");
                        iconCoords = characterIcon.getBoundingClientRect();
                        indicator1.style.left = iconCoords.left + "px";
                        indicator1.style.top = iconCoords.top + "px";
                    }

                    

                    characterName.src = "CharacterNames/Name_" + current.name + ".png";
                    characterImage.src = "CharacterPictures/" + current.name + ".png";

                    break;
                case 'ArrowDown':
                    if (current.down) {
                        current = characters[current.down].character
                        characterImage.classList.remove("anim");
                        characterImage.offsetWidth;
                        characterImage.classList.add("anim");

                        characterIcon = document.getElementById(current.name + "Icon");
                        iconCoords = characterIcon.getBoundingClientRect();
                        indicator1.style.left = iconCoords.left +"px";
                        indicator1.style.top = iconCoords.top + "px";
                    }

                    

                    characterName.src = "CharacterNames/Name_" + current.name + ".png";
                    characterImage.src = "CharacterPictures/" + current.name + ".png";

                    break;
                case 'ArrowLeft':
                    if (current.left) {
                        current = characters[current.left].character
                        characterImage.classList.remove("anim");
                        characterImage.offsetWidth;
                        characterImage.classList.add("anim");

                        characterIcon = document.getElementById(current.name + "Icon");
                        iconCoords = characterIcon.getBoundingClientRect();
                        indicator1.style.left = iconCoords.left +"px";
                        indicator1.style.top = iconCoords.top + "px";
                    }

                    

                    characterName.src = "CharacterNames/Name_" + current.name + ".png";
                    characterImage.src = "CharacterPictures/" + current.name + ".png";

                    break;
                case 'ArrowRight':
                    if (current.right) {
                        current = characters[current.right].character
                        characterImage.classList.remove("anim");
                        characterImage.offsetWidth;
                        characterImage.classList.add("anim");

                        characterIcon = document.getElementById(current.name + "Icon");
                        iconCoords = characterIcon.getBoundingClientRect();
                        indicator1.style.left = iconCoords.left +"px";
                        indicator1.style.top = iconCoords.top + "px";
                    }

                    characterName.src = "CharacterNames/Name_" + current.name + ".png";
                    characterImage.src = "CharacterPictures/" + current.name + ".png";

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