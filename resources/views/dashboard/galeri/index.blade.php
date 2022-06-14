@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Galeri</h1>
    </div>

    <div class="card bg-light shadow-sm mb-4">
        <div class="card-body">
            <a href="/dashboard/galeri/create" class="btn btn-success">Upload gambar baru</a>
        </div>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card bg-light shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Gambar</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeri as $g)
                            <tr>
                                <th scope="row">{{ $loop->iteration + $galeri->firstItem() - 1 }}</th>
                                <td>{{ $g->nama_gambar }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $g->gambar) }}" alt="{{ $g->nama_gambar }}" width="200" class="img-thumbnail">
                                </td>
                                <td>
                                    <a href="/dashboard/galeri/{{ $g->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                                    <form action="/dashboard/galeri/{{ $g->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('Hapus gambar ini?')" class="badge bg-danger border-0"><span data-feather="x-circle"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {{ $galeri->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection