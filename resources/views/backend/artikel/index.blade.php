@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/components/select2-init.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('editorl');

    $(document).ready(function () {
        $('#select2').select2();
    })
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-15">
            <div class="card">
                <div class="card-header">Halaman Artikel Berita</div>
                <br>
                <center><a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tag</th>
                                <th>slug</th>
                                <th>Kategori</th>
                                <th>Foto</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($artikel as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->judul }}</td>
                     <td>
                        @foreach ($data->tag as $tag)
                            {{ $tag->nama_tag }}
                        @endforeach
                    </td>
                    <td> {{ $data->slug }}</td>
                    <td>{{ $data->kategori->nama_kategori }}</td>
                     <td><img src="{{ asset('assets/img/artikel/'.$data->foto) }}" alt="" height="200px" width="300px"></td>
                   {{--  <td>{!! $data->konten !!}</td>  --}}

                    <td><a href="{{ route('artikel.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('artikel.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('artikel.destroy', $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
