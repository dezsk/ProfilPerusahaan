<?php
    $fops =fopen("kontak.txt", "a++");
    $namaUser = $_POST['nama'];
    $emailUser = $_POST['email'];
    $alamatUser = $_POST['address'];
    $telpUser = $_POST['telp'];
    $pesanUser = $_POST['pesan'];

    fputs($fops, "$namaUser | $emailUser | $alamatUser | $telpUser | $pesanUser | \n");
    fclose($fops);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan Terkirim</title>
</head>
<style type="text/css">
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    }
    .main {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url('image-resource/mainbg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        justify-content: center;
        color: white;
        font-size: 2rem;
    }
    .main span {
        color: #54B435;
    }  
    .main .message {
        padding-right: 2rem;
    }
    .main a {
        margin-top: 1rem;
        padding: 1rem 3rem;
        font-size: 2rem;
        display: inline-block;
        background-color: #54B435;
        border-radius: 1rem;
        color: #fff;
        box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
        }

</style>
<body>
    <section class="main">
        <div class="message">
            <h2>Pesan anda telah terkirim kepada <span>kami</span><br>TERIMA KASIH</h2>
        </div>
        <div class="readmessage">
            <a href="send-success.php">Lihat pesan</a>
        </div>
    </section>
</body>
</html>