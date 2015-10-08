<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VeterinarioController extends Controller
{
	/* Este tipo de controlador se crea con el comando de
	 * php artisan make:controller "NombreDelControlador"
	 *
	 * es un Controlador del tipo RESTFull que es un controlador con los metodos de
	 * Create, Update, Delete and Read
	 *
	 * en el metodo Index es donde se muestra una vista principal
	 *
	 * en el metodo Create se muestra como que el Formulario (se puede deprecar porque en el metodo index es suficiente
	 *
	 * en el metodo Store es donde se hará la logica de guardar los elementos a la base de datos
	 *
	 * en el metodo Show es donde se puede hacer una vista aparte pide como parametro el id, se podria decir que ahí
	 * se mostrara la información más detallada de algo
	 *
	 * En el metodo Edit, es lo mismo pide el Id y modifica
	 *
	 * En el metodo de Update, es lo mismo que el Edit
	 *
	 * En el metodo de Destroy, se hará la logica de eliminar el usuario
	 */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
		return view('backend.modules.veterinarios.manage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
