@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">E-mail</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">nr tel</th>
            <th scope="col">Akcje</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->phone_number }}</td>
                <td><button data-id="{{ $user->id }}" class="btn btn-danger btn-sm delete">X</button></td>
              </tr>
            @endforeach
        </tbody>
      </table>
      {{ $users->links() }}

</div>

@endsection
@section('javascript')
<script>
  let deleteUrl = "{{ url('users') }}/";

</script>
@endsection
@section('javascriptFiles')
<script src="{{ asset('js/deleteUser.js') }}" ></script>

@endsection