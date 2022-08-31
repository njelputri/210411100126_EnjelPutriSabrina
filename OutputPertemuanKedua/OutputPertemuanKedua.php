<?php

    var_dump($_POST);

    $besarandiskon = null;
    $hargaakhir = null;

    if (isset($_POST["Submit"])) {

        $besarandiskon = $_POST["harga"] * $_POST["diskon"] / 100;
        $hargaakhir = $_POST["harga"] - $besarandiskon;

    } else {
        $besarandiskon = null;
        $hargaakhir = null;
    }
?>

<html>
    <body style="background-color:darkviolet">
        <Marquee>
            <h1 style="color:cyan">SELAMAT DATANG DI WEBSITE ENJEL PUTRI SABRINA</h1>
        </Marquee> 

        <br>
        <h2>Menghitung Harga Diskon</h2>

        <br>

        <form action="" method="post">
            <table style="color:pink">
                <tr>
                    <td>Harga Awal<td>
                    <td style="color:black"> Rp <input name="harga"> <td>
                </tr>
                <tr>
                    <td>Diskon<td>
                    <td style="color:black"> <input name="diskon"> % <td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input style="color:red" type="Submit" name="Submit"> </td>
                </tr>
                <tr>
                    <td>Besaran Diskon<td>
                    <td style="color:black" name="besarandiskon"> Rp <?php echo $besarandiskon; ?> <td>
                </tr>
                <tr>
                    <td>Harga Akhir<td>
                    <td style="color:black" name="hargaakhir"> Rp <?php echo $hargaakhir; ?> <td>
                </tr>
            </table>
        </form>
    </body>
</html>
