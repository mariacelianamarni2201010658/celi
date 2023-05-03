<h3>Daftar User</h3>
<table>
    <tr>
        <td>#</td>
        <td>Name Lengkap</td>
        <td>Email</td>
        <td><a href= "user-new.php?aksi=new">tambah</td>
    </tr>
    <?php
    $sql = " SELECT nama, email, iduser FROM tbuser ORDER BY nama;";

$hasil = mysqli_query($cnn, $sql);
$cx = 1;
while($h = mysqli_fetch_assoc($hasil)){
?>

    <tr>
        <td><?=$cx?></td>
        <td><?=$h["Name"]?></td>
        <td><?=$h["Email"]?></td>
        <td>Ubah hapus</td>
    </tr>
<?php
    $cx++;
}
?>
</table>
    