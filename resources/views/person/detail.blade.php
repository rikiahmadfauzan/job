@extends('person.layouts')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('landing') }}/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">
                        {{ $perusahaan->nama_perusahaan }}
                    </h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            {{-- <li class="breadcrumb-item">
                                <a href="properties.html">Lowongan Kerja</a>
                            </li> --}}
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Detail Lowongan kerja
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    {{-- <div class="img-property-slide-wrap"> --}}
                    {{-- <div class="img-property-slide"> --}}
                    <img src="/storage/{{ $perusahaan->foto_perusahaan }}" alt="Image" class="img-fluid" />
                    {{-- <img src="{{ asset('landing') }}/images/img_2.jpg" alt="Image" class="img-fluid" />
          <img src="{{ asset('landing') }}/images/img_3.jpg" alt="Image" class="img-fluid" /> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                </div>
                <div class="col-2">
                    {{-- <button type="button" class="btn btn-secondary" id="delete_all"><span
                            class="fe fe-trash fe-12 mr-2"></span>Delete</button> --}}
                    {{-- <button class="btn btn-primary" href="" data-toggle="modal"
                        data-target="#edit"><i class="fe fe-mail fe-12 mr-4"></i>Contact</button> --}}
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eventModal"><span
                            class="fe fe-plus-circle fe-12 mr-2"></span>Create</button> --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Refistrasi
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form action="/create/daftar" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            {{-- <label for="eventTitle" class="col-form-label">NIK</label> --}}
                                            <input type="text" class="form-control mt-3" id="eventTitle"
                                                placeholder="Masukan NIK" name="nama_perusahaan"
                                                value="{{ $perusahaan->nama_perusahaan }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            {{-- <label for="eventTitle" class="col-form-label">NIK</label> --}}
                                            <input type="number" class="form-control mt-3" id="eventTitle"
                                                placeholder="Masukan NIK" name="nik" value="{{ $user->nik }}"
                                                disabled>
                                        </div>
                                        <div class="form-group">
                                            {{-- <label for="eventNote" class="col-form-label">Pemilik Perusahaan</label> --}}
                                            <input type="text" class="form-control mt-3" id="eventTitle"
                                                placeholder="Masukan Nama Lengkap" name="name"
                                                value="{{ $user->name }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            {{-- <label for="eventNote" class="col-form-label">Email</label> --}}
                                            <input type="email" class="form-control mt-3" id="eventTitle"
                                                placeholder="Masukan Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            {{-- <label">Upload Foto Menu</label> --}}
                                            <div class="input-group col-xs-12 mt-3">
                                                {{-- @if (file_exists('storage/' . $menu->fotoMenu))
                                                <img src="/storage/{{ $menu->fotoMenu}}" alt="100" width="100" height="100">
                                                 @endif --}}
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Document">
                                                <span class="input-group-append">
                                                    <input type="file" name="document" id="document" width="100"
                                                        height="100" class="form-control">
                                                </span>
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="submit" class="btn mb-2 btn-primary col-12">Send</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h2 class="heading text-primary">
                        {{ $perusahaan->nama_perusahaan }}
                    </h2>
                    <p class="meta">{{ $perusahaan->alamat }}</p>
                    <p class="text-black-50">
                        {{ $perusahaan->deskripsi }}
                    </p>
                    <p class="text-black-50">
                        Gaji diperusahaan {{ number_format($perusahaan->gaji_min) }} -
                        {{ number_format($perusahaan->gaji_max) }}
                    </p>
                    {{-- <p class="text-black-50">
        Perferendis eligendi reprehenderit, assumenda molestias nisi eius
        iste reiciendis porro tenetur in, repudiandae amet libero.
        Doloremque, reprehenderit cupiditate error laudantium qui, esse
        quam debitis, eum cumque perferendis, illum harum expedita.
      </p> --}}

                    <div class="d-block agent-box p-5">
                        <div class="img mb-4">
                            <img src="{{ asset('landing') }}/images/person_2-min.jpg" alt="Image"
                                class="img-fluid" />
                        </div>
                        <div class="text">
                            <h3 class="mb-0">{{ $perusahaan->owner }}</h3>
                            <div class="meta mb-3">{{ $perusahaan->no_telpon }}</div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Ratione laborum quo quos omnis sed magnam id ducimus saepe
                            </p>
                            <ul class="list-unstyled social dark-hover d-flex">
                                <li class="me-1">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
