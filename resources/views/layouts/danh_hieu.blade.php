<div class="container" data-aos="fade-up">

  <style>
    .carousel-control-next-icon,
    .carousel-control-prev-icon {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      color: #000;
      background-color: #5a5454;
      border-radius: 50%;
      background-repeat: no-repeat;
      background-position: 50%;
      background-size: 100% 100%;
    }
  </style>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('assets/img/clients/danhhieu1.jpg')}}" class="img-carousel rounded d-block w-100" alt="...">
          </div>
          <div class="col-md-6">
            <img src="{{asset('assets/img/clients/danhhieu2.jpg')}}" class="img-carousel rounded d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('assets/img/clients/danhhieu3.jpg')}}" class="img-carousel rounded d-block w-100" alt="...">
          </div>
          <div class="col-md-6">
            <img src="{{asset('assets/img/clients/danhhieu4.jpg')}}" class="img-carousel rounded d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <img src="{{asset('assets/img/clients/danhhieu5.jpg')}}" class="img-carousel rounded d-block w-100" alt="...">
          </div>
          <div class="col-md-6">
            <img src="{{asset('assets/img/clients/danhhieu6.jpg')}}" class="img-carousel rounded d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>
</div>