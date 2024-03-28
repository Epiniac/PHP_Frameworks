
    <?php
        $DATA = [["amelie.cavern","emilielaplusbelle123"],
        ["arthur.guillemin","petitoursbrun123"],
        ["jacques.chen","hello123"]];

        $userid = $_POST["id"];
        $userpw = $_POST["password"];
        $auth = false;

        if ($userid == "" || $userpw == "") {
            die('Dude please respect my work...');
        }

        foreach($DATA as $data => $value){
            if ($value[0] === $userid && $value[1] === $userpw) {
                echo "Welcome ".$userid;
                $auth = true;
            }
        }
        if (!$auth) {
            echo "Wrong password or ID !"; 
        }


    ?>
