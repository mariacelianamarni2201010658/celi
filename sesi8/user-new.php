<h3> Tambah data user </h3>
<form method= "POST" action="tbuser.php">
    <input type="hidden" name="opsi" value="store">

     <div>
        Nama Lengkap
        <input type="name" name="txNAME">

     </div>
     <div>
        email
        <input type="email" name="txEMAIL">
     </div>
     <div>
        user name 
        <input type="text" name="txUSERNAME">
     </div>
     <div>
        pasSWord
        <input type="password" name="txPASS1">
     </div>
     <div>
        vertifikasi password
        <input type="password" name="txPASS2">
     </div>
      <button type="submit"> buat data user</button>
</form>

