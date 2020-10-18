<?php include ("config"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>PendaftaranSiswa Baru | SMK kefamenanu</title>
    </head>

    <body>
        <header>
            <h3>siswa yang Sudah Mendaftar</h3>
        <header>

        <nav>
            <a href = "from-daftar.php">[+] Tambah Baru</a>
        </nav>
        
        <br>

        <table bolder="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sgl ="SELECT * FROM calon_siswa";
            $query = Mysql_query($db, $sql);

            while ($siswa = mysql_fetch_array($query)){
                echo"<tr>";

                echo "<td>".$siswa['id'],"</td>";
                echo "<td>".$siswa['nama'],"</td>";
                echo "<td>".$siswa['alamat'],"</td>";
                echo "<td>".$siswa['jenis_kelamin'],"</td>";
                echo "<td>".$siswa['agama'],"</td>";
                echo "<td>".$siswa['sekolah_asal'],"</td>";

                echo "</td>";
                echo "<a href ='from-edit.php?id=.$siswa['id']."'>edit</a>| ";
                echo "<a href ='hapus.php?id=".$siswa['id']."'hapus</a>";
                echo "</td>";
            
                echo "</tr>";
            }
            ?>
        
        </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p> 

        </body>
    </html>
