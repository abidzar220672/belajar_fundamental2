<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-
scale=1.0">
      <title>Mengenal Form </title>
</head>

<body>
      <?php

// if(isset($_POST['datasiswa']))

     ?>
      <tr>
            <td>NIS</td>
            <td>:</td?>
            <td>
                  <?= $_POST['NIS']; ?>
            </td>
      </tr>
      </p>
      <p>

            <tr>
                  <td>NAMA LENGKAP</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['Nama']; ?>
                  </td>
            </tr>
      </p>
      <p>

            <tr>
                  <td>Tempat Lahir</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['TempatLahir']; ?>
                  </td>
            </tr>
      </p>
      <p>


            <tr>
                  <td>Tanggal Lahir</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['TanggalLahir']; ?>
                  </td>
            </tr>
      </p>
      <p>


            <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['jenkel']; ?>
                  </td>
            </tr>
      </p>
      <p>



            <tr>
                  <td>Agama</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['agama']; ?>
                  </td>
            </tr>
      </p>
      <p>


            <tr>
                  <td>ALAMAT</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['Alamat']; ?>
                  </td>
            </tr>
      </p>
      <p>


            <tr>
                  <td>Asal Sekolah</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['AsalSekolah']; ?>
                  </td>
            </tr>
      </p>
      <p>


            <tr>
                  <td>Pilih Jurusan 1</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['PilJurusan1']; ?>
                  </td>
            </tr>
      </p>
      <p>

            <tr>
                  <td>Pilih Jurusan 2</td>
                  <td>:</td?>
                  <td>
                        <?= $_POST['PilJurusan2']; ?>
                  </td>
            </tr>
      </p>
      <p>

            <tr>
                  <td>Ekstrakulikuler</td>
                  <td>:</td?>
                  <td>
                        <?= implode(", ", $_POST['ekskul']); ?>
                  </td>
            </tr>
      </p>
      <p>



</body>

</html>