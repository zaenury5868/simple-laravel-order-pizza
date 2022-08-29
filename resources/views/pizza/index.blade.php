@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="" class="list-group-item list-group-item-action">Tampilkan</a>
                            <a href="" class="list-group-item list-group-item-action">Buat baru</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="nama pizza">
                        </div>
                        <div class="mb-3">
                            <label for="description">Deskripsi Pizza</label>
                            <textarea type="text" class="form-control" name="description"></textarea>
                        </div>
                        <div class="mb-3 d-flex flex-row align-items-center">
                            <label>Harga Pizza</label>
                            <input type="number" class="form-control" placeholder="ukuran kecil">
                            <input type="number" class="form-control" placeholder="ukuran sedang">
                            <input type="number" class="form-control" placeholder="ukuran besar">
                        </div>
                        <div class="mb-3">
                            <label for="description">Kategori</label>
                            <select class="form-control">
                                <option value=""></option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="nonvegetarian">Non Vegetarian</option>
                                <option value="traditional">Traditional</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Gambar</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
