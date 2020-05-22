<?php
class login{

	function show(){
		echo "
		<div class='row'>
			<div class='col-md-12 col-12'>
				<form method='post' action='?mod=utility.login.cek' >
					<div class='card'>
						<div class='card-header'>
							<h4>Login</h4>
						</div>
						<div class='card-body'>
							<div class='row'>
								<div class='col-md-3 col-4'>
									<strong>Username</strong>
								</div>
								<div class='col-md-9 col-8'>
									<input name='txt_username' class='form-control'>
								</div>
							</div>

							<div class='row mt-3'>
								<div class='col-md-3 col-4'>
									<strong>Password</strong>
								</div>
								<div class='col-md-9 col-8'>
									<input type='password' name='txt_password' class='form-control'>
								</div>
							</div>

							<div class='row mt-3'>
								<div class='col-md-12 col-12'>
									<input type='submit' value='login' class='btn btn-primary btn-block'>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		";
	}
	
	function cek(){
		if($_POST[txt_username]==a && $_POST[txt_password]==a){
			$_SESSION[grup]  	= 1;
			$_SESSION[username] = a;
			echo "
			<script>
				function alihkan(){
					window.location = '?mod=quran.murotal.show';
				}
				setTimeout('alihkan()',1000);
			</script>
			";
			echo warning("Anda berhasil login, Halaman akan segera dialihkan,..");
		}
		else{
			echo "
			<script>
				alert('Gagal login');
			</script>
			";
			$this->show();
		}
	}
	
	function logout(){
		$_SESSION[grup] = 0;
		$_SESSION[username] = '';
			echo "
			<script>
				function alihkan(){
					window.location = '?mod=quran.murotal.show';
				}
				setTimeout('alihkan()',1000);
			</script>
			";
		echo warning("Anda telah logout, Halaman akan segera dialihkan,..");
		
	}
}

?>