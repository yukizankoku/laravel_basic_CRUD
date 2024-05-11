@extends('layouts.main')

@section('container')
<h1 class="text-center">{{ $title }}</h1>

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
                        <h3>Find Your Properties</h3>
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
                        <h3>Design & Build Package</h3>
                        <a class="btn" href="https://wa.me/6289674002822/?text=Hai%20Domus%20Mea!%20saya%20mau%20tanya%20soal%20Service%20Financial%20Calculator." target="_blank" data-lightbox="service"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
            
<!-- FAQs Start -->
<div class="section-header text-center">
    <h4>Frequenly Asked Question</h4>
    <h2>You May Ask</h2>
</div>
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Lorem ipsum dolor sit amet?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus repudiandae sed ullam nemo, eum eos totam perspiciatis laudantium consequuntur odio nam ipsa fugit tenetur iusto quis rerum odit, est mollitia quibusdam aspernatur. At placeat vel voluptatum pariatur soluta exercitationem tempora ratione sequi porro? Quasi, non! Unde, repudiandae est ipsa quia dolores nemo distinctio quasi temporibus sed pariatur. Quasi, dolorum.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Lorem ipsum dolor sit amet?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio dolor assumenda quos perferendis maiores quibusdam fugiat saepe, itaque eius totam quod ipsa beatae aliquam similique quo. Corrupti accusamus molestiae laboriosam consequuntur officia autem saepe maxime odio quae ipsa. Magnam culpa laboriosam aspernatur in sapiente numquam dolore natus minima quod accusantium?
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Lorem ipsum dolor sit amet?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae expedita velit inventore recusandae, totam voluptatum quasi ab optio repudiandae in debitis reiciendis architecto fuga soluta, sapiente, alias dolorem dolor accusantium numquam eius? Libero eum, minima autem dolor ipsa alias illo reiciendis cum architecto soluta possimus hic saepe consequuntur. Dolorem, odit.
        </div>
      </div>
    </div>
  </div>
<!-- FAQs End -->

@endsection