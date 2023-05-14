<?php
    $examiners = Array(
        Array("Anna","2016.11.24.","8:45","GAMF 4/8"),
        Array("Brittany","2016.11.24.","8:45","GAMF 4/8"),
        Array("Cinderella","2016.11.24.","8:45","GAMF 4/8"),
        Array("Diana","2016.11.24.","8:45","GAMF 4/8"),
        Array("Eva","2016.11.24.","8:45","GAMF 4/8"),
        Array("Fiona","2016.12.01.","13:30","GAMF 4/109"),
        Array("Hege","2016.11.24.","8:45","GAMF 4/8"),
        Array("Inga","2016.12.01.","13:30","GAMF 4/109"),
        Array("Johanna","2016.12.01.","13:30","GAMF 4/109"),
        Array("Kitty","2016.12.01.","13:30","GAMF 4/109"),
        Array("Linda","2016.12.01.","13:30","GAMF 4/109"),
        Array("Nina","2016.12.01.","13:30","GAMF 4/109")
    );

    switch($_GET['op']) {
        case "list":
                $answer = "";
                $find = strtolower($_GET['name3']);
                foreach($examiners as $index => $examiner) {
                    if(strpos(strtolower($examiner[0]), $find) >-1)
                        $answer .= "<option value = \"{$index}\">{$examiner[0]}</option>";
                }
            break;
        case "data":
                $examiner = $examiners[$_GET['index']];
                $answer = $examiner[1]." ".$examiner[2]."|".$examiner[3];
            break;
    }
    echo $answer;
?>