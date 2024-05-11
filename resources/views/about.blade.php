@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>

<!-- about start -->
<div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://source.unsplash.com/400x500/?buildings" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title" style="color: gold">Welcome to Domus Mea</h5>
          <h3 class="card-title">** Years of Experience</h3>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum cupiditate eaque est nulla? Mollitia quod facilis modi, quidem esse dolores, provident voluptatibus perferendis, iure iste quae? Blanditiis quas neque sunt commodi ut id voluptates ipsam hic, libero a. Hic ratione, quod quis quisquam sunt laborum repellat, facilis velit, eaque sint nam. Fuga, obcaecati est ea inventore blanditiis corrupti maxime impedit tenetur exercitationem doloremque minus suscipit, animi optio facilis laudantium deleniti nobis modi alias nulla magnam? Blanditiis, fugit cumque vitae laborum eos quaerat ratione corporis voluptatum nam repellendus ut deleniti, numquam, nulla ipsa quasi totam laboriosam officia molestiae! Provident non ut quaerat quibusdam! Explicabo repellat libero amet repudiandae rem, animi saepe magni porro exercitationem tempora tenetur, odio dicta impedit minus commodi similique assumenda fuga consequuntur sed, voluptas ut eius a? Omnis perspiciatis quis maxime doloribus eius sint ea voluptates dolore expedita laudantium eveniet libero architecto, sequi, quae repellat asperiores vitae dolorum.</p>
        </div>
      </div>
    </div>
  </div>
<!-- about end -->

<!-- FAQs Start -->
<div class="section-header text-center">
    <h4>Frequently Asked Questions</h4>
    <h2>You May Ask</h2>
</div>
<div class="accordion accordion-flush" id="accordionFAQ">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" data-bs-parent="#accordionFAQ">
            Lorem ipsum dolor sit amet?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFAQ">
        <div class="accordion-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus repudiandae sed ullam nemo, eum eos totam perspiciatis laudantium consequuntur odio nam ipsa fugit tenetur iusto quis rerum odit, est mollitia quibusdam aspernatur. At placeat vel voluptatum pariatur soluta exercitationem tempora ratione sequi porro? Quasi, non! Unde, repudiandae est ipsa quia dolores nemo distinctio quasi temporibus sed pariatur. Quasi, dolorum.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" data-bs-parent="#accordionFAQ">
            Lorem ipsum dolor sit amet?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFAQ">
        <div class="accordion-body">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio dolor assumenda quos perferendis maiores quibusdam fugiat saepe, itaque eius totam quod ipsa beatae aliquam similique quo. Corrupti accusamus molestiae laboriosam consequuntur officia autem saepe maxime odio quae ipsa. Magnam culpa laboriosam aspernatur in sapiente numquam dolore natus minima quod accusantium?
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" data-bs-parent="#accordionFAQ">
            Lorem ipsum dolor sit amet?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFAQ">
        <div class="accordion-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae expedita velit inventore recusandae, totam voluptatum quasi ab optio repudiandae in debitis reiciendis architecto fuga soluta, sapiente, alias dolorem dolor accusantium numquam eius? Libero eum, minima autem dolor ipsa alias illo reiciendis cum architecto soluta possimus hic saepe consequuntur. Dolorem, odit.
        </div>
      </div>
    </div>
  </div>
<!-- FAQs End -->

<!-- Contact start -->
<div class="container">
    <h1 class="text-center" style="color: gold">Contact Us</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="accordion" id="accordionContact1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" data-bs-parent="#accordionContact1">
                      Admin Contractor
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionContact1">
                    <div class="accordion-body">
                      <p>Address :</p>
                      <p>Phone : +62 1234567890</p>
                      <p>Email : admin@domusmea.com</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" data-bs-parent="#accordionContact1">
                        Admin Financial Products
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionContact1">
                    <div class="accordion-body">
                      <p>Address :</p>
                      <p>Phone : +62 1234567890</p>
                      <p>Email : admin@domusmea.com</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" data-bs-parent="#accordionContact1">
                        Admin Designer
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionContact1">
                    <div class="accordion-body">
                      <p>Address :</p>
                      <p>Phone : +62 1234567890</p>
                      <p>Email : admin@domusmea.com</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" data-bs-parent="#accordionContact1">
                        Customer Service 2
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionContact1">
                      <div class="accordion-body">
                        <p>Address :</p>
                        <p>Phone : +62 1234567890</p>
                        <p>Email : admin@domusmea.com</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="accordion" id="accordionContact2">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" data-bs-parent="#accordionContact2">
                        Admin Agency Property 
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionContact2">
                    <div class="accordion-body">
                      <p>Address :</p>
                      <p>Phone : +62 1234567890</p>
                      <p>Email : admin@domusmea.com</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" data-bs-parent="#accordionContact2">
                        Admin Legal, Registration form, Permit                    
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionContact2">
                    <div class="accordion-body">
                      <p>Address :</p>
                      <p>Phone : +62 1234567890</p>
                      <p>Email : admin@domusmea.com</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" data-bs-parent="#accordionContact2">
                        Customer Service 1
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionContact2">
                    <div class="accordion-body">
                      <p>Address :</p>
                      <p>Phone : +62 1234567890</p>
                      <p>Email : admin@domusmea.com</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" data-bs-parent="#accordionContact2">
                        Customer Service 3
                      </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionContact2">
                      <div class="accordion-body">
                        <p>Address :</p>
                        <p>Phone : +62 1234567890</p>
                        <p>Email : admin@domusmea.com</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </div>
</div>
<!-- Contact end -->
@endsection
