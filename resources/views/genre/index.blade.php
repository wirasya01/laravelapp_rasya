@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Genre
                        <a href="{{ route('genre.create') }}" class="btn btn-sm btn-primary" style="float: right;">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table-responsive">
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-3">Nama genre</th>
                                    <th class="col-3">Aksi</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($genre as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama_genre }}</td>
                                        <td>

                                            <form action="{{ route('genre.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('genre.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success">Edit</a>
                                                <a href="{{ route('genre.show', $item->id) }}"
                                                    class="btn btn-sm btn-warning">Show</a>

                                                <button class="btn btn-sm btn-danger" type="supbim"
                                                    onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
