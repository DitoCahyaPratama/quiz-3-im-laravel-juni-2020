@extends('layouts.master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Detail Artikel</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/artikel">Artikel</a></li>
          <li class="breadcrumb-item active">Artikel Detail</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="card">
      <div class="card-header">
            <h3 class="card-title">{{ $article->judul }}</h3>
            <p>slug => {{ $article->slug }}</p>
            <p>Dibuat pada : {{ $article->created_at }} | Diperbarui pada : {{ $article->updated_at }}</p>
            @foreach ($tags as $item => $tag)
                <span class="badge badge-primary">{{ $tag }}</span>
            @endforeach
      </div>
      <!-- /.card-header -->
      <div class="card-body">
            <p>{{ $article->isi }}</p>
      </div>
      <!-- /.card-body -->
    </div>
</section>
@endsection