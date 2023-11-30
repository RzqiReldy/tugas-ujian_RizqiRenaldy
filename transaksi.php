  <?php
  require"dummy.php";
  $id = $_GET['id'];
  ?>
<html>
 <head> 
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="transaksi.css">
      <body>
            <nav class="navbar navbar-expand-lg bg-success m-3">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="home.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="transaksi.php">Transaksi</a>
                      </li>
                    </ul>
                    <div class="lol">
                    <a href="index.php">Log Out</a>
                    </div>
                  </div>
                </div>
                </nav>

          <div class="container m-5">
              <form class="bg-success-subtle">
              <div class="row mb-3 g-3 text-dark">
                        <label for="input1" class="col-sm-2 col-form-label ms-4">No. Transaksi</label>
                  <div class="col-sm-5">
                        <input type="text" class="form-control" id="input1" name="input1" placeholder="Masukkan Nomer Transaksi" required>
                  </div>
                  </div>
                  <div class="row mb-3 text-dark">
                      <label for="input2" class="col-sm-2 col-form-label ms-4">Tanggal Transaksi</label>
                  <div class="col-sm-5">
                  <input type="date" class="form-control" id="input2" name="input2" required>
                  </div>
                  </div>
              <div class="row mb-3 text-dark">
                  <label for="input3" class="col-sm-2 col-form-label ms-4">Nama Costumer</label>
                  <div class="col-sm-5">
            <input type="text" class="form-control" id="input3" name="input3" placeholder="Masukkan Nama Anda" required>
          </div>
          </div>
            <div class="row mb-3 text-dark">
              <label for="input4" class="col-sm-2 col-form-label ms-4">Pilihan ikan</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="Masukkan ikan Pilihan Anda" value="<?=$datajamu[$id][0]?>" readonly>
              </div>
            </div>
            <div class="row mb-3 text-dark">
              <label for="input5" class="col-sm-2 col-form-label ms-4">Harga Ikan</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="hargaobat" placeholder="Harga Ikan" value="<?=$datajamu[$id][2]?>" readonly>
              </div>
            </div>
            <div class="row mb-3 text-dark">
              <label for="input6" class="col-sm-2 col-form-label ms-4">Jumlah</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Pembelian Ikan" required>
              </div>
            </div>
            
            <div class="col-md-5 ms-md-auto">
              <button type="button" class="btn btn-outline-success btn-light mb-3" onclick="hitungtotal()"> Hitung Total Harga</button>
            </div>

          </form>
          
        


          <form class="m-5">
            <div class="row mb-3 text-dark">
              <label for="input6" class="col-sm-2 col-form-label">Total Harga</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="totalhargaobat">
              </div>
            </div>
            <div class="row mb-3 text-dark">
                <label for="input6" class="col-sm-2 col-form-label">Pembayaran</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="pembayaran" >
              </div>
            </div>
            <div class="row mb-3 text-dark">
              <label for="input6" class="col-sm-2 col-form-label">Kembalian</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="kembalian">
            </div>
            <div class="col-md-5 ms-md-auto">
            <button type="button" class="btn btn-outline-success btn-light mb-3" onclick="hitungKembalian()"> Hitung Kembalian</button>
            </div>
            </form>
            <!-- Button trigger modal -->
            <div class="col-md-5 ms-md-auto">
            <button type="button" class="btn btn-outline-success btn-light" onclick="simpan()" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Pembayaran Berhasil
            </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Notifikasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Transaksi Berhasil</p>
                    <p>Silahkan Kembali Ke Home</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="simpan" class="btn btn-primary"><a href="home.php" style="text-decoration:none; color:aliceblue" >Simpan</a></button>
                  </div>
                </div>
              </div>
            </div>
          
          <footer>copyright Mr.BomBom</footer>

          <script> 
            function hitungtotal(){
              let harga = document.querySelector('#hargaobat').value;
              let jumlah = document.querySelector('#jumlah').value;

              let totalharga = parseInt(harga * jumlah);
              document.querySelector('#totalhargaobat').value=totalharga;
            }
            
            function hitungKembalian(){
              let harga = document.querySelector('#totalhargaobat').value;
              let pembayaran = document.querySelector('#pembayaran').value;
              let kembalian = document.querySelector('#kembalian');

              let totalharga = parseInt(pembayaran - harga);
              if(totalharga < 0){
                alert('uang anda tidak cukup');
                kembalian.value= 0;
              }else{
                kembalian.value=totalharga;
              }
              
            }

            function simpan(){
              alert("data Berhasil di simpan")
              window.location = 'home.php'
            }



        </script>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
  </body>
    </head>
    </html>