@extends('layouts.main')

@section('container')

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

{{-- Slide Show --}}
<div id="carouselExampleCaptions" class="carousel slide ps-0 pe-0">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1200x400/?building" class="d-block w-100" alt="homeslide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="fade-in-text" style="color: black">Domus Mea</h1>
          <h2 class="fade-in-text" style="color: black">We Build Your Dreams</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1200x400/?building" class="d-block w-100" alt="homeslide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="fade-in-text" style="color: black">We Are Profesional</h1>
          <h2 class="fade-in-text" style="color: black">We Build You Home</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1200x400/?building" class="d-block w-100" alt="homeslide">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="fade-in-text" style="color: black">We Are Trusted</h1>
          <h2 class="fade-in-text" style="color: black">For Your Deeam Home</h2>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<!-- Feature Start-->
  <div class="card-group card-group-animate">
    <div class="card">
      <div class="card-body" style="background-color: gold">
        <h5 class="card-title"><i class="bi bi-bricks"></i> Expert Worker</h5>
        <p class="card-text">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-building-fill-lock"></i> Quality Work</h5>
        <p class="card-text">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
      </div>
    </div>
    <div class="card">
      <div class="card-body" style="background-color: gold">
        <h5 class="card-title"><i class="bi bi-clock"></i> 24/7 Support</h5>
        <p class="card-text">Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
      </div>
    </div>
  </div>
<!-- Feature End-->


<!-- About Start -->
<div class="card bg-dark text-white">
    <img src="https://source.unsplash.com/1200x400/?buildings" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h3 class="card-title" style="color: black">Welcome to Domus Mea</h3>
      <h5 class="card-subtitle" style="color: black">** Years of Experience</h5>
      <p class="card-text" style="color: black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, corrupti.</p>
    </div>
  </div>
<!-- About End -->


<!-- Fact Start -->
    <div class="card-group card-group-animate">
        <div class="card">
          <div class="card-body" style="background-color: gold">
            <h5 class="card-title fs-1">100+</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Expert Workers</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card text-light" style="width: 18rem; background-color: black"">
          <div class="card-body">
            <h5 class="card-title fs-1">125+</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Happy Clients</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body" style="background-color: gold">
            <h5 class="card-title fs-1">100+</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Completed Projects</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card text-light" style="width: 18rem; background-color: black"">
            <div class="card-body">
                <h5 class="card-title fs-1">12+</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Running Projects</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
      </div>

<div class="text-center"><a class="btn" href="/about">Learn More</a></div>
<!-- Fact End -->


<!-- Service Start -->
<div class="service">
  <div class="container">
      <div class="section-header text-center">
          <h2>We Provide Services</h2>
      </div>
      <div class="row">
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item">
                  <div class="service-img">
                      <img src="https://source.unsplash.com/1200x400/?property" alt="Image">
                      <div class="service-overlay">
                          <p>
                              Package: Bronze, Silver, Gold, Platinum. Banner, Online listing, Domus Mea apps, commission start from 1,5% after tax deduction. MPV (Minimum Property Value) 2 Mio.
                          </p>
                      </div>
                  </div>
                  <div class="service-text">
                      <h3>Property Agency</h3>
                      <a class="btn" href="https://wa.me/6289674002822/?text=Hai%20Domus%20Mea!%20saya%20mau%20tanya%20soal%20Service%20Property%20Agency." target="_blank" data-lightbox="service"><i class="bi bi-whatsapp"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="service-item">
                  <div class="service-img">
                      <img src="https://source.unsplash.com/1200x400/?contractor" alt="Image">
                      <div class="service-overlay">
                          <p>
                              Design & build. Free design and survey (JABODETABEK). Contract signed after survey. Publication on our socmed. Design revision max. 3 times after booking payment.
                          </p>
                      </div>
                  </div>
                  <div class="service-text">
                      <h3>Contractor</h3>
                      <a class="btn" href="https://wa.me/6289674002822/?text=Hai%20Domus%20Mea!%20saya%20mau%20tanya%20soal%20Service%20Contractor." target="_blank" data-lightbox="service"><i class="bi bi-whatsapp"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item">
                  <div class="service-img">
                      <img src="https://source.unsplash.com/1200x400/?design" alt="Image">
                      <div class="service-overlay">
                          <p>
                              Design only. Working drawings, 3D modelings, 2D, cut drawings, interior and exterior drawings. Design revision max 3 times after booking payment. Publication on our socmed.
                          </p>
                      </div>
                  </div>
                  <div class="service-text">
                      <h3>Designer</h3>
                      <a class="btn" href="https://wa.me/6289674002822/?text=Hai%20Domus%20Mea!%20saya%20mau%20tanya%20soal%20Service%20Designer." target="_blank" data-lightbox="service"><i class="bi bi-whatsapp"></i></a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
              <div class="service-item">
                  <div class="service-img">
                      <img src="https://source.unsplash.com/1200x400/?finance" alt="Image">
                      <div class="service-overlay">
                          <p>
                              Financial status (consumer's side), what need to purchase, what need to do, OJK slik checking. Our products to save your money.
                          </p>
                      </div>
                  </div>
                  <div class="service-text">
                      <h3>Financial Calculator</h3>
                      <a class="btn" href="https://wa.me/6289674002822/?text=Hai%20Domus%20Mea!%20saya%20mau%20tanya%20soal%20Service%20Financial%20Calculator." target="_blank" data-lightbox="service"><i class="bi bi-whatsapp"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Service End -->

@endsection