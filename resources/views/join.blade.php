@extends('layouts.main')

@section('container')
<h1 class="mt-5 text-center">{{ $title }}</h1>

  <head><script src="js/join.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Join Us!</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="css/style.css" rel="stylesheet">

  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom"></h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Marketing Agency</h3>
          <p>More benefit, you are the CHAMPION, program to level up. Eligible to access Domus Mea Apps on Marketing Agency based on their level.</p>
          <a href="/register" class="btn btn-primary">
            Register Now!
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Contractor</h3>
          <p>Many projects are waiting for you. Program to level up. Eligible to access Domus Mea apps based on their level.</p>
          <a href="/register" class="btn btn-primary">
            Register Now!
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Designer</h3>
          <p>Many projects are waiting for you. Program to level up. Eligible to access Domus Mea apps based on their level.</p>
          <a href="/register" class="btn btn-primary">
            Register Now!
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="js/join.js"></script>

    </body>
</html>


@endsection
