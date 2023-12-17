<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  action="/create_perusahaan" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6 mb-3">
                <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" />
            </div>
            <div class="col-6 mb-3">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" />
            </div>
            <div class="col-6 mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" />
            </div>
            <div class="col-6 mb-3">
                <input type="number" name="no_telpon" class="form-control" placeholder="No. Telpon" />
            </div>
            <div class="col-12 mb-3">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled
                            placeholder="Upload Image">
                        <span class="input-group-append">
                            <input type="file" name="fotoMenu" id="fotoMenu" width="" height=""
                                class="form-control bg-primary">
                        </span>
                    </div>
            </div>
            <div class="col-12 mb-3">
                <textarea name="deskripsi" id="" cols="30" rows="7" class="form-control" placeholder="Deskripsi"></textarea>
            </div>

            <div class="col-12">
                <input type="submit" value="Send Message" class="btn btn-primary col-12" />
            </div>
        </div>
    </form>
</body>
</html>
