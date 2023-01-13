@extends('template')
@section('main')
<div class="container">
    <div class="py-5 text-center">
        <img src="{{ asset('assets/img/Bootstrap_logo.png') }}" alt="logo" height="70">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
      <h2>Bontol</h2>
      <p class="lead">Selamat menonton, tapi setelah bayar hehe :v</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate="">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Nama depan</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Harus diisi.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Nama belakang</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                harus diisi.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" placeholder="Username" required="">
              <div class="invalid-feedback" style="width: 100%;">
                Username diperlukan.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Mohon masukan email yang benar.
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <label for="film">Film</label>
                <select class="form-select">
                    <option class="form-control" value="">{{$film->judul}}</option>
                </select>
            </div>
            <div class="row mt-3">
             <div class="col-md-4">
               <label for="harga">Harga</label>
               <input class="form-control" type="text" value="{{$film->harga}}" disabled>
              </div>
             </div>
          </div>
          <hr class="mb-4">
          <hr class="mb-4">

          <h4 class="mb-3">Payment</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
              <label class="custom-control-label" for="credit">Dana</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="debit">Gopay</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="paypal">Ovo</label>
            </div>
          </div>
            <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="button" id="checkout">Continue to checkout</button>
        </form>
      </div>
    </div>
  </div>
  <script>
    document.querySelector(".btn").addEventListener('click', function(){
  Swal.fire("Bontol", "Selamat menonton hehe :v", "success", "timer:5000").then(function(){window.location.href = '/film/home';});});
  </script>
@endsection