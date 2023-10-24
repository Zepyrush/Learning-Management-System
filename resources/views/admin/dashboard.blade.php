@extends('layout.panel')

@section('panel_title', 'Dashboard')

@section('panel_breadcrumbs')
  <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
  <li class="breadcrumb-item active">Dashboard v1</li>
@endsection

@section('panel_content')

{{-- <div class="callout callout-danger" style="text-align: center; color: black; background-color : #E74646;">
  <h4> <b>SISTEM INFORMASI E-LEARNING SMK PGRI Pekanbaru </b></h4>
  <h5>Selamat Datang, {{Auth::user()->role->name}}</h5>        
</div>             --}}

<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-white card-yellow card-outline">
      <div class="inner">
        <h3>31</h3>
        <p class=" mb-2">Guru</p></div>
        <div class="icon">
          <i class="fas fa-user-tie text-yellow"></i>
        </div>
        <a href="" class="small-box-footer"> Selengkapnya <i class="fas fa-arrow-circle-right text-yellow">
          </i>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="small-box bg-white card-green card-outline">
        <div class="inner">
          <h3>1001</h3>
          <p class=" mb-2">Murid</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-graduate text-green"></i>
        </div>
        <a href="" class="small-box-footer"> Selengkapnya <i class="fas fa-arrow-circle-right text-green">
          </i>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="small-box bg-white card-purple card-outline">
        <div class="inner">
          <h3>1001</h3>
          <p class=" mb-2">Mata Pelajaran</p>
        </div>
        <div class="icon">
          <i class="fas fa-book-open text-purple custom-cursor-default-hover"></i>
        </div>
        <a href="" class="small-box-footer"> Selengkapnya <i class="fas fa-arrow-circle-right text-purple">
          </i>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="small-box bg-white card-teal card-outline">
        <div class="inner">
          <h3>1001</h3>
          <p class=" mb-2">Jurusan</p>
        </div>
        <div class="icon">
          <i class="fas fa-solid fa-screwdriver-wrench text-teal"></i>
        </div>
        <a href="" class="small-box-footer "> Selengkapnya <i class="fas fa-arrow-circle-right text-teal">
          </i>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <div class="small-box bg-white card-pink card-outline">
        <div class="inner">
          <h3>1001</h3>
          <p class="mb-2">Kelas</p>
        </div>
        <div class="icon">
          <i class="fas fa-chalkboard-teacher text-pink"></i>
        </div>
        <a href="" class="small-box-footer "> Selengkapnya <i class="fas fa-arrow-circle-right text-pink">
          </i>
        </a>
      </div>
    </div>

    
</div>
  
@endsection