<!DOCTYPE html>
<head>
    <title>Convert</title>
</head>
<body>

<h3>Konversi Angka Kehuruf</h3>

<form action="" name="frm" method="get">
	
		
			Masukan Angka :
			<input type="text" name="angka">
		
      
			<input type="submit" name="submit" value="CONVERT">
		
</form>

<?php  
 if(isset($_GET['submit'])){
    $angkaa = $_GET['angka'];
    echo "<br>";
    echo "Angka yang dimasukan : ". $angkaa."<br>" ;
    echo terbilang($angkaa);}
?>

<?php 
function terbilang($bilangan) {

  $angka = array('0','0','0','0','0','0','0','0','0','0',
                 '0','0','0','0','0','0');
  $kata = array('','satu','dua','tiga','empat','lima',
                'enam','tujuh','delapan','sembilan');
  $tingkat = array('','ribu','juta','milyar','triliun');

  $panjang_bilangan = strlen($bilangan);

  if ($panjang_bilangan > 15) {
    $kalimat = "Diluar Batas";
    return $kalimat;
  }

  for ($i = 1; $i <= $panjang_bilangan; $i++) {
    $angka[$i] = substr($bilangan,-($i),1);
  }

  $i = 1;
  $j = 0;
  $kalimat = "";


  while ($i <= $panjang_bilangan) {

    $subkalimat = "";
    $kata1 = "";
    $kata2 = "";
    $kata3 = "";

    if ($angka[$i+2] != "0") {
      if ($angka[$i+2] == "1") {
        $kata1 = "seratus";
      } else {
        $kata1 = $kata[$angka[$i+2]] . " ratus";
      }
    }

    if ($angka[$i+1] != "0") {
      if ($angka[$i+1] == "1") {
        if ($angka[$i] == "0") {
          $kata2 = "sepuluh";
        } elseif ($angka[$i] == "1") {
          $kata2 = "sebelas";
        } else {
          $kata2 = $kata[$angka[$i]] . " belas";
        }
      } else {
        $kata2 = $kata[$angka[$i+1]] . " puluh";
      }
    }

    if ($angka[$i] != "0") {
      if ($angka[$i+1] != "1") {
        $kata3 = $kata[$angka[$i]];
      }
    }


    if (($angka[$i] != "0") OR ($angka[$i+1] != "0") OR
        ($angka[$i+2] != "0")) {
      $subkalimat = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
    }


    $kalimat = $subkalimat . $kalimat;
    $i = $i + 3;
    $j = $j + 1;

  }

  if (($angka[5] == "0") AND ($angka[6] == "0")) {
    $kalimat = str_replace("satu ribu","seribu",$kalimat);
  }

  return trim($kalimat);
  
} 

?>



</body>
</html>