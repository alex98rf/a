@extends('customer.layouts.app')

@section('content')
   <div class="row">
       <div class="col-lg-11">
           <h2>Update customer</h2>
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
   <form method="post" action="{{ route('customer.update',$customer->id) }}" >
       @method('PATCH')
       @csrf
        <div class="form-group">
           <label for="txtNombre">Nombre:</label>
           <input type="text" class="form-control" id="txtNombre" placeholder="Ingrese un nombre" name="txtNombre" value="{{ $customer->nombre }}">
        </div>
        <div class="form-group">
           <label for="txtApellidos">Apellidos:</label>
           <input type="text" class="form-control" id="txtApellidos" placeholder="Ingrese los apellidos" name="txtApellidos" value="{{ $customer->apellidos }}">
        </div>
        <div class="form-group">
           <label for="txtEmail">Email:</label>
           <input type="text" class="form-control" id="txtEmail" placeholder="Ingrese un correo electronico" name="txtEmail" value="{{ $customer->email }}">
        </div>
        <div class="form-group">
            <label for="txtDireccion">Direccion:</label>
            <input type="text" class="form-control" id="txtDireccion" placeholder="Ingrese una direccion" name="txtDireccion" value="{{ $customer->direccion }}">
        </div>
       <button type="submit" class="btn btn-default">Submit</button>
   </form>
@endsection
