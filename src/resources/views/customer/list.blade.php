@extends('customer.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 9 CRUD Example</h2>
        </div>
        <div class="col-lg-1 ">
            <a class="btn btn-success" href="{{ route('customer.create') }}">Add</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Numero</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Codigo Postal</th>
            <th>Pais</th>
            <th>Municipio</th>
            <th>Titular</th>
            <th>Numero Tarjeta</th>
            <th>Mes Tarjeta</th>
            <th>Año Tarjeta</th>
            <th>CVV</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($customers as $customer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $customer->nombre }}</td>
                <td>{{ $customer->apellidos }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->numero }}</td>
                <td>{{ $customer->direccion }}</td>
                <td>{{ $customer->ciudad }}</td>
                <td>{{ $customer->codigopostal }}</td>
                <td>{{ $customer->pais }}</td>
                <td>{{ $customer->municipio }}</td>
                <td>{{ $customer->titular_tarjeta }}</td>
                <td>{{ $customer->numero_tarjeta }}</td>
                <td>{{ $customer->mes_expiracion_tarjeta }}</td>
                <td>{{ $customer->anho_expiracion_tarjeta }}</td>
                <td>{{ $customer->cvv }}</td>
                <td>
                    <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('customer.show',$customer->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('customer.edit',$customer->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection