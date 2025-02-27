@extends('auth.header')
@section('content')

        <br><br>
          <div class="container">
              <div class="contact__wrapper shadow-lg mt-n9">
                <h4>&nbsp; Tambah Penjualan</h4>
                  <div class="row no-gutters">
                      <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                          <div class="alert alert-dark" role="alert">
                            Pastikan data Penjualan yang anda Input telah benar dan sesuai!
                          </div>
                          
                          <ul class="contact-info__list list-style--none position-relative z-index-101">
                              <li class="mb-4 pl-4">
                                  <span class="position-absolute">Tangga Penjualan Harus Tepat</li>
                              <li class="mb-4 pl-4">
                                  <span class="position-absolute">Nama Pelangkan tidak boleh tertukar</li>
                              <li class="mb-4 pl-4">
                                  <span class="position-absolute">Cek harga yang anda masukan dengan teliti</li>         .
                              </li>
                          </ul>
              
                          <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                                  <defs>
                                      <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                          <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                          <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                                      </linearGradient>
              
                                  </defs>
                                  <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                                  <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                              </svg>
                          </figure>
                      </div>
              
                      <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                          <form action="{{ route('penjualan.store') }}" method="POST"class="contact-form form-validate" novalidate="novalidate">
                            {{ csrf_field() }}
                            @csrf

                              <div class="row">
                                  <div class="col-sm-6 mb-3">
                                      <div class="form-group">
                                          <label class="required-field" for="Tanggal Penjualan">Tanggal Penjualan</label>
                                          <input type="date" class="form-control" id="TanggalPenjualan" name="TanggalPenjualan" value="{{ old('TanggalPenjualan') }}" placeholder="Name Member">
                                      </div>
                                  </div>
              
                                  <div class="col-sm-6 mb-3">
                                      <div class="form-group">
                                          <label class="required-field" for="TotalHarga">Total Harga</label>
                                          <input type="tel" class="form-control" id="TotalHarga" name="TotalHarga" placeholder="RP,0.000">
                                      </div>
                                  </div>

                                  <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                      <label class="required-field" for="NamaPelanggan">Nama Pelanggan</label>
                                      <select class="form-select" name="PelangganId">
                                        <option>Pilih Member</option>
                               @forelse ($pelanggans as $pelangan)
                                        <option value="{{ $pelangan->id }}">{{ $pelangan->NamaPelanggan }}</option>

                               @empty
                               @endforelse

                                  </select>

                                  <div class="col-sm-12 mb-3">
                                    <br>
                                      <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                                      <a class="btn btn-primary" href="{{ route('penjualan.index') }}">Kembali</a>
                                      
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>

 @endsection
