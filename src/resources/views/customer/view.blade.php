@extends('customer.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 9 CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('customer') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nombre:</th>
            <td>{{ $customer->nombre }}</td>
        </tr>
        <tr>
            <th>Apellidos:</th>
            <td>{{ $customer->apellidos }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <th>Direccion:</th>
            <td>{{ $customer->direccion }}</td>
        </tr>
 
    </table>
@endsection