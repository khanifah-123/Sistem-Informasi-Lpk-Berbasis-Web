<nav class="navbar navbar-light bg-warning text-dark">

  <form class="d-flex">
    <button class="btn btn-outline-primary ml-2" type="submit">Login</button>
    <a class="btn btn-outline-primary ml-2" type="button" href="<?php echo base_url('landing_page/transferr') ?>">Daftar</a>

  </form>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-link ml-3" aria-current="page" href="#">BERANDA<span class="sr-only">(current)</span></a>
      <a class="nav-link ml-3" href="#">TENTANG LPK</a>
      <a class="nav-link ml-3" href="#">INFORMASI</a>
      <a class="nav-link ml-3" href="#">FASILITAS</a>
      <a class="nav-link ml-3" href="#">GALLERY</a>
      <a class="nav-link ml-3" href="#">KONTAK</a>

    </div>
  </div>

</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/bg1.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/bg2.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/bg3.jpg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<div class="card text-center m-5">
  <div class="card-header">
    <strong> Tentang LPK</strong>
  </div>
  <div class="card-body">
    <p class="card-text">
      <?php foreach ($tentang_lpk as $ttg) : ?>
        <?php echo word_limiter($ttg->sejarah, 80) ?>
      <?php endforeach; ?>
    </p>

    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
      Selengkapnya
    </button>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tentang LPK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body class-justify">
        <strong>Sejarah LPK Bahasa Uri Sarang</strong>
        <?php foreach ($tentang_lpk as $ttg) : ?>
          <?php echo $ttg->sejarah ?>
        <?php endforeach; ?><br><br>

        <strong>Visi LPK Bahasa Uri Sarang</strong>
        <?php foreach ($tentang_lpk as $ttg) : ?>
          <?php echo $ttg->visi ?>
        <?php endforeach; ?><br><br>

        <strong>Misi LPK Bahasa Uri Sarang</strong>
        <?php foreach ($tentang_lpk as $ttg) : ?>
          <?php echo $ttg->misi ?>
        <?php endforeach; ?><br><br>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="row m-4">

  <?php foreach ($informasi as $info) : ?>
    <div class="card" style="width: 18rem;">
      <span class="display-2 text-center text-info"><i class="<?php echo $info->icon ?>"></i>
      </span>
      <div class="card-body">
        <h5 class="card-title text-center text-info"><?php echo $info->judul_informasi ?></h5>
        <p class="card-text"><?php echo $info->isi_informasi ?></p>
        <a href="#" class="btn btn-primary">Selengkapnya...</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>