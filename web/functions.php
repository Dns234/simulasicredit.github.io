<?php  

// Koneksi ke database 
$conn = mysqli_connect("localhost", "root", "", "dblogin");

if (!$conn){
	echo"Tidak terkoneksi";
}

function registrasi($data){

	global $conn;

	$username = $data["username"];
	$password = $data["password"];
	$password2 =$data["password2"];

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '$username'");


	if ($username=="" && $password =="") {
		echo "<script>
			alert('Silahkan diisi terlebih dahulu')
		 </script>";
	}else{
	
		if (mysqli_fetch_assoc($result)) {
			echo "<script> 
					alert('username sudah ada')
				</script>";

				return false;
		}
		// konfirmasi password 
		if ($password !== $password2) {
			echo "<script> 
						alert ('konfirmasi password berbeda!')
				</script>";
			return false;
		}



		// tambahkan use baru ke database

		mysqli_query($conn, "INSERT INTO pengguna VALUES ('$username', '$password')");

		return mysqli_affected_rows($conn);
		}

	}
?>