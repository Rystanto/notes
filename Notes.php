<?php
require_once('Database.php');
$data=tampildata('note');
$nomor=0;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php
    session_start();
    if($_SESSION['status'] <> "login"){
      header("location:login.php?msg=belum_login");
    }
   ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Notes.php">Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="User.php">User</a>
      </li>
     
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">API</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="nav-link btn btn-outline-info"href="login.php">Logout</a>
    </form>
  </div>
</nav>
    
  </head>
 
</div>
<div class="container">
<center><h3> Daftar Catatan </h3></center>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Created_at</th>
      <th scope="col">Note</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $item) : ?>
    <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo $item['ID']; ?></td>
      <td><?php echo $item['Created_at']; ?></td>
      <td><?php echo $item['Note']; ?></td>
      <td><?php echo "<a href='edit.php?id=$item[ID]'>Edit</a> <h>|</h>
      <a href='javascript:hapusData(".$item['ID'].")'>Hapus Data</a>"; ?></td>
    </tr>
    <?php endforeach ?>
</div>
  </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript">
        function hapusData(id){
          if (confirm("Apakah anda ingin menghapus")){
            window.location.href = 'Delete.php?id=' + id;
          }
        }
    </script>
  </body>
</html>