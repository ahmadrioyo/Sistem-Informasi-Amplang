<?php
require ('koneksi.php');
session_start();

if( isset($_POST['masuk'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	if(!empty(trim($email)) && !empty(trim($pass))){
		$query = "SELECT * FROM admin_detail WHERE email = '$email'";
		$result = mysqli_query($koneksi, $query);
		$num = mysqli_num_rows($result);

		while($row = mysqli_fetch_array($result)){
			$id = $row['id_admin'];
			$userVal = $row['email'];
			$passVal = $row['password'];
			$userName = $row['fullname'];
		}
		if ($num != 0){
			if($userVal==$email && $passVal==$pass){
                $_SESSION['id_admin'] = $id;
                $_SESSION['fullname'] = $userName;
				header('Location: dashboard.php');
			}else{
				$error = 'user atau password salah!!';
				header('Location: login.php');
			}
		}else{
			$error = 'user tidak ditemukan!!';
			header('Location: login.php');
		}
	}else{
		$error = 'data tidak boleh kosong';
		echo $error;
	}
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD. RAR Crackers - Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Mulish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    <div class="login-container">
        <div class="login-value">
            <form action="login.php" method="POST">
                <h1>Masuk</h1>
                <hr>
                <p>UD. RAR Crackers</p>
                <label for="email">Email</label>
                <input type="text" placeholder="ahmad@polije.com" name="email" id="email">
                <label for="pass">Kata Sandi</label>
                <input type="password" placeholder="Kata Sandi" name="pass" id="pass">    
                <button type="submit" class="btn btn-animasi btn-color" name="masuk"  >Masuk</button>
                <p>Apakah anda lupa Kata Sandi anda?&nbsp;<a href="">Lupa Kata Sandi !</a></p>
            </form>
        </div>
        <div class="right">
            <img src="icon/batik mega mendung3.png" alt="">
        </div>
    </div>
</body>
</html>