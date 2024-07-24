@extends('layout')

@section('content')
    <div id="layoutSidenav_content" class="bg-info">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">ALFEREZ COMPANY</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Van Renting</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('products.create') }}" class="btn btn-info">Create Product</a>
                    </li>
                </ol>

                <div class="card shadow bg-secondary">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">List of Products</h3>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary">View</a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
