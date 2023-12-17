@extends('person.layouts')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('landing') }}/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Pengajuan Loker</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Pengajuan Loker
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                <form action="/create_perusahaan" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" name="owner" class="form-control"
                                placeholder="Pemilik Perusahaan" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="nama_perusahaan" class="form-control"
                                placeholder="Nama Perusahaan" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="number" name="gaji_min" class="form-control" placeholder="Gaji min" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" name="posisi" class="form-control" placeholder="Posisi" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="number" name="gaji_max" class="form-control" placeholder="Gaji max" />
                        </div>
                        <div class="col-6 mb-3">
                            <input type="number" name="no_telpon" class="form-control" placeholder="No. Telpon" />
                        </div>

                        {{-- <div class="col-6 mb-3">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <input type="file" name="foto_perusahaan" id="foto_perusahaan" width=""
                                        height="" class="form-control bg-primary">
                                </span>
                            </div>
                        </div> --}}
                        <div class="col-6 mb-3">
                            <div class="card">
                              <div class="card-body">
                                <div class="form-group mb-3">
                                  <div class="form-group mb-3">
                                    <label for="customFile">Custom file input</label>
                                    <div class="custom-file">
                                      <input type="file" name="foto_perusahaan" class="custom-file-input" id="customFile">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="col-6 mb-3">
                            <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control" placeholder="Deskripsi"></textarea>
                        </div>
                        <div class="col-3">
                            <input type="submit" value="Send Message" class="btn btn-primary col-12" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
