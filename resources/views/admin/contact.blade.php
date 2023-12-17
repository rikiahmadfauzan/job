@extends('admin.layouts')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center my-4">
                        <div class="col">
                            <h2 class="h3 mb-0 page-title">Contact</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($contact as $item)
                            <div class="col-md-3">
                                <div class="card shadow mb-4">
                                    <div class="card-body text-center">
                                        <div class="avatar avatar-lg mt-4">
                                           Massage
                                        </div>
                                        <div class="card-text my-2">
                                            <strong class="card-title my-0">Nama : {{ $item->name }}</strong>
                                            {{-- <p class="small text-muted mb-0">{{ $item->nik }}</p> --}}
                                            <p class="small"><span
                                                    class="badge badge-light text-muted">{{ $item->email }}</span>
                                            </p>
                                        </div>
                                    </div> <!-- ./card-text -->
                                    <div class="card-footer">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-auto">
                                                <small>
                                                    {{ $item->subject }}
                                                </small>
                                            </div>
                                            <div class="col-auto">
                                                <div class="file-action">
                                                    <button type="button"
                                                        class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu m-2">
                                                        {{-- <a class="dropdown-item" href="#"><i
                                                                class="fe fe-meh fe-12 mr-4"></i>Profile</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-message-circle fe-12 mr-4"></i>Chat</a> --}}
                                                        <a class="dropdown-item" href="" data-toggle="modal"
                                                            data-target="#edit{{ $item->id }}"><i
                                                                class="fe fe-mail fe-12 mr-4"></i>Contact</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                                                    </div>
                                                </div>
                                                <!--  modal -->
                                                <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="varyModalLabel">Message
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body p-4">
                                                                <h6>{{ $item->pesan }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!--  modal -->
                                            </div>
                                        </div>
                                    </div> <!-- /.card-footer -->
                                </div>
                            </div> <!-- .col -->
                        @endforeach

                    </div> <!-- .row -->
                    <nav aria-label="Table Paging" class="my-3">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>
@endsection
