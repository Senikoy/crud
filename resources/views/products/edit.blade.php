@extends('layout')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">ALFEREZ COMPANY</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">List of Products</li>
                </ol>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Edit Product</h3>
                    </div>
                    <div class="card-body bg-success">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price:</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
                    </div>
                </div>

            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website {{ date('Y') }}</div>
                    <div>
                        <a href="#" class="text-decoration-none">Privacy Policy</a>
                        &middot;
                        <a href="#" class="text-decoration-none">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
