<?php
//koneksi Database
$server="localhost";
$user="root";
$pass="";
$database="skanshop";

$koneksi= mysqli_connect($server, $user, $pass, $database)or die (mysqli_error($koneksi));

//jika tombol simpan di klik
//print_r($_POST);exit
if(isset($_POST['bsimpan']))
    {
        //pengujian apakah data akan diedit atau disimpan baru
       if($_GET['hal'] == "edit")
       {
           //data akan diedit
           $edit = mysqli_query($koneksi, "UPDATE user set
                                         passwordbaru = '$_POST[tpasswordbaru]' ,
                                         confirmpassword = '$_POST[tcpassword]' ,
                                         WHERE id='".$_GET['id']."'
                                         ");

if($edit) //jika edit sukses
{
echo "<script>
alert('Edit data sukses!');
document.location='ganti_pass.php';
</script>";
}
else
{
echo "<script>
alert('Edit data GAGAL!!');
document.location='ganti_pass.php';
</script>";

}
       }
       else
       {
           //data akan disimpan baru
           $simpan= mysqli_query($koneksi, "INSERT INTO user (password baru,confirm password)
                                 VALUES ('$_POST[tpasswordbaru]', 
                                        '$_POST[tcpassword]') 
                                       
                                  ");
    if($simpan) //jika simpan sukses
    {
      echo "<script>
            alert('simpan data sukses!');
            document.location='ganti_pass.php';
      </script>";
    }
    else
    {
        echo "<script>
            alert('simpan data GAGAL!!');
            document.location='ganti_pass.php';
      </script>";

    }
       }

    

      }

    //Pengujian jika tombol Edit/hapus di klik
    if(isset($_GET['hal']))
  {
    //Pengujian jika edit Data
    if($_GET['hal']== "edit")
    {
    //Tampilkan data yang akan diedit
      $tampil = mysqli_query($koneksi, "SELECT * FROM ganti_pass WHERE id = '$_GET[id]' ");
      $data = mysqli_fetch_array($tampil);
      if($data)
      {
          //jika data ditemukan,maka data ditampung ke dalam variabel
          $vpasswordbaru = $data['passwordbaru'];
          $vcpassword = $data['cpassword'];
      }
      }
    }
   

      }
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
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
  <p><H2 class="text-center">Pilih Kata Sandi Baru</H2></p>
      <hr>
      <h6 class="text-center">Kata sandi yang kuat adalah gabungan huruf dan tanda baca.
          <br> Panjang kata sandi setidaknya 6 karakter.</h6>
    <!-- awal card form -->
  <div class="container">
        <div class="">
            <form id="input-ganti_pass" method="post" action="">
            
                <label>Password baru</label>
                <input type="password" name="tpassword" value="<?=@$vpassword?>" class="form-control" required>
                <label>Confirm Password</label>
                <input type="password" name="tpassword" value="<?=@$vpassword?>" class="form-control" required>


                 <!-- <button id="Login" a href="" class="btn btn-primary">Login</button> -->
                 
        
                 <div class="text-end mt-5">
  <a href="" id="Login" type="login" class="btn btn-primary" name="bsimpan">simpan</a>
  <a id="id" type="login" class="btn btn-primary" name="bsimpan">Batal</a>
  </div>

</form>
   
  </body>
  
</html>