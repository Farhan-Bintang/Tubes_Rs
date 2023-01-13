@extends('adminlte::page')

@section('title', 'Home Page')

@section('content_header')
    <h1>Form Pendaftaran</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-scroll mx-2"></i>Isi Pendaftaran </h5>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route ('user.pendaftaran.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kodePasien">Kode Pasien</label>
                        <input type="text" class="form-control" name="kodePasien" id="kodePasien" value="{{ $pendaftarans }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pasiens_id">Nama Pasien</label>
                        <select name="pasiens_id" class="form-control" id="pasiens_id">
                            <option value="" hidden></option>
                            {{-- @foreach($pasiens as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dokters_id">Spesialis</label>
                        <select name="dokters_id" class="form-control" id="dokters_id">
                            <option value="" hidden></option>
                            @foreach($dokters as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->spesialis }}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="5" class="form-control"></textarea>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop