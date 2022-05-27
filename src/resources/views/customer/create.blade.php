@extends('customer.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New customer</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('customer') }}"> Back</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" class="form-control" id="txtNombre" placeholder="Ingrese un nombre" name="txtNombre">
        </div>
        <div class="form-group">
            <label for="txtApellidos">Apellidos:</label>
            <input type="text" class="form-control" id="txtApellidos" placeholder="Ingrese los apellidos" name="txtApellidos">
        </div>
        <div class="form-group">
            <label for="txtEmail">Email:</label>
            <input type="text" class="form-control" id="txtEmail" placeholder="Ingrese un correo electronico" name="txtEmail">
        </div>
        <div class="form-group">
            <label for="txtDireccion">Direccion:</label>
            <input type="text" class="form-control" id="txtDireccion" placeholder="Ingrese una direccion" name="txtDireccion">
        </div>
        <button type="submit"  class="btn btn-primary">Submit</button>
    </form>
@endsection