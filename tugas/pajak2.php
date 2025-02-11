<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }


    td {
        padding: 1em;
    }

</style>



<body>



    <form>
    <?php

if(isset($_POST['pajak']))
// rumus
 
?>
        <table border=1 style="border-colaapse : collapse : width : 50%">


            <tr>
                <td>Nama Karayawan</td>
                <td>:</td>
                <td>
                <?= $_POST['nama']; ?>
                    
                </td>
            </tr>

            <tr>
                <td>Divisi/Jabatan</td>
                <td>:</td>
                <td>

                    <?= $_POST['divisi']; ?>

                </td>
            </tr>

            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td>
                <?= $_POST['gaji']; ?>
                    
                </td>
            </tr>

            <tr>
                <td>NPWP</td>
                <td>:</td>
                <td>
                <?= $_POST['npwp']; ?>
                
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td class="tombol">
                <button type="submit" name="pajak"> Submit </button>
        </td>
        </tr>  
        
        
</table>
    </from>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>