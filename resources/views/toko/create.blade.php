@extends('template/admin/index')

@section('content')
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store')}}" method="POST">
        @csrf

        <div class="formgroup">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="formgroup">
            <label for="price">Harga Produk</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>

        <div class="formgroup">
            <label for="description">Deskripsi</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>

    </form>
@endsection