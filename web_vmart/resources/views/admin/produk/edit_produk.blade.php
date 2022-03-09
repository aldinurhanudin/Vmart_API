
@extends("Layout.v_template")
@section('title',' Produk')
@section('content-header')
<h1>
    @yield('title')
    <small>@yield('title')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Buku</a></li>
    <li class="active">@yield('title')</li>
  </ol>
@endsection
@section("page_scripts")

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session("gagal"))

<script>
    Swal.fire(
    'Gagal!',
    '{{ session("gagal") }}',
    'error'
    )
</script>

@elseif(session("sukses"))

<script>
    Swal.fire(
    'Berhasil!',
    '{{ session("sukses") }}',
    'success'
    )
</script>

@endif

@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit @yield('title')</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/kategori/insert" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_produk">Nama produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukan nama produk" value="{{ old('nama_produk') }}">
                        <div class="text-danger">
                            @error('nama_produk')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_harga">Harga</label>
                        <input type="text" class="form-control" id="nama_harga" name="nama_harga" placeholder="Masukan nama harga" value="{{ old('nama_harga') }}">
                        <div class="text-danger">
                            @error('nama_harga')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_stok">Stok</label>
                            <input type="text" class="form-control" id="nama_stok" name="nama_stok" placeholder="Masukan nama stok" value="{{ old('nama_stok') }}">
                            <div class="text-danger">
                                @error('nama_stok')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_satuan">Satuan</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_satuan" placeholder="Masukan nama satuan" value="{{ old('nama_satuan') }}">
                            <div class="text-danger">
                                @error('nama_satuan')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                    </div>



                    </div>
                    <div class="form-group">
                        <label for="nama_deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_deskripsi" placeholder="Masukan nama deskripsi" value="{{ old('nama_deskripsi') }}">
                        <div class="text-danger">
                            @error('nama_deskripsi')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data @yield('title')</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="" class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama Produk</th>

                            <th>Label</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    @endsection


