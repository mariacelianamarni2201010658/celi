<?php
    include("konfigurasi.php");
    $cnn = mysqli_connect( DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die ("gagal koneksi ke dbms");

    $jdpage = "list";
    $page = "user-list.php";
    
    if(isset($_POST["opsi"])){
        switch($_POST["opsi"]){
            case"store":
                $p1 = $_POST["txPASS1"];
                $p12 = $_POST["txPASS2"];

            if($p1== $p2){
                $nama =$_POST["txNAMA"];
                $email =$_POST["txEMAIL"];
                $username=$_POST["txUSERNAME"];
                $iduser = md5("txemail");
$SQL= "INSERT INTO tbuser(nama,email,username, passkey, iduser) Values('$nama','$email','$username', '$passkey','$p1', '$iduser');";
$hasil = mysqli-query ($scnn,$sql);
            }
            break;
        }


    }
    if(isset($_GET["aksi"])){
        switch($_GET["aksi"]){
            case "new":
                $page="user-new.php";
                $jdpage="Tambah";
                break;
            case "edit":
                break;
            case "del":
                break;
        }
    }
        


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$jdpage?> - Table User</title>
</head>
<body>

<?php
    include($page);
?>

    
</body>
</html>