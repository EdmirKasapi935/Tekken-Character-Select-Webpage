<?php

use Dom\Document;

include("inits.php");

if(isset($_POST["upRequest"]))
{
    $current = $characters[$_POST["current"]];
    //$current = $current -> getUpperCharacter();
}
else if(isset($_POST["downRequest"]))
{
    $current = $characters[$_POST["current"]];
    //$current = $current -> getLowerCharacter();
}
else if(isset($_POST["leftRequest"]))
{
    $current = $characters[$_POST["current"]];
    //$current = $current -> getLeftCharacter();
}
else if(isset($_POST["rightRequest"]))
{
    $current = $characters[$_POST["current"]];
    //$current = $current -> getRightCharacter();
}
else
{
    $current = $characters["Kazuya"];
}


$upstring = '<?php if($current->getUpperCharacter()->getCharacterName() != "") { $current = $characters[$current->getUpperCharacter()->getCharacterName()]; } 
            echo $current->getCharacterName(); ?>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;"> <?php echo $current -> getCharacterName(); ?> </h1>
<h2 id="test"> Start </h2>

<img src="CharacterPictures/<?php echo $current->getCharacterName()?>.png" id="currentCharacterPicture" style="display: block; margin-left: auto; margin-right: auto;" >

<form action="" method="POST">
<input type="hidden" value="<?php echo $current->getUpperCharacter()->getCharacterName() ?>" name="current">
<input type="submit" name="upRequest" value="Up" <?php if ($current->getUpperCharacter()->getCharacterName() == "" ) echo "disabled" ?>>
</form>

<form action="" method="POST">
<input type="hidden" value="<?php echo $current->getLowerCharacter()->getCharacterName() ?>" name="current">
<input type="submit" name="downRequest" value="Down" <?php if ($current->getLowerCharacter()->getCharacterName() == "" ) echo "disabled" ?>>
</form>

<form action="" method="POST">
<input type="hidden" value="<?php echo $current->getLeftCharacter()->getCharacterName() ?>" name="current">
<input type="submit" name="leftRequest" value="Left" <?php if ($current->getLeftCharacter()->getCharacterName() == "" ) echo "disabled" ?>>
</form>

<form action="" method="POST">
<input type="hidden" value="<?php echo $current->getRightCharacter()->getCharacterName() ?>" name="current">
<input type="submit" name="rightRequest" value="Right" <?php if ($current->getRightCharacter()->getCharacterName() == "" ) echo "disabled" ?>>
</form>

<script>
    
    var characters = <?php echo json_encode($characters) ?>;
    var current = characters.Kazuya.character;
    var test = document.getElementById("test");
    test.innerHTML = current.name;

    document.addEventListener('keydown',function(e){
    switch(e.key){
        case 'ArrowUp': if(current.up){ current = characters[current.up].character };
                        test.innerHTML = current.name;    
                        break;
        case 'ArrowDown': if(current.down){ current = characters[current.down].character };
                          test.innerHTML = current.name;    
                          break;
        case 'ArrowLeft': if(current.left){ current = characters[current.left].character };
                          test.innerHTML = current.name;    
                          break;
        case 'ArrowRight': if(current.right){ current = characters[current.right].character };
                           test.innerHTML = current.name;    
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

