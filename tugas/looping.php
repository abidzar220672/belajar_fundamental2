<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
        <tr>
            <td>Baris</td>
            <td>:</td>
            <td>
                <input type="number" name="baris" id="">
            </td>
        </tr>
        <tr>
            <td>Kolom</td>
            <td>:</td>
            <td>
                <input type="number" name="kolom" id="">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <button type="submit" name="submit">RUN!!</button>
            </td>
        </tr>
        </table>
    </form>



<?php
if(isset($_POST['submit'])){
$baris = $_POST['baris'];
$kolom = $_POST['kolom'];
?>

    <table border=1 style="width:50%;">
        <?php for($i = 1;$i <= $baris;$i++){ ?>
        <tr>
            <?php for($j = 1;$j <= $kolom;$j++){ ?>
            <td>
                baris
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
<?php } ?>

</body>
</html>