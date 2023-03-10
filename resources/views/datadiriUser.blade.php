@extends('adminlte::page')

@section('title', 'RS sehat')

@section('content_header')
    <h1>Form Pengisian Data Diri</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-users mx-2"></i>Isi Data Diri</h5>
            </div>
            <div class="modal-body">
                    <form method="post" action="{{ route ('user.datadiri.submit') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="kodePasien">Kode Pasien</label>
                            <input type="text" class="form-control" name="kodePasien" id="kodePasien" value="{{ $nomer }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="gender" id="gender">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="year" class="form-control" name="umur" id="umur" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="alamat" id="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="noHp">No. handphone</label>
                            <input type="text" class="form-control" name="noHp" id="noHp" required>
                        </div class="modal-footer">
                            <button type="submit" class="btn btn-success">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
    <script>
         // MENGAMBIL VALUE DARI PASIEN UNTUK PENDAFTARAN
         $(function(){
            $(document).on('click','#btn-submit-pendaftaran', function(){
                let id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    url: "{{url('/admin/ajaxadmin/pendaftaran')}}/" + id,
                    datatype: 'json',
                    success: function(res){
                        $('#submit-kodePasien').val(res.kodePasien);
                        $('#submit-nama').val(res.nama);
                        $('#submit-id').val(res.id);
                    },
                });
            });
        });
    </script>
@stop