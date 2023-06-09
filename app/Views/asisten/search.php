
    <?php
    if (!empty($hasil)) {
        echo "<div class='m-3'><h1>Hasil Pencarian</h1>";
        echo "Nama: " . $hasil['NAMA'];
        echo "<br>Praktikum: " . $hasil['PRAKTIKUM'];
        echo "<br>IPK: " . $hasil['IPK'];
        echo " </div>
        ";
    }
    ?>
