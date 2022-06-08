<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <style>input {
  border: none !important;
  outline: none !important;
  box-shadow: 2px 2px 10px lightgrey;
  padding: 20px !important;
  background-color: #DFDFDF !important; 
}</style>
  </head>
  <body>


   

    <div class="container">
      <div class="row">


        <form class="mt-5">
          <div class="mb-3">
            <label for="nama" class="form-label">Masukkan Nama Makanan</label>
            <input type="text" class="form-control" placeholder="Nama Makanan" id="nama">
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Masukkan Foto Makanan</label>
            <div class="d-flex"><input type="file" class="form-control" id="foto"> <i class="far fa-image fa-2x" style="position: relative;right: 60px;top: 15px;"></i></div>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Masukkan Harga Makanan</label>
            <input type="number" class="form-control" placeholder="Harga Makanan" id="harga">
          </div>
          <br><br>
        </form>
          <center>
          <a href="index.php" class="btn btn-secondary me-5">Cancel</a>
          <button href='' onclick="success();" class="btn btn-success">Submit</button>
          </center>

        

      </div>
    </div>

    
    <script>
      function success() {
        Swal.fire(
          'Tambah Sukses',
          '',
          'success'
        )
      }
    </script>

    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>