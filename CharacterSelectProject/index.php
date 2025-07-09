<?php

include("inits.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;" id="currentCharacterText"> Character </h1>

<img src="" id="currentCharacterPicture" style="display: block; margin-left: auto; margin-right: auto;" >



<script>
    
    var characters = <?php echo json_encode($characters) ?>;
    var current = characters.Kazuya.character;
    var characterText = document.getElementById("currentCharacterText");
    var characterImage = document.getElementById("currentCharacterPicture");
    characterText.innerHTML = current.name;
    characterImage.src = "CharacterPictures/" + current.name + ".png";

    document.addEventListener('keydown',function(e){
    switch(e.key){
        case 'ArrowUp': if(current.up){ current = characters[current.up].character };
                        characterText.innerHTML = current.name;
                        characterImage.src = "CharacterPictures/" + current.name + ".png";    
                        break;
        case 'ArrowDown': if(current.down){ current = characters[current.down].character };
                          characterText.innerHTML = current.name;
                          characterImage.src = "CharacterPictures/" + current.name + ".png";    
                          break;
        case 'ArrowLeft': if(current.left){ current = characters[current.left].character };
                          characterText.innerHTML = current.name;
                          characterImage.src = "CharacterPictures/" + current.name + ".png";    
                          break;
        case 'ArrowRight': if(current.right){ current = characters[current.right].character };
                           characterText.innerHTML = current.name;
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

