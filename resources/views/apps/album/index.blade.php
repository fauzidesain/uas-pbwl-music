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
            <div class="card-title-cs"><h5>Data Album</h5></div>

            <div class="row">
                <div class="col-6">
                    <a href="{{ route('admin.album.create') }}">
                        <button class="btn-cs btn-cs-success">Tambah</button>
                    </a>
                </div>
            </div>

            <div class="table-responsive" style="margin-top: 10px">
                <table class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Name Artis</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($album as $item)
                        <tr>
                            <td>{{ $loop->iteration + $skipped }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->artist->name }}</td>
                            <td>
                                <a href="{{ route('admin.album.edit', $item->id) }}">
                                    <button class="btn-cs btn-cs-warning">Edit</button>
                                </a>

                                <form action="{{ route('admin.album') }}" method="post" style="display: inline-block">
                                    @csrf @method('delete')
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn-cs btn-cs-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>    
@endsection