<?php

namespace App\Http\Controllers;

use App\Encryption;
use App\Models\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer.list', compact('customers','customers'));
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->fill([
            'nombre' => $request->get('txtNombre'),
            'apellidos'=> $request->get('txtApellidos'),
            'email'=> $request->get('txtEmail'),
            'numero'=> $request->get('txtNumero'),
            'direccion' => $request->get('txtDireccion'),
            'ciudad'=> $request->get('txtCiudad'),
            'codigopostal'=> $request->get('txtCodigoPostal'),
            'pais' => $request->get('txtPais'),
            'municipio'=> $request->get('txtMunicipio'),
            'titular_tarjeta'=> $request->get('txtTitularT'),
            'numero_tarjeta' => Crypt::encrypt($request->txtNumeroT),
            'mes_expiracion_tarjeta'=> $request->get('txtMesExpiracionT'),
            'anho_expiracion_tarjeta'=> $request->get('txtAnhoExpiracionT'),
            'cvv'=> $request->get('txtCvvT')
        ]);
 
        

        $customer->save();
        return redirect('/')->with('success', 'Customer has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.view',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtNombre'=>'required',
            'txtApellidos'=> 'required',
            'txtEmail' => 'required',
            'txtNumero' => 'required',
            'txtDireccion'=>'required',
            'txtCiudad'=> 'required',
            'txtCodigoPostal' => 'required',
            'txtPais' => 'required',
            'txtMunicipio'=>'required',
            'txtTitularT'=> 'required',
            'txtNumeroT'=> 'required',
            'txtMesExpiracionT'=> 'required',
            'txtAnhoExpiracionT'=> 'required',
            'txtCvvT'=> 'required'
        ]);
 
 
        $customer = Customer::find($id);
        $customer->nombre = $request->get('txtNombre');
        $customer->apellidos = $request->get('txtApellidos');
        $customer->email = $request->get('txtEmail');
        $customer->numero = $request->get('txtNumero');
        $customer->direccion = $request->get('txtDireccion');
        $customer->ciudad = $request->get('txtCiudad');
        $customer->codigopostal = $request->get('txtCodigoPostal');
        $customer->pais = $request->get('txtPais');
        $customer->municipio = $request->get('txtMunicipio');
        $customer->titular_tarjeta = $request->get('txtTitularT');
        $customer->numero_tarjeta = Hash::make($request->get['txtNumeroT']);
        $customer->mes_expiracion_tarjeta = $request->get('txtMesExpiracionT');
        $customer->anho_expiracion_tarjeta = $request->get('txtAnhoExpiracionT');
        $customer->cvv = Hash::make($request->get['txtCvvT']);
 
        $customer->update();
 
        return redirect('/customer')->with('success', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customer')->with('success', 'Customer deleted successfully');
    }
}
