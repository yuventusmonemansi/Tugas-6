<!DOCTYPE html>
<html>
<head>
    <title>FormulirPendaftaranSiswa Baru | SMK Kefamenanu</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran SiswaBaru</h3>
    </header>

    <form action="proses-pendfataran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat : </label>
            <textarea name ="alamat"></textarea>
        </p>
        <p>
            <label for="jenis kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan">perempuan</label>
        </p>
        <p>
            <label For="agama">Agama:</label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Ateis</option>
            <select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah"/>
        </p>
        <p>
            <input type ="submit" value ="Daftar" name = "Daftar"/>
        </p>
        </fieldset>
    </form>
    </body>
<html>