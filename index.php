<?php

// $nama = "Putri";

/*
echo $nama;
echo "br/>";
echo $nama;
echo "br/>";
echo $nama;
echo "br/>";
echo $nama;
echo "br/>";
echo $nama;
*/

// Perulangan
/*
$no = 100;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama. "br/>";
}
*/


/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;

do {
     $n = $i + 1;
    echo $n." ".$nama."br/>";
    $i++;
} while ($1 <$no)
*/
/*
$data = array('Avanza', 'Lamborghini', 'tesla', 'Xenia', 'Xpander', 'Rubicon');

$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}

*/
// echo $data[5]

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN
/*
if ($nama == "Virginia") {
    echo $nama."adalah orang Manado"; 
}else if ($nama == "Justin") {
    echo $nama."berasal dari canada";
} else {
    echo $nama."darimana ya?";
}
  */  
  /*
switch($nama) {
    case "Virginia";
    echo $nama." adalah orang manado";
    break;
    case "Justin"
        echo $nama." adalah orang manado"
    break;
    default: 
        $pesan - $nama." darimana ya?";

}

echo $pesan;

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</Label>
        <input type="text" name="nama">
        <label>Jumlah</Label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_Post['submit'] )) {

            switch($_Post['nama']) {
                case "Putri";
                    echo $nama." adalah orang Tondano"
                break;
                case "Saron"
                    echo $nama." adalah orang Wulauan"
                break;
                default: 
                    $pesan - $nama." darimana ya?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++)
                echo $pesan."<br>; 
            }
        
        } else {
            echo "Anda belum input nama dan jumlah"
    
    
    ?>
</body>
</html>