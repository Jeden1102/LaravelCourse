@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Podgląd</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" disabled type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">opis</label>

                            <div class="col-md-6">
                                <textarea id="description" disabled type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description }}" required autocomplete="surname">{{ $product->description }}</textarea>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">Ilość</label>

                            <div class="col-md-6">
                                <input id="amount" disabled type="number" min=0 class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ $product->amount  }}" required autocomplete="surname">

 
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Cena</label>

                            <div class="col-md-6">
                                <input id="price" disabled step="0.01" min=0  type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price  }}" required autocomplete="surname">


                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
