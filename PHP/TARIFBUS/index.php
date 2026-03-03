<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif bus</title>
</head>
<body>
    <center>
        <h1>Program tarif bus</h1>

        <p>
            <form action="" method="POST">
                Nama bus <input type="" name="nama"><br>
                jurusan <select name="jurusan" id="">
                    <option value="Jakarta 750000">JAKARTA</option>
                    <option value="Medan 250000">MEDAN</option>
                </select><br>
                <input type="submit" value="proses" name="proses">
            </form>
            <?php
            if(@$_POST['proses']) {
            $nama=@$_POST=['nama'];
              $jurusan=@$_POST['jurusan'];
                  
            //   buat logic anda
            if ($jurusan == 'JAKARTA') {
                $tarif = 750000;
            } else if ($jurusan == 'MEDAN') {
                $tarif = 250000;
            }

            echo "Nama Bus = " . $namabus;
            echo "<br>";
             echo "jurusan = " . $jurusan;
               echo "<br>";
               echo "tarif = " . $tarif;
                echo "<br>";
               }
            ?>
        </p>
    </center>
</body>
</html>