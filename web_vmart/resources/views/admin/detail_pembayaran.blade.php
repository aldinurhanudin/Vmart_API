
@extends("Layout.v_template")
@section('title',' Pembayaran Order')
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
                <h3 class="box-title">Tambah @yield('title')</h3>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/produk/insert" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_produk">ID</label>
                        <input type="text" class="form-control" id="sku" name="sku" placeholder="" >
                        <div class="text-danger">
                            @error('nama_produk')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_produk">Nama produk</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama produk" >
                        <div class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputPassword1">Kategori</label>

                        
                    </div>
                    <div class="form-group">
                        <label for="nama_harga">Harga</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Masukan nama harga" >
                        <div class="text-danger">
                            @error('price')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_stok">Stok</label>
                                <input type="text" class="form-control" id="stock" name="stock" placeholder="Masukan nama stok">
                                <div class="text-danger">
                                    @error('stock')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_satuan">Satuan</label>
                                <input type="text" class="form-control" id="product_unit" name="product_unit" placeholder="Masukan nama satuan" >
                                <div class="text-danger">
                                    @error('product_unit')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="form-group">
                        <label for="nama_deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Masukan nama deskripsi" >
                        <div class="text-danger">
                            @error('discription')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Foto</h3>
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
                                        <td>
                                            <input type="file" class="form-control" name="picture_name" id='picture_name' placeholder="" value="">
                                            <div class="text-danger">
                                                @error('picture_name')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </form>

            @endsection


