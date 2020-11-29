@extends('layout/main')

@section('title')
    Portfolio Bayu Anugerah
@endsection

@section('navbar')
  <a class="nav-link" href="#about">About</a>
  <a class="nav-link" href="#portfolio">Portfolio</a>
  <a class="nav-link" href="#contact">Contact</a>
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <img src="{{url('img/profile1.png')}}" width="25%" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Bayu Anugerah</h1>
    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facere minima id? Dignissimos illo rerum repellendus laboriosam eligendi totam dolor amet dicta veniam tempore incidunt est, quo nisi ad optio?</p>
  </div>
</div>
<section id="about" class="about">
  <div class="container">
    <div class="row mb-3 pt-5">
      <div class="col text-center">
        <h1>About</h1>
      </div>
    </div>
    <div class="row text-justify justify-content-center">
      <div class="col-md-5">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem impedit reiciendis deserunt nostrum officiis eius quisquam illo consequuntur repellat, eveniet dignissimos modi voluptatum assumenda, dolore quibusdam dolorem explicabo dolor! Nostrum!</p>
      </div>
      <div class="col-md-5">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nulla consequatur eum iusto! Ducimus aspernatur laborum iure repellat praesentium! Expedita est esse odio, cum provident quam non magnam quos sunt!</p>
      </div>
    </div>
  </div>
</section>
<section id="portfolio" class="portfolio bg-light pb-3">
  <div class="container">
    <div class="row mb-3 pt-5">
      <div class="col text-center">
        <h1>Portfolio</h1>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md">
        <div class="card">
          <img src="img/thumbs/1.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="img/thumbs/2.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="img/thumbs/3.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md">
        <div class="card">
          <img src="img/thumbs/4.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="img/thumbs/5.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="img/thumbs/6.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="contact" class="contact mb-5">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>Contact</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card text-white bg-info mb-3">
          <div class="card-body">
            <h5 class="card-title">Contact US</h5>
            <p class="card-text">example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <ul class="list-group">
          <li class="list-group-item">
            <h1>Location</h1>
          </li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" id="Nama">
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Email">
          </div>
          <div class="form-group">
            <label for="Pesan">Pesan</label>
            <textarea class="form-control" id="Pesan"></textarea>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-info">Kirim pesan!</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
