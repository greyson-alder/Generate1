<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator</title>
    <link href="main.css" rel="stylesheet" />
</head>
<body>
    <div class="grid__container">
        <?php for ($i = 0; $i < 100; $i++) {
            $FILLED = rand(0, 2); 
            $ROTATED = rand(0, 5);
            ?>
            <div 
                class="grid__item"
                style=
                "
                background-color:
                    <?php
                    switch($FILLED) {
                        case 0: 
                            echo "hsla(" . rand(0, 360) . "deg, 75%, 100%, 0%)";
                            break;
                        case 1: 
                            echo "hsla(" . rand(0, 360) . "deg, 75%, 75%, 100%)";
                            break;
                        case 2: 
                            echo "transparent"; 
                            break;
                    }?>
                ;
                border:
                    <?php
                    switch($FILLED) {
                        case 0:
                            echo "4px solid hsl(".rand(0, 360)."deg, 75%, 75%)";
                            break;
                        default: 
                            echo "none";
                            break;
                    }
                    ?>
                ;
                transform: rotate(<?= $ROTATED*45 ?>deg);
                color: <?= $FILLED<2 ? "white" : "black" ?>;
                border-radius: <?= rand(0, 1) ? "10%" : "50%" ?>;
                "
                

            >|</div>
        <?php } 
        ?>
    </div>
</body>
</html>