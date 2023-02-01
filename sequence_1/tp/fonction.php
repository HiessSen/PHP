<?php
    switch ($_POST['race']) {
        case 'elfe':
            $messageRace = emoteElfe();
            break;
        case 'orc':
            $messageRace =emoteOrc();
            break;
        default:
            $messageRace =emoteHumain();
            break;
    }
    switch ($_POST['rank']) {
        case 'roturier':
            $messageRank = emoteRoture();
            break;
        case 'noble':
            $messageRank =emoteNoble();
            break;
        default:
            $messageRank =emoteRoture();
            break;
    }
    switch ($_POST['class']) {
        case 'mage':
            $messageClass = emoteMage();
            break;
        case 'warrior':
            $messageClass =emoteWarrior();
            break;
        case 'rogue':
            $messageClass =emoteRogue();
            break;
        default:
            $messageClass =emotePriest();
            break;
    }
    function emoteElfe()
    {
        return "Il est silencieux, élancé et particulièrement grand, même pour un elfe";
    }
    function emoteOrc()
    {
        return "L'individu avait l'air féroce, sanguinaire. Si le garde n'était pas aussi lourdement protegé, il n'aurait jamais soutenu le regard cet orque redoutable.";
    }
    function emoteHumain(){
        return "Le garde reconnu avec soulagement un de ses semblables. Il lui fit un signe de main avant de commencer à scruter son visage.";
    }
    function emoteRoture(){
        return "Lorsqu'il voit l'état de sa gueule, il ne peut s'empecher de se marrer.";
    }
    function emoteNoble(){
        return "Il remarqua immediatement que l'individu était bien appretée. Le garde se sentait nerveux.";
    }
    function emoteRoi(){
        return "A peine avait-il apperçu le manteau royal du voyageur qu'il se mit à trembler. En une fraction de seconde, ses chances de survie avaient drastiquement diminué.";
    }
    function emotePriest(){
        return "Il finit par s'efforcer de rester stoique à la vue du pendentif en or, typique des gens de foi, qui pendait à son cou.";
    }
    function emoteWarrior(){
        return "Il décide de redoubler de prudence en voyant l'énorme épée maculée de sang pendre à sa ceinture";
    }
    function emoteRogue(){
        return "Il remarque cependant que l'individu semble discret, et malgré son apparence, apte à se fendre dans une foule";
    }
    function emoteMage(){
        return "Il reprend son calme lorsqu'il voit Le baton de l'individu briller de la même couleur que ses yeux.";
    }
?>