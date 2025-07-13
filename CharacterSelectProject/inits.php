<?php

include("CharacterNode.php");

function initCharacters()
{
    $amk = new CharacterNode("Armor King");
    $ann = new CharacterNode("Anna");
    $ask = new CharacterNode("Asuka");
    $bae = new CharacterNode("Baek");
    $bob = new CharacterNode("Bob");
    $bru = new CharacterNode("Bruce");
    $kaz = new CharacterNode("Kazuya");
    $bry = new CharacterNode("Bryan");
    $chr = new CharacterNode("Christie");
    $dra = new CharacterNode("Dragunov");
    $edd = new CharacterNode("Eddy");
    $fen = new CharacterNode("Feng");
    $gan = new CharacterNode("Ganryu");
    $hei = new CharacterNode("Heihachi");
    $hwo = new CharacterNode("Hwoarang");
    $jac = new CharacterNode("Jack-6");
    $jul = new CharacterNode("Julia");
    $kin = new CharacterNode("King");
    $law = new CharacterNode("Law");
    $lee = new CharacterNode("Lee");
    $lei = new CharacterNode("Lei");
    $leo = new CharacterNode("Leo");
    $lil = new CharacterNode("Lili");
    $mar = new CharacterNode("Marduk");
    $mig = new CharacterNode("Miguel");
    $mok = new CharacterNode("Mokujin");
    $kum = new CharacterNode("Kuma");
    $nin = new CharacterNode("Nina");
    $pau = new CharacterNode("Paul");
    $rav = new CharacterNode("Raven");
    $rog = new CharacterNode("Roger");
    $ste = new CharacterNode("Steve");
    $wan = new CharacterNode("Wang");
    $xia = new CharacterNode("Xiaoyu");
    $yos = new CharacterNode("Yoshimitsu");
    $zaf = new CharacterNode("Zafina");
    $dvj = new CharacterNode("Devil Jin");
    $jin = new CharacterNode("Jin");
    $ali = new CharacterNode("Alisa");
    $lar = new CharacterNode("Lars");
    

    $amk -> initNeighbors(new CharacterNode(""), $hwo, $dra, $kin );
    $ann -> initNeighbors(new CharacterNode(""), $ste, $jul, $law);
    $ask -> initNeighbors($fen, new CharacterNode(""), $dvj, $bob);
    $bae -> initNeighbors(new CharacterNode(""), $jac, $kum, $lei);
    $bob -> initNeighbors($kaz, new CharacterNode(""), $ask, $leo);
    $bru -> initNeighbors($law,new CharacterNode(""), $ste, $yos);
    $kaz -> initNeighbors(new CharacterNode(""), $bob, $fen, $lar);
    $bry -> initNeighbors($lei, new CharacterNode(""), $jac, $edd);
    $chr -> initNeighbors($mar, new CharacterNode(""), $edd, $xia);
    $dra -> initNeighbors(new CharacterNode(""), $lil, $jin, $amk);
    $edd -> initNeighbors($nin, new CharacterNode(""), $bry, $chr);
    $fen -> initNeighbors(new CharacterNode(""), $ask, $rav, $kaz);
    $gan -> initNeighbors(new  CharacterNode(""), $yos, $law, $rog);
    $hei -> initNeighbors($kin, new CharacterNode(""), $hwo, $lee);
    $hwo -> initNeighbors($amk, new CharacterNode(""), $lil, $hei);
    $jac -> initNeighbors($bae, new CharacterNode(""), $mok, $bry);
    $jul -> initNeighbors(new CharacterNode(""), $lee, $kin, $ann);
    $kin -> initNeighbors(new CharacterNode(""), $hei, $amk, $jul);
    $law -> initNeighbors(new CharacterNode(""), $bru, $ann, $gan);
    $lee -> initNeighbors($jul, new CharacterNode(""), $hei, $ste);
    $lei -> initNeighbors(new CharacterNode(""), $bry, $bae, $nin);
    $leo -> initNeighbors($lar, new CharacterNode(""), $bob, $mig);
    $lil -> initNeighbors($dra, new CharacterNode(""), $zaf, $hwo);
    $mar -> initNeighbors(new CharacterNode(""), $chr, $nin, $pau);
    $mig -> initNeighbors($ali, new CharacterNode(""), $leo, $zaf);
    $mok -> initNeighbors($kum, new CharacterNode(""), new CharacterNode(""), $jac);
    $kum -> initNeighbors(new CharacterNode(""), $mok, new CharacterNode(""), $bae);
    $nin -> initNeighbors(new CharacterNode(""), $edd, $lei, $mar);
    $pau -> initNeighbors(new CharacterNode(""), $xia, $mar, $rav);
    $rav -> initNeighbors(new CharacterNode(""), $dvj, $pau, $fen);
    $rog -> initNeighbors(new CharacterNode(""), $wan, $gan, new CharacterNode(""));
    $ste -> initNeighbors($ann, new CharacterNode(""), $lee, $bru);
    $wan -> initNeighbors($rog, new CharacterNode(""), $yos, new CharacterNode(""));
    $xia -> initNeighbors($pau, new CharacterNode(""), $chr, $dvj);
    $yos -> initNeighbors($gan, new CharacterNode(""), $bru, $wan);
    $zaf -> initNeighbors($jin, new CharacterNode(""), $mig, $lil);
    $dvj -> initNeighbors($rav, new CharacterNode(""), $xia, $ask);
    $jin -> initNeighbors(new CharacterNode(""), $zaf, $ali, $dra);
    $ali -> initNeighbors(new CharacterNode(""), $mig, $lar, $jin);
    $lar -> initNeighbors(new CharacterNode(""), $leo, $kaz, $ali);

    $characters = array( "Armor King" => $amk,
                         "Anna" => $ann,
                         "Asuka" => $ask,
                         "Baek" => $bae,
                         "Bob" => $bob,
                         "Bruce" => $bru,
                         "Kazuya" => $kaz,
                         "Bryan" => $bry,
                         "Christie" => $chr,
                         "Dragunov" => $dra,
                         "Eddy" => $edd,
                         "Feng" => $fen,
                         "Ganryu" => $gan,
                         "Heihachi" => $hei,
                         "Hwoarang" => $hwo,
                         "Jack-6" => $jac,
                         "Julia" => $jul,
                         "King" => $kin,
                         "Law" => $law,
                         "Lee" => $lee,
                         "Lei" => $lei,
                         "Leo" => $leo,
                         "Lili" => $lil,
                         "Marduk" => $mar,
                         "Miguel" => $mig,
                         "Mokujin" => $mok,
                         "Kuma" => $kum,
                         "Nina" => $nin,
                         "Paul" => $pau,
                         "Raven" => $rav,
                         "Roger" => $rog,
                         "Steve" => $ste,
                         "Wang" => $wan,
                         "Xiaoyu" => $xia,
                         "Yoshimitsu" => $yos,
                         "Zafina" => $zaf,
                         "Devil Jin" => $dvj,
                         "Jin" => $jin,
                         "Alisa" => $ali,
                         "Lars" => $lar );

    return $characters;
}

function renderCharacterSection($char1,$char2,$char3,$char4)
{
    $chars = array($char1,$char2,$char3,$char4);
    echo "<div style='padding: 3px; display: flex; background-color:purple;'>";
    for($i=0; $i<4; $i++)
    {
        $char = $chars[$i];
        echo "<img src='CharacterIcons/".$char->getCharacterName()."Icon.png' id='".$char->getCharacterName()."Icon'>";
    }    
    echo "</div>";
    
}

$characters = initCharacters();

?>