
<?php
/*
echo"hello guys <br>";
$nama = "Yuda Iswanto";
$bukos= "irma";
$umury= 17;
$umurx= 19;
$selisihumur = $umurx-$umury;
echo"nama saya $nama nama ibu kos saya $bukos ibu kos saya umurnya masi muda tau, 
        <br> selisihnya cuman $selisihumur tahun.<br><br>";

 
$n0 = 10;
for ($x = 0; $x < $n0; $x++) {
    echo "no: $x <br>";
 }
 */
/*
$data = array("tesla","avanza","expander","BMW","xenia");
foreach($data as $value){
    echo $value."<br>";
}
*/
/*
$n0 = 0;
while($n0 <= 10) {
  echo "The number is: $n0 <br>";
  $n0++;
}
*/
/*
$n0 = 0;
do {
  echo "The number is: $n0 <br>";
  $n0++;
} while ($n0 <= 10);
*/
/*
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Spam nama</h1>
<form action ="<?php $_SERVER['PHP_SELF']?>" method="post">
    <lable>nama</label>
    <input type="text" name="nama"> 
    <lable>jumlah</label>
    <input type="text" name="no">
    <input type="submit" name="submit" value="submit">
    <br>
</form>
</center>
<?php
 if(!empty($_POST['submit'])) {

    switch($_POST['nama']) {
        case "Yuda":
            $pesan = $_POST['nama']." adalah orang Indonesia";
        break;
        case "Giorino":
            $pesan = $_POST['nama']." adalah orang Italy";
        break;
        default:
            $pesan = $_POST['nama']." darimana ya?";
    
    }
    
    for ($i=0;$i<$_POST['no'];$i++) {
        echo $pesan."<br>";
    }

} else {
    echo "input nama dan jumlah dahulu";
}







?>
</body>
</html>
*/
