<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="off.css" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="fa/css/all.min.css">
    <title>Testing Web</title>
  </head>
  <body>

    <!---->
    <div class="logo" >
      <div class="p-3 mb-4 text-white">
      <img id="logo" class="mx-auto d-block rounded-circle mt-3" src="fotoku.png" width="250px">
      <h2 class="text-center mt-3 font-weight-light">Bagas Test Website</h2>
      </div>
    </div>    
    
    <div class="container" style="margin-top: -90px;">
      <div class="row justify-content-center">
        
        <div class="col-md-3">
          <div class="card shadow text-danger" style="height: 250px;">
            <i class="fas fa-warehouse fa-5x mx-auto mt-3" ></i>
              <div class="card-body text-center">
               <h5>List Barang</h5>
               <p>isisiisis</p>
               <button id="tombol" class="btn btn-outline-danger btn-lg btn-block" href="login.php">Data Barang</button>
              </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow text-success" style="height: 250px;">
            <i class="fas fa-money-bill-wave fa-5x mx-auto mt-3"></i>
              <div class="card-body text-center">
               <h5>Pembelian</h5>
               <p>isisiisis</p>
               <button id="tombol" class="btn btn-outline-success btn-lg btn-block">Pembelian</button>
              </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card shadow text-info" style="height: 250px;">
            <i class="fas fa-shopping-cart fa-5x mx-auto mt-3"></i>
              <div class="card-body text-center">
               <h5>penjualan</h5>
               <p>isisiisis</p>
               <a href="login.php"><button id="tombol" class="btn btn-outline-info btn-lg btn-block">penjualan</button></a>
              </div>
          </div>
        </div>
      </div>
    </div>
    

    <div id="login" class="modal fade" role="dialog">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Pendaftaran Sekolah</h4>
          </div>
          <div class="modal-body">
            <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
      </form>
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-success" data-dismiss="modal">Login</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>