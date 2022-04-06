<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
</head>
<body>
    <nav>
        <div class="wrap">
            <div class="logo"><p>KenyangResto</p></div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><p>Transaksi</p></li>
                    <li><a href="tambahFoto.html">Tambahkan Foto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="kolom">
        <h2>Total Transaksi</h2><br>
        <table>
        <?php
        $status = $_POST["status"];
        $menu = $_POST["menu"];
        $jumlah = $_POST["jumlah"];
        $nilai;
        $total;
        $diskon;
        $bayar;
        $jenis;
            if($status == 1){
                $jenis = "Member";
            }else{
                $jenis = "Non-Member";
            }
            if($menu == 1){
                $nilai = 20000;
            }else if($menu == 2){
                $nilai = 30000;
            }else{
                $nilai = 50000;
            }
            if($status == 1){
                if($jumlah > 3){
                    $total = $nilai * $jumlah;
                    $diskon = (($nilai * 0.1) * $jumlah);
                    $bayar = $total - $diskon;
                }else if($jumlah == 2 || $jumlah == 3){
                    $total = $nilai * $jumlah;
                    $diskon = (($nilai * 0.07) * $jumlah);
                    $bayar = $total - $diskon;
                }else{
                    $total = $nilai * $jumlah;
                    $diskon = (($nilai * 0.01) * $jumlah);
                    $bayar = $total - $diskon;
                }
            }else{
                if($jumlah > 10){
                    $total = $nilai * $jumlah;
                    $diskon = ($total * 0.07);
                    $bayar = $total - $diskon;
                }else if($jumlah >= 2 && $jumlah <= 10){
                    $total = $nilai * $jumlah;
                    $diskon = ($total * 0.05 );
                    $bayar = $total - $diskon;
                }else{
                    $total = $nilai * $jumlah;
                    $diskon = 0;
                    $bayar = $total - $diskon;
                }
            }
            echo "<table>";
            echo "<tr><td>Nama pembeli</td>";
            echo "<td>" . " : " . $_POST["username"] . "<td>";
            echo "</tr>";
            echo "<tr><td>Status Pembeli</td>";
            echo "<td>" . " : $jenis " . "<td>";
            echo "</tr>";
            echo "<tr><td>Total harga</td>";
            echo "<td>" . " : Rp.$total " . "<td>";
            echo "</tr>";
            echo "<tr><td>Total diskon</td>";
            echo "<td>" . " : Rp.$diskon " . "<td>";
            echo "</tr>";
            echo "</table>";
            echo "<br> Yang harus dibayarkan Rp.$bayar";
        ?>
    </div>
    <div class="footer">
        <ul>
            <li><p>KenyangResto - @Fitrah Rahmadhani Ahmad</p></li>
            <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><a href="https://www.gojek.com/gofood/" target="_blank">GoFood</a></li>
            <li><a href="https://shopee.co.id/m/shopeefood?smtt=9&stm_medium=organic&stm_source=google-rw/" target="_blank">Shopee Food</a></li>
        </ul>        
    </div>
</body>
</html>