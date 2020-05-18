<!DOCTYPE html>
<html>
<head>
    <title>tugas1 modul 2</title>
    <style>
        .box {
            width: 20px;
            height: 20px;
            float: left;
            background-color: salmon;
            border: 1px solid;
            margin: 2px;
        }
        .box1 {
            width: 20px;
            height: 20px;
            float: left;
            background-color: skyblue;
            border: 1px solid;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php 
$a = 1;
while ($a <= 6) {
if ($a%2) {
for ($b=1; $b<=3; $b++) { 
    echo "<div class= 'box1'></div>";
    echo "<div class ='box'></div>";
}
}else {
    for ($b=1; $b <=3; $b++) { 
        echo "<div class= 'box'></div>";
        echo "<div class= 'box1'></div>";
    }
}
echo "<div class ='clear'></div>";
$a++;
}
 ?>
</body>
</html>