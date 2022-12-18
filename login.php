<?php
require ('koneksi.php');

session_start();

if( isset($_POST['submit'])){
	$email = $_POST['txt_email'];
	$pass = $_POST['txt_pass'];


	if(!empty(trim($email)) && !empty(trim($pass))){
		$query = "SELECT * FROM user_detail WHERE user_email = '$email'";
		$result = mysqli_query($koneksi, $query);
		$num = mysqli_num_rows($result);

		while($row = mysqli_fetch_array($result)){
			$id = $row['id'];
			$userVal = $row['user_email'];
			$passVal = $row['user_password'];
			$userName = $row['user_fullname'];
		}
		if ($num != 0){
			if($userVal==$email && $passVal==$pass){
				$_SESSION['id']=$id;
				$_SESSION['name']=$userName;
				header('Location: index.php');
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
                <label for="">Email</label>
                <input type="text" placeholder="contoh@gmail.com" name="email" value="<?php echo $email; ?>" required>
                <label for="">Kata Sandi</label>
                <input type="password" placeholder="Kata Sandi" name="password" value="<?php echo $_POST['password']; ?>" required>    
                <a href="" class="btn btn-animasi btn-color" name="submit" >Masuk</a>
                <p>Apakah anda lupa Kata Sandi anda?&nbsp;<a href="">Lupa Kata Sandi !</a></p>
            </form>
        </div>
        <div class="right">
            <img src="icon/batik mega mendung3.png" alt="">
        </div>
    </div>
</body>
</html>