@extends('layouts.master')

@section('title-page')
<h4>Artist</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
    <li class="breadcrumbs-item active">Artis</li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Tambah Data Artis</h5></div>

            <form action="{{ route('admin.artist') }}" method="post" class="form-cs">
                @csrf @method('post')
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Nama</label>
                    <input type="text" name="name" class="form-control-cs">
                </div>

                <div class="card-footer-cs">
                    <button class="btn-cs btn-cs-success">Simpan</button>
                    <button class="btn-cs btn-cs-danger">Batal</button>
                </div>
            </form>

        </div>
    </div>
</div>    
@endsection