<html>
    <title>BomBom Aquatic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <head>
        <body>
          <a href="transaksi.html"></a>
          <nav class="navbar navbar-expand-lg bg-info m-3" style="border-radius:5px;">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="home.php">Home</a>
                  </li>
                  
                </ul>
                <div class="log">
                  <a href="index.php" class="btn btn-outline-dark btn-outline-info-">Log Out</a>
                </div>
                <!-- <form class="d-flex" role="search">
                 
                  <button class="btn btn-outline-danger bg-priemphesis text-light" type="submit">Logout</button>
                </form> -->
              </div>
            </div>
          </nav>
          <div class="awal">
            <img src="image/baner.jpg" alt="">
          </div>
          <h3 class="text-center">BomBom.Aquatic</h3>

          
            <div class="container">
              <div class="row">
              <?php
             $datajamu = [
                ["Channa Barca", "Ikan Channa Barca adalah sejenis ikan gabus yang umumnya pada saat musim dingin, mereka akan bersembunyi. Keunikan ikan Channa Barca ini, selama periode musim dingin, ikan gabus ini akan bersembunyi di dalam liang dengan kedalaman hingga 1 meter dan biasanya setiap liang akan menampung spesimen soliter atau pasangan.",35000000 ,"image/barca.jpeg"],
                ["Channa Auranti ", " Ikan channa auranti atau the golden cobra snakehead adalah spesies Channidae atau gabus. Channa berasal dari bahasa Latin channe, Channa auranti adalah endemik lembah Sungai Brahmaputra di negara bagian Assam dan Arunachal Pradesh, India timur laut.",100000,"image/ranti.jpeg"],
                ["Channa Yellow Sentarum", "Ikan Channa Yellow Sentarum (ys) merupakan salah satu varian dari jenis channa maruliodes, memiliki warna kuning yang sangat cantik juga dihiasi dengan corak bunga berwarna silver pada tiap garis yang ada pada tubuhnya",150000 ,"image/ys.jpeg"],
                ["Channa Red Barito", "Disebut dengan nama Red Sentarum karena memiliki warna merah merona dan memiliki corak pada tubuhnya yang seperti garis bar pada anak panah.",200000,"image/redbar.jpeg"]
               ];

               foreach($datajamu as $tampil => $data){
              ?>

              <!-- Card -->

              <div class="card mb-3 bg-info" style="max-width: 49%; margin: 5px; align-item: centers;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?=$data[3]?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?=$data[0]?></h5>
                      <p class="card-text"><?=$data[1]?></p>
                      <p class="card-number"><b>Rp. <?=$data[02]?></b></p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                      <a href="transaksi.php?id=<?=$tampil?>" class="btn btn-outline-dark btn-secondary">Pilih Untuk Transaksi</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="col-lg-3 col-sm-12">
                <div class="card title">
                  <img src=<?=$data[3]?> alt="gambar">
                  <h4><b><?=$data[0]?></b></h4>
                  <div class="card-body">
                  <p class="card-text"><?=$data[1]?></p>
                  <h3><b>Rp<?=$data[2]?></b></h3>
                  <a href="transaksi.php?id=<?=$tampil?>" class="btn btn-outline-dark btn-secondary">Pilih obat</a>
                  </div>
                </div>
              </div> -->

              <?php } ?>
  
               
              <footer>
                <p>&copy; 2023 Mr.bombom Hak Cipta Dilindungi.</p>
              </footer>
    </head>
</html>