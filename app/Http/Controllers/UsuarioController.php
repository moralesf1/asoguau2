<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$usuarios = User::paginate(10);

		return view('backend.modules.usuarios.manage.index', compact('usuarios'));
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
		/* Este if de aqui se encadena al metodo de isValid dsde el modelo de User */

		if(!User::isValid(Input::all()))
		{
			return Redirect::back()->withInput()->withErrors(User::$messages);
		}

		User::create(Input::all());

		return Redirect::route('usuarios.index')->with('succes', true);
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
		$edit = User::find($id);
		$usuarios = User::paginate(10);

		return view('backend.modules.usuarios.manage.index', compact('edit', 'usuarios'));
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
		User::find($id)->update(Input::all());

		return Redirect::route('usuarios.index')->with('success', true);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		/**
		 * HardDeletes
		 *
		 * User::find($id)->delete();
		 */
		return Redirect::route('usuarios.index')->with('delete', true);
	}

	public function backend()
	{
		return view('backend.index');
	}

	public function inactivos()
	{
		$inactivos = User::onlyTrashed()->paginate();

		return view('backend.modules.usuarios.status.inactivos', compact('inactivos'));
	}

	public function activos($id)
	{
		User::withTrashed()->find($id)->restore();

		return Redirect::route('usuarios.index');
	}
}
