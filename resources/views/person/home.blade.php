@extends('person.layouts')
@section('content')
    <div class="hero">
        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('{{ asset('landing') }}/images/nabati.jpg')"></div>
            <div class="img overlay" style="background-image: url('{{ asset('landing') }}/images/yamaha.jpg')"></div>
            <div class="img overlay" style="background-image: url('{{ asset('landing') }}/images/honda.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        Aksi nyata bukan sekedar kata
                    </h1>
                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control px-4" placeholder="Lowongan kerja" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">
                        Popular Properties
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="/all" {{-- target="_blank" --}} class="btn btn-primary text-white py-3 px-4">View all
                            properties</a>
                    </p>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            @foreach ($perusahaan as $item)
                                <div class="property-item">
                                    <a href="/detail" class="img">
                                        <img src="/storage/{{ $item->foto_perusahaan }}" alt="Image" class="img-fluid" />
                                    </a>

                                    <div class="property-content">
                                        @foreach ($posisi as $posi)
                                            <div class="price mb-2"><span>{{ $posi->gaji }}</span></div>

                                            <div>
                                                <span class="d-block mb-2 text-black-50">{{ $item->alamat }}</span>
                                                <span class="city d-block mb-3">{{ $item->nama_perusahaan }}</span>

                                                <div class="specs d-flex mb-4">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-person me-2"></span>
                                                        <span class="caption">2 beds</span>
                                                    </span>
                                                    <span class="d-block d-flex align-items-center">
                                                        <span class="icon-bath me-2"></span>
                                                        <span class="caption">2 baths</span>
                                                    </span>
                                                </div>
                                        @endforeach

                                        <a href="/detail" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('landing') }}/images/img_2.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('landing') }}/images/img_3.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('landing') }}/images/img_4.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('landing') }}/images/img_5.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('landing') }}/images/img_6.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('landing') }}/images/img_7.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('landing') }}/images/img_8.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('landing') }}/images/img_1.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                    </div>

                    <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                        <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                        <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            @foreach ($perusahaan as $item)

                            <div class="property-item">
                                <a href="/detail/{{ $item->id }}" class="img">
                                    <img src="/storage/{{ $item->foto_perusahaan }}" alt="Image" width="450" height="250" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2">
                                        <span>Rp.{{number_format($item->gaji_min) }}</span>
                                        <span>-</span>
                                        <span>Rp.{{number_format($item->gaji_max) }}</span>
                                    </div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">{{ $item->alamat }}</span>
                                        <span class="city d-block mb-3">{{ $item->nama_perusahaan }}</span>

                                        {{-- <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div> --}}

                                        <a href="/detail/{{ $item->id }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property"
                                tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property"
                                tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- <div class="section section-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6 mb-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Our Agents
                    </h2>
                    <p class="text-black-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        enim pariatur similique debitis vel nisi qui reprehenderit totam?
                        Quod maiores.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="{{ asset('landing') }}/images/person_1-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">James Doe</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Facere officiis inventore cumque tenetur laboriosam, minus
                                culpa doloremque odio, neque molestias?
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="{{ asset('landing') }}/images/person_2-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Jean Smith</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Facere officiis inventore cumque tenetur laboriosam, minus
                                culpa doloremque odio, neque molestias?
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="{{ asset('landing') }}/images/person_3-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Facere officiis inventore cumque tenetur laboriosam, minus
                                culpa doloremque odio, neque molestias?
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
