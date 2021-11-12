<!DOCTYPE html>
<html>
<head>
    <title>Converter Mata Uang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'USD':
                echo "Nominal yang dimasukan : ". $bill." $operasi"."<br>" ;
                $hasil = "Rp. " . $bil1 * 13830;
            break;
            case 'EUR':
                echo "Nominal yang dimasukan : ". $bil1." $operasi"."<br>" ;
                $hasil = "Rp. " . $bil1 * 16386;
            break;
            case 'YEN':
                echo "Nominal yang dimasukan : ". $bil1." $operasi"."<br>" ;
            $hasil =  "Rp. " . $bil1 * 127;
            break;
            case 'GBP':
                echo "Nominal yang dimasukan : ". $bil1." $operasi"."<br>" ;
            $hasil =  "Rp. " . $bil1 * 19348;
            break;
            case 'CHF':
                echo "Nominal yang dimasukan : ". $bil1." $operasi"."<br>" ;
            $hasil =  "Rp. " . $bil1 * 15701;
            break;

        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">Konverter mata uang</h2>
        <form method="post" action="conv.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukan nominal diconvert " >
            <select class="opt" name="operasi">
                <option value="USD">Dollar</option>
                <option value="EUR">Euro</option>
                <option value="YEN">Yen</option>
                <option value="GBP">Poundsterling</option>
                <option value="CHF">Franc Swiss</option>
            </select>
            <input type="submit" name="hitung" value="Convert" class="tombol">
        <form>
            <br>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="text" placeholder="Rp." class="bil">
        <?php } ?>
    </div>
</body>
</html>