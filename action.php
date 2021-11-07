<?php 
if (isset($_POST["submit"])) {
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$nohp = $_POST["no_hp"];
	$kampus = $_POST["kampus"];
	$pekerjaan = $_POST["pekerjaan"];
}else{
	$nama="nama tidak dikenali";
	$alamat="nama tidak dikenali";
}
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand danger">Navbar</a>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		</div>
	</nav>

<div id="profile">

      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col col-8">

            <h4>Nama = <?=$nama?></h4>
            <h4>Alamat = <?=$alamat?></h4>
            <h4>NO HP = <?=$nohp?></h4>
            <h4>Kampus = <?=$kampus?></h4>
            <h4>Pekerjaan = <?=$pekerjaan?></h4>
            

          </div>

        </div>
      
      </div>

    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  

</body>
</html>