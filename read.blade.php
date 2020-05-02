<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Data Buku</h4>
            </div>
            <div class="panel-body">
                 
                    <div class="form-group">
                        <label for="kode">Kode Buku</label>
                        <input type="text" name="kode" id="kode" value="{{$data->kode_buku}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" id="judul" value="{{$data->judul}}" class="form-control" readonly>
                    </div>                    
                    <div class="form-group">    
                        <label for="desk">Deskripsi</label>    
                        <input type="text" name="desk" id="desk" value="{{$data->deskripsi}}" class="form-control" readonly>
                    </div>
                    <form action="{{url('back')}}" method="get">
                        <div class="form-group">
                            <input type="submit" value="Back" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>