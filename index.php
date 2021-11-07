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

  <div id="form" class="pt-5">    
    <div class="container">
      <div class="row">
        <div class="col">
         <form class="row g-3 needs-validation" action="action.php" method="POST" novalidate>
          <div class="col-md-4">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Otto Muhammad" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Isi dong namanya.
            </div>
          </div>
          <div class="col-md-4">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Mataram Rumak" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Isi dong Alamatnya.
            </div>
          </div>
          <div class="col-md-4">
            <label for="no_hp" class="form-label">No Hp</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">+62</span>
              <input type="number" class="form-control" id="no_hp" aria-describedby="inputGroupPrepend" name="no_hp" placeholder="81234567" required>
              <div class="invalid-feedback">
                Masukan no anda.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="kampus" class="form-label">Universitas</label>
            <input type="text" class="form-control" id="kampus" name="kampus" placeholder="Universitas ..." required>
            <div class="invalid-feedback">
              Kampus nya dimana?
            </div>
          </div>
          <div class="col-md-3">
            <label for="pekerjaan" class="form-label">State</label>
            <select class="form-select" name="pekerjaan" id="pekerjaan" required>
              <option selected disabled  >Choose...</option>
              <option value="PNS">PNS</option>
              <option value="DOKTER">DOKTER</option>
              <option value="GURU">GURU</option>
              <option value="POLISI">POLISI</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-3">
            <label for="pos" class="form-label">Zip</label>
            <input type="text" class="form-control" id="pos" name="pos" required>
            <div class="invalid-feedback">
              Please provide a valid zip.
            </div>
          </div>          
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
          </div>
        </form>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  <script type="text/javascript">
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>