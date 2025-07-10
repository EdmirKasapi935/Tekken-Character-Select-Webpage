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
        <img  src="CharacterNames/Name_Alisa.png" style="position: absolute; z-index: 1; margin-top:20%; margin-left:10%" id="currentCharacterName"> 
        <img src="" id="currentCharacterPicture" style="display: block; margin-top:10%; margin-left: auto; margin-right: auto; position: relative; z-index: -100;" class="">
    </div>
    <!--
offset top:80
offset left:329
-->

    <script>
        var characters = <?php echo json_encode($characters) ?>;
        var current = characters.Kazuya.character;
        var characterName = document.getElementById("currentCharacterName");
        var characterImage = document.getElementById("currentCharacterPicture");
        characterImage.src = "CharacterPictures/" + current.name + ".png";
        characterName.src = "CharacterNames/Name_"+current.name+".png";
        characterImage.classList.add("anim");

        document.addEventListener('keydown', function(e) {
            switch (e.key) {
                case 'ArrowUp':
                    if (current.up) {
                        current = characters[current.up].character
                        characterImage.classList.remove("anim");
                        characterImage.offsetWidth;
                        characterImage.classList.add("anim");
                    }
                    characterName.src = "CharacterNames/Name_"+current.name+".png";
                    characterImage.src = "CharacterPictures/" + current.name + ".png";

                    break;
                case 'ArrowDown':
                    if (current.down) {
                        current = characters[current.down].character
                        characterImage.classList.remove("anim");
                        characterImage.offsetWidth;
                        characterImage.classList.add("anim");
                    }
                    characterName.src = "CharacterNames/Name_"+current.name+".png";
                    characterImage.src = "CharacterPictures/" + current.name + ".png";

                    break;
                case 'ArrowLeft':
                    if (current.left) {
                        current = characters[current.left].character
                        characterImage.classList.remove("anim");
                        characterImage.offsetWidth;
                        characterImage.classList.add("anim");
                    }
                    characterName.src = "CharacterNames/Name_"+current.name+".png";
                    characterImage.src = "CharacterPictures/" + current.name + ".png";

                    break;
                case 'ArrowRight':
                    if (current.right) {
                        current = characters[current.right].character
                        characterImage.classList.remove("anim");
                        characterImage.offsetWidth;
                        characterImage.classList.add("anim");
                    }
                    characterName.src = "CharacterNames/Name_"+current.name+".png";
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