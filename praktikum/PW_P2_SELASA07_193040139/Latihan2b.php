<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan2a</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding ="10">
        <tr>
        <th></th>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <th>Kolom <?= $i; ?></th>
        <?php endfor; ?>
        </tr>
        <?php for ($k=1; $k <=5 ; $k++) : ?>
            <tr></tr>
            <th>Baris <?= $k;?></th>
            
        <?php for ($j=1; $j <=5 ; $j++) : ?>
            <td>Baris <?=$k;?>, Kolom <?= $j;?></td>
            <?php endfor; ?>
            <?php endfor; ?>

    </table>
</body>
</html>