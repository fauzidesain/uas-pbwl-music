@extends('layouts.master')

@section('title-page')
<h4>Album</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
    <li class="breadcrumbs-item active">Album</li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Tambah Album</h5></div>

            <form action="{{ route('admin.album') }}" method="post" class="form-cs">
                @csrf @method('post')
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Nama</label>
                    <input type="text" name="name" class="form-control-cs">
                </div>

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Nama Artis</label>
                    <select name="artist_id" class="form-control-cs">
                        <option>- Pilih -</option>
                        @foreach ($artist as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
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