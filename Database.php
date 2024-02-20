<?php 

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','pplg2_notes');
$koneksi=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die ("failed connect to MySQL; ". mysqli_error($koneksi));


function tampildata($tablename)
{

 global $koneksi;
    $hasil=mysqli_query($koneksi, "select * from $tablename");
    $rows=[];
    while($row = mysqli_fetch_assoc($hasil))
    {
        $rows[] = $row;
    }
    return $rows;
}
function tampiluser($tablename)
{

 global $koneksi;
    $hasil=mysqli_query($koneksi, "select * from $tablename");
    $rows=[];
    while($row = mysqli_fetch_assoc($hasil))
    {
        $rows[] = $row;
    }
    return $rows;
}

function Editdata($tablename,$id)
{
    global $koneksi;
    $hasil=mysqli_query($koneksi,"select * from $tablename where id='$id'");
    return $hasil;
}

function update($tablename, $data, $id)
{
global $koneksi;
$sql2 = "UPDATE '$tablename' SET note = '$data' WHERE id = '$id'";
$hasil=mysqli_query($koneksi,$sql2);
return $hasil;
}

function hapusData($tablename,$id)
{
global $koneksi;
$hasil=mysqli_query($koneksi,"delete from $tablename where id='$id'");
return $hasil;
}


function cek_login($username,$password){
    global $koneksi;
    $uname = $username;
    $upass = $password;

    $hasil = mysql_query($koneksi,"select * from user where
    username='$uname' and password='$upass'");
    $cek = mysqli_nun_rows($hasil);
    if($cek > 0 ){
        return true;
    }
    else {
        return false;
    }
}  

{
    function tampil_notes(){
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT note.ID, note.id_user, user.USERNAME, note.created_at from Note INNER JOIN user on note.id_user = user.id_user;");
        $rows=[];
        while ($row = mysqli_fetch_assec($hasil)) 
        {
            $rows[] = $row;
            # code...
        }
        return $rows;
    }
}
?>