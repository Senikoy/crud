@extends('layout')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">ALFEREZ COMPANY</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Van Renting</li>
                            <li class="breadcrumb-item">
                                <a href="/products/create" class="btn btn-info">
                                    Create Product
                                </a>
                            </li>
                        </ol>
                        <div class="card">
                            <table>
                                <tr>
                                    <td>ID</td>
                                    <td>NAME</td>
                                    <td>DESCRIPTION</td>
                                    <td>PRICE</td>
                                    <td>ACTION</td>
                                </tr>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}">view</a>
                                        <a href="{{ route('products.edit', $product->id) }}">edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
@endsection





























