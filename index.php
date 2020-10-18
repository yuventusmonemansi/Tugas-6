<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Kefamenanu </title>
    </head>

    <body>
        <header>
            <h3>Pendaftaran Siwa Baru </h3>
            <h1>SMK Kefamenau</h1>
        </header>

        <h4>menu</h4>
        <nav>
            <ul>
                <li><a href = "from-daftar.php">Daftar Baru </a></li>
                <li><a href = "list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav>
        <?php if(isset($_GET['status'])): ?>
            <P>
                <?php   if($_GET['status'] == 'sukses'){
                        echo "pendaftaran siswa baruberhasil";
                        } else {
                            echo "pendafataran gagal";
                        }
                ?>
            </p>
        <?php endif; ?>
        </body>
    </html>