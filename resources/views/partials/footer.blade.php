
<style>
  .bg{
    
    background-color: rgba(225, 225, 225, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 12px; /* Padding di sekitar ikon */
        border-radius: 50%; /* Agar background ikon menjadi lingkaran */
        width: 40px; /* Lebar ikon */
        height: 40px; /* Tinggi ikon */
  }

  .isi {
        display: flex; /* Membuat konten dalam div menjadi flexbox */
        flex-direction: column; /* Mengatur tata letak kolom */
        justify-content: center; /* Pusatkan konten secara vertical */
        margin-left: 10px;
    }

    .title {
        font-weight: bold; /* Tebal */
        text-align: left; /* Pusatkan judul */
    }

    .description {
        font-weight: bold/* Warna font deskripsi */
    }

</style>

<div class="container-fluid bg-primary mt-5">
    <footer class="container">
      <div class="row py-3" style="display: flex; justify-content: center; align-items: center;">
        {{-- <div class="col-md-6 col-lg-1">
          <div class="logo">
            <a href="" class="navbar-brand fw-bold fs-6 text-dark"><img src="{{ asset('img/LOGO_SMK.png') }}" alt="logo" width="50px"></a>
        </div>
        </div> --}}

        <div class="col-md-6 col-lg-6">
          <a href="#" class="text-decoration-none text-dark d-flex text-center">
              <div class="bg rounded-circle">
                  <i class="bi bi-house-fill"></i>
              </div>
              <div class="isi text-left">
                <div class="title">Alamat</div>
             <p class="text-left">Jalan Veteran, Bugul Lor, Panggungrejo, Kota Pasuruan, Jawa Timur </p>
              </div>
          </a>
      </div>
        <div class="col-md-6 col-lg-3">
          <a href="#" class="text-decoration-none text-dark d-flex text-center">
              <div class="bg rounded-circle">
                 <i class="bi bi-envelope-fill"></i>
              </div>
              <div class="isi">
                <div class="title">Email</div>
              <p class="text-left">admin@gmail.com</p>
              </div>
          </a>
      </div>
        <div class="col-md-6 col-lg-3">
          <a href="#" class="text-decoration-none text-dark d-flex text-center">
              <div class="bg rounded-circle">
                  <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="isi">
                <div class="title">Telp</div>
               <p class="text-left">(0343) 421380 </p>
              </div>
          </a>
      </div>

      
      

        
        
      
      </div>
      <hr>
      <div class="row">
        <div class="col-2">
          <h5 class="mt-4">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-2">
          <h5 class="mt-4">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-2">
          <h5 class="mt-4">Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-4 offset-1">
          <h1>Google Maps</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.352337247998!2d112.91170597481685!3d-7.645207992370832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7c60c36bb4325%3A0x98bc4d9aa7c440c!2sSMK%20Negeri%201%20Pasuruan!5e0!3m2!1sid!2sid!4v1717769149886!5m2!1sid!2sid" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  
        <div class="mx-auto border-top mt-4">
        <p class="text-center">&copy; SMK NEGERI 1 PASURUAN | HUMAS 2024</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>