<?php
    echo "<h2>Pesan</h2>";
    $fops = fopen("pesanan.txt", "r");

    echo "<table border='0'>";
    while ($isi = fgets($fops)) {
    	$spare = explode(" | ", $isi);

    	echo "<tr><td>Nama </td><td>: $spare[0]</td></tr>";
    	echo "<tr><td>No telp </td><td>: $spare[1]</td></tr>";
        echo "<tr><td>Alamat </td><td>: $spare[2]</td></tr>";
        echo "<tr><td>Jasa Layanan </td><td>: $spare[3]</td></tr>";
        echo "<tr><td>Keluhan </td><td>: $spare[4]</td></tr>";
        echo "<tr><td><br></td><td><br></td></tr>";
    }
    echo "</table";
?>