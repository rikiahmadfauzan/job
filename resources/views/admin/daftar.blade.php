@extends('admin.layouts')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center my-4">
                        <div class="col">
                            <h2 class="h4 mb-0 page-title">Loker</h2>
                        </div>
                        <div class="col-auto">
                            {{-- <button type="button" class="btn btn-secondary" id="delete_all"><span
                                class="fe fe-trash fe-12 mr-2"></span>Delete</button> --}}
                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#eventModal"><span class="fe fe-plus-circle fe-12 mr-2"></span>Create</button> --}}
                        </div>
                    </div>
                    {{-- <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="varyModalLabel">Tambah Loker</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-4">
                                    <form action="/create/register" class="dropzone bg-light rounded-lg"
                                        id="tinydash-dropzone" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="eventNote" class="col-form-label">Pemilik Perusahaan</label>
                                            <input type="text" class="form-control" id="eventTitle"
                                                placeholder="Masukan Nama Lengkap" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="eventTitle" class="col-form-label">NIK</label>
                                            <input type="number" class="form-control" id="eventTitle"
                                                placeholder="Masukan NIK" name="nik">
                                        </div>
                                        <div class="form-group">
                                            <label for="eventNote" class="col-form-label">Email</label>
                                            <input type="email" class="form-control" id="eventTitle"
                                                placeholder="Masukan Email" name="email">
                                        </div>
                                        <div class="dz-message needsclick">
                                            <div class="circle circle-lg bg-primary">
                                                <i class="fe fe-upload fe-24 text-white"></i>
                                            </div>
                                            <h5 class="text-muted mt-4">Drop files here or click to upload</h5>
                                        </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between">
                                    <button type="submit" class="btn mb-2 btn-primary col-12">Create</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="w-50">Name</th>
                                <th>Email</th>
                                <th>Document</th>
                                <th>Last Update</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar as $item)
                                <tr>
                                    <td class="text-center">
                                        <div class="circle circle-sm bg-light">
                                            <span class="fe fe-layers fe-16 text-muted"></span>
                                        </div>
                                        <span class="dot dot-md bg-success mr-1"></span>
                                    </td>
                                    <th scope="row">{{ $item->name }}<br />
                                        <span class="badge badge-light text-muted">{{ $item->nik }}</span>
                                    </th>
                                    <td class="text-muted">{{ $item->email }}</td>
                                    <td class="text-muted"><a href="/storage/{{ $item->document}}"><button class="btn btn-sm btn-primary"><span
                                                    class="fe fe-eye fe-12 mr-2"></span>View</button></a></td>
                                    <td class="text-muted">{{ $item->updated_at }}</td>
                                    <td>
                                        <div class="file-action">
                                            <button type="button"
                                                class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu m-2">
                                                {{-- <a class="dropdown-item" href="#"><i
                                                    class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fe fe-copy fe-12 mr-4"></i>Copy</a> --}}
                                                <a class="dropdown-item" href="" data-toggle="modal"
                                                    data-target="#edit{{ $item->id }}"><i
                                                        class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                                                {{-- <a class="dropdown-item" href="#"><i
                                                    class="fe fe-share fe-12 mr-4"></i>Share</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fe fe-download fe-12 mr-4"></i>Download</a> --}}
                                            </div>
                                        </div>
                                    </td>
                                    <!--  modal -->
                                    <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="eventModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="varyModalLabel">Edit Loker
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <form action="/update/perusahaan/{{ $item->id }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label">Foto Perusahaan</label>
                                                                <div class="">
                                                                    @if (file_exists('storage/' . $item->foto_perusahaan))
                                                                        <img src="/storage/{{ $item->foto_perusahaan }}"
                                                                            alt="100" width="450" height="250">
                                                                    @endif
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventNote" class="col-form-label">Pemilik
                                                                Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Pemilik Perusahaan" name="owner"
                                                                value="{{ $item->owner }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventNote" class="col-form-label">Nama
                                                                Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Pemilik Perusahaan" name="nama_perusahaan"
                                                                value="{{ $item->nama_perusahaan }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventNote" class="col-form-label">Email</label>
                                                            <input type="email" class="form-control"
                                                                placeholder="Email" name="email"
                                                                value="{{ $item->email }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="simple-select2">Status</label>
                                                            <select name="status" class="form-control select2"
                                                                id="simple-select2">
                                                                <optgroup label="Pilih Status">
                                                                    <option
                                                                        {{ $item->status == 'disetujui' ? 'selected' : '' }}>
                                                                        Disetujui</option>
                                                                    <option
                                                                        {{ $item->status == 'proses' ? 'selected' : '' }}>
                                                                        Proses</option>
                                                                    <option
                                                                        {{ $item->status == 'ditolak' ? 'selected' : '' }}>
                                                                        Ditolak</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>

                                                </div>
                                                <div class="modal-footer d-flex justify-content-between">
                                                    <button type="submit"
                                                        class="btn mb-2 btn-primary col-12">Update</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!--  modal -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
