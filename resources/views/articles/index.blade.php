@extends('layouts.master')

@push('style')
<link rel="stylesheet" href="{{ asset('/sbadmin2/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/sbadmin2/vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Artikel</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item">Artikel</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable Artikel</h3>
        <div class="text-right">
          <a href="/artikel/create">
            <button class="btn btn-primary">+ Add Data</button>
          </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Tag</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($articles as $key => $article)
              <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $article->judul }} </td>
                <td> {{ $article->isi }} </td>
                <td> {{ $article->slug }} </td>
                <td> {{ $article->tag }} </td>
                <td> 
                  <a href="/artikel/{{ $article->id }}"><button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a>
                  <a href="/artikel/{{ $article->id }}/edit"><button class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button></a>
                  <form action="/artikel/{{$article->id}}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></a>
                  </form>
                </td>
              </tr>
          @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Slug</th>
              <th>Tag</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('/sbadmin2/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/sbadmin2/vendor/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable();
    });
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
  </script>
@endpush