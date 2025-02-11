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
      <form action="proses.php" method="POST">
            <fieldset>
                  <legend>
                        <h1>Formulir Peserta </h1>
                  </legend>
                  <p>Silahkan isi data berikut :</p>
                  <tr>
                 <td> NIS </td> 
                 <td>: </td> 
                 <td><input type="number" class="form-control"  name="NIS">
                  </td>
                  </tr>

                        Nama Lengkap : <input type="text" class="form-control"  name="Nama">
                  </p>
                  <p>

                        Tempat Lahir : <input type="text" class="form-control"  name="TempatLahir">
                  </p>
                  <p>

                        Tanggal Lahir : <input type="date" class="form-control"  name="TanggalLahir">
                  </p>
                  <p>
                        Jenis Kelamin :
                        <input type="radio" name="jenkel" value="laki-laki">Laki-laki
                        <input type="radio" name="jenkel" value="perempuan">Perempuan
                  </p>
                  <p>

                        Agama : <select id="Agama" name="agama">
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katolik">Katolik</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Budha">Budha</option>
                              <option value="Konghucu">Konghucu</option>
                        </select>
                  </p>
                  <p>

                  <p>ALAMAT :</p>
                  <textarea name="Alamat" id="Alamat" cols="30" rows="10"></textarea>
                  </p>
                  <p>
                        Asal Sekolah : <input type="text" class="form-control"  name="AsalSekolah">
                  </p>
                  <p>
                        Pilih Jurusan 1 : <select id="Pil Jurusan 1" name="PilJurusan1">
                              <option value="TIDAK MEMILIH">TIDAK MEMILIH</option>
                              <option value="pplg">PENGEMBANGAN PERANGKAT LUNAK & GIM
                              </option>
                              <option value="tjkt">TEKNIK JARINGAN KOMPUTER &
                                    TELEKOMUNIKASI</option>
                              <option value="dkv">DESAIN KOMUNIKASI VISUAL</option>
                              <option value="sp">SENI PERTUNJUKAN</option>
                              <option value="akl">AKUNTANSI KEUANGAN LEMBAGA</option>
                              <option value="mplb">MANAJEMEN PERKANTORAN & LAYANAN
                                    BISNIS</option>
                              <option value="ph">PERHOTELAN</option>
                              <option value="pm">PEMASARAN</option>
                              <option value="bdp">BROADCASTING & PERFILMAN</option>
                        </select>
                  </p>
                  <p>

                        Pilih Jurusan 2 : <select id="Pil Jurusan 2" name="PilJurusan2">
                              <option value="TIDAK MEMILIH">TIDAK MEMILIH</option>
                              <option value="pplg">PENGEMBANGAN PERANGKAT LUNAK & GIM
                              </option>
                              <option value="tjkt">TEKNIK JARINGAN KOMPUTER &
                                    TELEKOMUNIKASI</option>
                              <option value="dkv">DESAIN KOMUNIKASI VISUAL</option>
                              <option value="sp">SENI PERTUNJUKAN</option>
                              <option value="akl">AKUNTANSI KEUANGAN LEMBAGA</option>
                              <option value="mplb">MANAJEMEN PERKANTORAN & LAYANAN
                                    BISNIS</option>
                              <option value="ph">PERHOTELAN</option>
                              <option value="pm">PEMASARAN</option>
                              <option value="bdp">BROADCASTING & PERFILMAN</option>
                        </select>
                  </p>
                  <p>

                        Ekstrakulikuler:
                        <input type="checkbox" name="ekskul[]" value="osis">OSIS
                        <input type="checkbox" name="ekskul[]" value="DA">PRAMUKA
                        <input type="checkbox" name="ekskul[]" value="pecinta alam">PA
                        <input type="checkbox" name="ekskul[]" value="remas">REMAS AL-KAUTSAR
                        <input type="checkbox" name="ekskul[]" value="palang merah remaja">PMR/UKS
                        <input type="checkbox" name="ekskul[]" value="futsal">FUTSAL
                        <input type="checkbox" name="ekskul[]" value="basket">BASKET
                        <input type="checkbox" name="ekskul[]" value="voli">VOLI
                        <input type="checkbox" name="ekskul[]" value="teater">TEATER KUSUMA
                        <input type="checkbox" name="ekskul[]" value="laskar">LA
                        <input type="checkbox" name="ekskul[]" value="gerakan disiplin sekolah">GDS
                  </p>
                  <p>
                        <button type="submit" name="datasiswa"> Submit </button>
                  </p>
            </fieldset>
      </form>
</body>

</html>