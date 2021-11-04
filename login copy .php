<?php
 //koneksi Database
 $server= "localhost";
 $user= "root";
 $pass= "";
 $database= "skanshop";

 $koneksi= mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

 
 //jika tombol simpan di klik
//print_r($_POST);exit
if(isset($_POST['bsimpan']))
{
    //pengujian apakah data akan diedit atau disimpan baru
    $edit = mysqli_query($koneksi, "select * from user where
    `email`= '".$_POST['temail']."' and
    `password`='".$_POST['tpassword']."'
    ");
    
    if($edit) //jika edit sukses
        {
        echo "<script>
                alert('login data sukses!');
                document.location='home.php';
        </script>";
        } else {
        echo "<script>
            alert('Login gagal');
            //document.location='login.php';
    </script>";
        }
}

?>

 <!doctype html>
<html>
  <head>
  <style>
      body { height: 150vh; background: linear-gradient(180deg, #6AC9C9 0%, #43E7FE 100%);}
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>skanshop</title>
    <link rel="stylesheet" type="text/css" href="registrasi.css">
  </head>
  <body>
    <!-- awal card form -->
    
  <div class="text-center"><img src="user 1.png" alt=""></div>
  <div class="container">
  <h2 class="text-center">Login</h2>
        <div class="">
            <form id="input-registrasi" method="post" action="">
                <label>Email</label>
                <input type="text" name="temail" value="<?=@$vemail?>" class="form-control" placeholder="" required>
                <label>Password</label>
                <input type="password" name="tpassword" value="<?=@$vpassword?>" class="form-control" placeholder="" required>

                 <!-- <button id="Login" a href="" class="btn btn-primary">Login</button> -->
                 <div class="text-center">
                <button id="login" type="submit" class="btn btn-primary" name="bsimpan" >LOGIN</button>
                 </div>

</form>
    </div>
    </div>
  </body>
  </div>
   <div class="text-center mt-5">Anda jika belum punya akun?</div>
   <div class="text-center">
   <a href="registrasi.html">Daftar disini</a>
   </div>
</html>