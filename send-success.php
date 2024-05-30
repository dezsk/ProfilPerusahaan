<?php
    echo "<h2>Pesan</h2>";
    $fops = fopen("kontak.txt", "r");

    echo "<table border='0'>";
    while ($isi = fgets($fops)) {
    	$spare = explode(" | ", $isi);

    	echo "<tr><td>Nama </td><td>: $spare[0]</td></tr>";
    	echo "<tr><td>Email </td><td>: $spare[1]</td></tr>";
        echo "<tr><td>Telp </td><td>: $spare[2]</td></tr>";
        echo "<tr><td>Alamat </td><td>: $spare[3]</td></tr>";
        echo "<tr><td>Pesan </td><td>: $spare[4]</td></tr>";
        echo "<tr><td><br></td><td><br></td></tr>";
    }
    echo "</table";
?>