@extends('layouts.layout')

@section('title', 'Beranda')
@section('content')
  <!-- jumbotron -->
  <div class="flex flex-col justify-center items-center py-8 h-full lg:h-screen bg-center bg-no-repeat lg:bg-cover"
    style="background-image:linear-gradient(rgba(182, 182, 182, 0.9), rgba(255, 248, 145, 0.835)), url('{{ url('build/images/jumbotron.jpeg') }}')">
    <div class="container px-5 lg:px-20">
      <p class="text-8xl font-sans font-bold tracking-widest">AFC</p>
      <p class="text-[#08984d] text-4xl font-medium">Accounting and Finance Center</p>
      <p class="mt-5 mb-5 font-medium text-base">AFC adalah sebuah unit yang merupakan link and macth dunia pendidikan
        dan dunia kerja. Terutama bagi kebutuhan dan pengembangan keilmuan dan praktek langsung pada pasar modal dengan
        kemajuan teknologi yang semakin pesat.</p>
      <div class="bg-white py-1 px-3 uppercase tracking-widest inline rounded-5 font-bold text-bg-light">"Mengelola
        keuangan penting! untuk masa depan kita"</div>
      <div class="mt-16">
        <a href=""
          class="shadow-lg px-7 py-3 bg-black text-base uppercase tracking-widest font-medium shadow-md text-white rounded-md hover:bg-gray-900">daftar
          sekarang!</a>
      </div>

    </div>
  </div>
@endsection


  