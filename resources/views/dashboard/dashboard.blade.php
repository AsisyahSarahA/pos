@extends('layouts.app')


@section('content')

<h1>Dashboard</h1>

<p><b>Login As</b>: {{ auth()->user()->name }} ({{ auth()->user()->role }})</p>

<h3>List Menu</h3>


<ul>

    <li><a href="{{ route('produk.index') }}">Kelola Produk</a></li>
    <li><a href="{{ route('categories.index') }}">Kelola Kategori</a></li>
    <li><a href="{{ route('customers.index') }}">Kelola Pelanggan</a></li>
    <li><a href="{{ route('suppliers.index') }}">Kelola Supplier</a></li>



    <li>
        <form action="{{ route('proseslogout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </li>

</ul>

@endsection

{{-- > --}}

