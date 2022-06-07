@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Berita</h1>
    </div>

    <div class="card bg-light shadow-sm mb-4">
        <div class="card-body">
            <a href="/dashboard/berita/create" class="btn btn-success">Buat berita baru</a>
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
                            <th scope="col">Judul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $b)
                            <tr>
                                <th scope="row">{{ $loop->iteration + $berita->firstItem() - 1 }}</th>
                                <td>{{ $b->title }}</td>
                                <td>
                                    <a href="/dashboard/berita/{{ $b->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                                    <a href="/dashboard/berita/{{ $b->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                                    <form action="/dashboard/berita/{{ $b->slug }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('Hapus berita ini?')" class="badge bg-danger border-0"><span data-feather="x-circle"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {{ $berita->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection