@extends('layouts.master')

@section('title-page')
<h4>Track</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
    <li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
    <li class="breadcrumbs-item active">Track</li>
</ul>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card-cs">
            <div class="card-title-cs"><h5>Edit Track</h5></div>

            <form action="{{ route('admin.track') }}" method="post" class="form-cs">
                @csrf @method('put')
                
                <input type="hidden" name="id" value="{{ $track->id }}">

                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Nama</label>
                    <input type="text" name="name" value="{{ $track->name }}" class="form-control-cs">
                </div>
                
                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Nama Artis</label>
                    <select name="artist_id" class="form-control-cs">
                        <option>- Pilih -</option>
                        @foreach ($artist as $item)
                            <option value="{{ $item->id }}" 
                                @if ($track->artist_id == $item->id)
                                    selected
                                @endif>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group-cs">
                    <label for="" class="label-form-cs">Nama Album</label>
                    <select name="album_id" class="form-control-cs">
                        <option>- Pilih -</option>
                        @foreach ($album as $item)
                            <option value="{{ $item->id }}" 
                                @if ($track->artist_id == $item->id)
                                    selected
                                @endif>{{ $item->name }}</option>
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