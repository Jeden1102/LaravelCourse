@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Lista produktów</h1>
        </div>
        <div class="col-6">
            <a class="float-right" href="{{ route('products.create') }}">
            <button class="btn btn-primary">Dodaj</button>
            </a>
        </div>
    </div>
    <div class="row">

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Opis</th>
            <th scope="col">Ilość</th>
            <th scope="col">Cena</th>
            <th scope="col">Akcje</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <button data-id="{{ $product->id }}" class="btn btn-danger btn-sm delete">X</button>
                    <a href="{{ route('products.edit',$product->id) }}">
                        <button class="btn btn-primary btn-sm delete">E</button>
                    
                    </a>
                    <a href="{{ route('products.show',$product->id) }}">
                        <button class="btn btn-success btn-sm ">P</button>
                    
                    </a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>

      {{ $products->links() }}

</div>

@endsection
@section('javascript')
<script>
  let deleteUrl = "{{ url('products') }}/";

</script>
@endsection
@section('javascriptFiles')
<script src="{{ asset('js/deleteUser.js') }}" ></script>

@endsection