<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Falnamverse</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-GVxv4qsuLuE3bTfcMyvNN7Yi9bPfR88rj1RUW6c+GHtFTRo0f/AIMKKVl76K6NPKVuMgF6E2uJgUMMfBkPvPhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- start navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <!-- <nav class="navbar navbar-expand-lg navigation-wrap nabvar-custom"> -->
    <div class="container">
      <a href="#" class="navbar-logo">
        <img src="logo/falnamverse.png" alt="Logo" width="200" class="d-inline-block align-text-top">
      </a>
      <!-- <a class="navbar-brand" href="#">Falnamverse</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <a class="nav-link" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portofolio">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#staff">Staff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- banner -->
  <div class="container-fluid banner">
    <div class="container text-center">
      <h3 class="display-1">Halo!</h3>
      <h4 class="display-6">Selamat datang di Falnamverse!</h4>
      <br>
      <a href="#layanan" id="layananButton">
        <button type="button" class="btn btn-lg ">Cek Layanan</button>
      </a>
    </div>
  </div>
  <!-- layanan -->
  <div class="container-fluid layanan pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="layanan">Layanan</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, exercitationem?</p>
    <div class="row pt-4">
      <div class="col-md-4">
        <span class="lingkaran"><i class="fa-solid fa-code fa-5x"></i></span>
        <h3 class="mt-3">Programming</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sint est ipsam, at unde dolor aliquid dignissimos eaque ad distinctio? Vero consectetur earum reprehenderit veritatis commodi dicta sit! Neque, nobis?</p>
      </div>

      <div class="col-md-4">
        <span class="lingkaran"><i class="fa-solid fa-palette fa-5x"></i></span>
        <h3 class="mt-3">Design</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sint est ipsam, at unde dolor aliquid dignissimos eaque ad distinctio? Vero consectetur earum reprehenderit veritatis commodi dicta sit! Neque, nobis?</p>
      </div>

      <div class="col-md-4">
        <span class="lingkaran"><i class="fa-solid fa-network-wired fa-5x"></i></span>
        <h3 class="mt-3">Networking</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sint est ipsam, at unde dolor aliquid dignissimos eaque ad distinctio? Vero consectetur earum reprehenderit veritatis commodi dicta sit! Neque, nobis?</p>
      </div>

    </div>
    </div>
  </div>
  <!-- portofolio -->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="portofolio">Portofolio</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis natus quae eum sapiente corporis. Consequuntur deleniti laborum delectus? Dignissimos, maxime!</p>
    <div class="row pt-4 gx-4 gy-4">
      <div class="col-md-4">
        <div class="card crop-img">
          <img src="img/gdsc.jpeg" class="card-img-top" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Google Developer Student Clubs</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit perspiciatis quos delectus aspernatur optio.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card crop-img">
          <img src="img/telu.webp" class="card-img-top" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Telkom University</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit perspiciatis quos delectus aspernatur optio.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card crop-img">
          <img src="img/ittp.jpg" class="card-img-top" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Institut Teknologi Telkom Purwokerto</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit perspiciatis quos delectus aspernatur optio.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card crop-img">
          <img src="img/hmse.jpg" class="card-img-top" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">HMSE : Kabinet Scrum</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit perspiciatis quos delectus aspernatur optio.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card crop-img">
          <img src="img/telkom.jpeg" class="card-img-top" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Telkom Indonesia</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit perspiciatis quos delectus aspernatur optio.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card crop-img">
          <img src="img/ypt.png" class="card-img-top" width="200" height="200">
          <div class="card-body">
            <h5 class="card-title">Yayasan Pendidikan Telkom</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit perspiciatis quos delectus aspernatur optio.</p>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>
  <!-- Tentang -->
  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <h2 class="display-3 text-center" id="tentang">Tentang</h2>
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, incidunt.</p>
      <div class="clearfix pt-5"><img src="img/biru_falnamverse.png" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi est molestias earum aspernatur aperiam.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi est molestias earum aspernatur aperiam.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi est molestias earum aspernatur aperiam.</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, nam. Consequuntur libero nostrum, dolor sit minus similique recusandae quasi error!</p>
    </div>
    </div>
  </div>
  <!-- tim -->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-3" id="staff">Tim Kami</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis repellat est deserunt fugiat enim at, nam corporis voluptas blanditiis temporibus.</p>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4 text-center tim">
          <img src="img/foto1.JPG" class="rounded-circle mb-3">
          <h4>Ade Fatkhul Anam</h4>
          <p>Web Programmer</p>
          <p> 
            <a href="" class="social"> <i class="fa-brands fa-x-twitter"></i> </a>
            <a href="" class="social"> <i class="fa-brands fa-instagram"></i> </a>
            <a href="" class="social"> <i class="fa-brands fa-linkedin"></i> </a>   
          </p>
        </div>

        <div class="col-md-4 text-center tim">
          <img src="img/foto2.JPG" class="rounded-circle mb-3">
          <h4>Falnam</h4>
          <p>Designer</p>
          <p> 
            <a href="" class="social"> <i class="fa-brands fa-x-twitter"></i> </a>
            <a href="" class="social"> <i class="fa-brands fa-instagram"></i> </a>
            <a href="" class="social"> <i class="fa-brands fa-linkedin"></i> </a>   
          </p>
        </div>

        <div class="col-md-4 text-center tim">
          <img src="img/foto3.JPG" class="rounded-circle mb-3">
          <h4>Ade Falnam</h4>
          <p>Network Engineer</p>
          <p> 
            <a href="" class="social"> <i class="fa-brands fa-x-twitter"></i> </a>
            <a href="" class="social"> <i class="fa-brands fa-instagram"></i> </a>
            <a href="" class="social"> <i class="fa-brands fa-linkedin"></i> </a>   
          </p>
        </div>

      </div>
    </div>
  </div>
  <!-- Client -->
  <div class="container-fluid client pt-5 pb-5">
    <div class="container text-center">
      <div class="row pt-4 gx-4 gy-4">
        <div class="col">
          <img src="logo/gdsc.png" >
        </div>

        <div class="col">
          <img src="logo/telu.png" >
        </div>

        <div class="col">
          <img src="logo/ittp.png" >
        </div>

        <div class="col">
          <img src="logo/telkom.png" >
        </div>

        <div class="col">
          <img src="logo/kabinet.png" >
        </div>

      </div>
    </div>
  </div>

  <?php include 'process_form.php'; ?>
  
  <!-- Kontak -->
  <div class="container-fluid pt-5 pb-5 kontak">
  <div class="container">
    <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, praesentium.</p>
    <form action="result.php" method="post">
    <div class="row pb-3">
        <div class="col-md-6">
          <input class="form-control form-control-lg mb-3" type="text" name="name" placeholder="Nama" id="namaInput">
          <input class="form-control form-control-lg mb-3" type="email" name="email" placeholder="Email" id="emailInput" required>
          <input class="form-control form-control-lg mb-3" type="text" name="number" placeholder="Nomor Telepon" id="teleponInput">
        </div>
        <div class="col-md-6">
          <textarea class="form-control form-control-lg" name="pesan" rows="5" id="pesanInput"></textarea>
        </div>
      </div>
      <div class="col-md-3 mx-auto text-center">
        <button type="submit" name="submit" class="btn btn-lg" id="kirimPesanButton">Kirim Pesan</button>
      </div>
      </form>
    </div>
  </div>
</div>

  <div class="container text-center pt-5 pb-5">Made For DPW 1 by Ade Fatkhul Anam &copy; 2024</div>

  <script src="https://kit.fontawesome.com/65af5d7cd1.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>