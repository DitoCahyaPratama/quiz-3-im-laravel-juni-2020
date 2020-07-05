@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Create Artikel</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/artikel">Artikel</a></li>
                <li class="breadcrumb-item active">Create Artikel</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create Artikel</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/artikel" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="judul">Judul: </label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Enter judul">
              </div>
              <div class="form-group">
                <label for="isi">Isi: </label>
                <textarea name="isi" class="form-control" id="isi" placeholder="Enter isi"></textarea>
              </div>
              <div class="form-group">
                <label for="tag">Tag: </label>
                <p>Gunakan spasi untuk multiple tags</p>
                <input type="text" name="tag" class="form-control" id="tag" placeholder="Enter tag">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content --> 
@endsection