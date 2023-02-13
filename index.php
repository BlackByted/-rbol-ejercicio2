<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árbol</title>
    <style>
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <div>*</div>
       <?php
        for ($i=0; $i < 10; $i++) { 
            echo '<div>';
            if($i==0){
                echo 0;
            }else{
                for ($x=0; $x < $i+2; $x++) { 
                    echo 0;
                }
            }
            echo '</div>';
        }
       ?>
    </div>
</body>
</html>