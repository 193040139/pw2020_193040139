<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .kotak {
            width: 160px;
            height: 160px;
            border: 1px solid;

        }
        .k1 {
            border: 1px solid;
            width: 40px;
            height: 40px;
            border-radius: 100%;
            background-color: salmon;
            text-align: center;
            margin: 5px;
            float: left;
            line-height: 40px;

        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
   
    <?php
    $a=1;
    ?>
 <div class="kotak">
   <?php while ($a<=3){
        for ($b=$a; $b>=1 ; $b--) { 
           echo "<div class='k1'>$a</div>";
           
        }
        echo "<div class ='clear'></div>"; 
    $a++;
    }
    ?>
 </div>
</body>
</html>