<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <form class="" action="proses.php" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" autocomplete="off"> <br>

        <label for="">Umur</label>
        <input type="text" name="umur" autocomplete="off"> <br>

        <label for="">Email</label>
        <input type="text" name="email" autocomplete="off"> <br>

        <label for="">Jenis Kelamin</label>
        <input type="radio" name="jeniskelamin" value="Pria">Pria
        <input type="radio" name="jeniskelamin" value="Wanita">Wanita
        <input type="radio" name="jeniskelamin" value="Non Binary">Non Binary <br>
        
        <label for="">Agama</label>
        <select class="" name="agama">
            <option value="Atheis">Atheis</option>
            <option value="Budha">Budha</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Islam">Islam</option>
        </select> <br>
        <label for="">Komentar</label> <br>
        <textarea name="komentar" rows="8" cols="80"></textarea> <br>
        <button type="submit" name="submit" value= <?php echo date("h:i:sa"); ?> >Submit</button>
    </form>
</body>
</html>