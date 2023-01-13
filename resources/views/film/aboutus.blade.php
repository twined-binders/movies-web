@extends('template')
@section('style')

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #7134f9;
  color: white;
}

.container {
  padding: 0 16px;
  justify-content: center;
  align-items: center;
  place-items: center;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color:#7134f9;;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
@endsection
@section('main')
<div class="about-section">
  <h1>About Us Page</h1>
  <hr class="mb-4">
  <h4>Bontol</h4>
  <p>Bersama Nonton Online</p>
</div>
<h2 style="text-align:center">Our Team</h2>
<div class="row mb-2">
  <div class="col-4">
    <div class="card">
      <img src="/assets/img/profil/fahmi.jpg" style="width:100%">
      <div class="container">
        <h2>M. Fahmi Ahsan</h2>
        <p class="title">20104410010</p>
        <p><b>Ketua</b></p>
        <p>Tetaplah Hidup Walau tidak Berguna</p>
        {{-- <p><button class="button">Contact</button></p> --}}
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <img src="/assets/img/profil/indra.jpg"  style="width:100%">
      <div class="container">
        <h2>Indra Kurniawan</h2>
        <p class="title">20104410004</p>
        <p><b>Anggota</b></p>
        <p>Tidak ada Manusia yang tidak berguna</p>
        {{-- <p><button class="button">Contact</button></p> --}}
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <img src="/assets/img/profil/elda.jpg"  style="width:100%">
      <div class="container">
        <h2>Elda Vina</h2>
        <p class="title">20104410043</p>
        <p><b>Anggota</b></p>
        <p>Kamu tidak hacur, Kamu Sedang dibentuk</p>
        {{-- <p><button class="button">Contact</button></p> --}}
      </div>
    </div>
  </div>
</div>
  <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="/assets/img/profil/rahma.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h2>Firsta Rahmania Sucahyo</h2>
            <p class="title">20104410012</p>
            <p><b>Anggota</b></p>
            <p>Dunia hanyalah ilusi</p>
            {{-- <p><button class="button">Contact</button></p> --}}
          </div>
        </div>
      </div>
          <div class="col-4">
            <div class="card">
              <img src="/assets/img/profil/pakipul.jpg" alt="Jane" style="width:100%">
              <div class="container">
                <h2>Saiful Nur Budiman</h2>
                <p class="title">Universitas Islam Balitar</p>
                <p><b>Dosen</b></p>
                <p>Pemrograman Web Lanjut</p>
                {{-- <p><button class="button">Contact</button></p> --}}
              </div>
            </div>
          </div>

          <div class="col-4">
            <div class="card">
              <img src="/assets/img/profil/telkom.jpg" alt="Mike" style="width:100%">
              <div class="container">
                <h2>Telkom Blitar</h2>
                <p class="title">Support</p>
                <p><b>Healer</b></p>
                <p>Tempat Membantu Kita Menyelesaikan UTS</p>
                {{-- <p><button class="button">Contact</button></p> --}}
              </div>
            </div>
          </div>
@endsection