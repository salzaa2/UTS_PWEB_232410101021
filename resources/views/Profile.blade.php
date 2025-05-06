@extends('layouts.akun')

@section('title', 'Profile Anda')

@push('styles')
  <style>
    /* Profile page specific styles, if needed */
  </style>
@endpush

@section('content')
  <div class="card-container">
    <div class="card">
      <div class="card-header">
        <h1>Profile Anda</h1>
      </div>
      <div class="card-body">
        <div class="info-box">
          <label>Nama Lengkap</label> <span>{{ $nama_lengkap }}</span>
        </div>
        <div class="info-box">
          <label>Username</label> <span>{{ $username }}</span>
        </div>
        <div class="info-box">
          <label>Email</label> <span>{{ $email }}</span>
        </div>
        <div class="info-box">
          <label>Telepon</label> <span>{{ $no_hp }}</span>
        </div>
        <div class="info-box">
          <label>Alamat</label> <span>{{ $alamat }}</span>
        </div>
      </div>
    </div>
  </div>
@endsection


