<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$solicitudes = Solicitud::orderBy('id', 'desc')->paginate(10);

		return view('admin.solicitudes.index', compact('solicitudes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.solicitudes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$solicitud = new Solicitud();

		

		$solicitud->save();

		return redirect()->route('admin.solicitudes.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$solicitud = Solicitud::findOrFail($id);

		return view('admin.solicitudes.show', compact('solicitud'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$solicitud = Solicitud::findOrFail($id);

		return view('admin.solicitudes.edit', compact('solicitud'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$solicitud = Solicitud::findOrFail($id);

		

		$solicitud->save();

		return redirect()->route('admin.solicitudes.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$solicitud = Solicitud::findOrFail($id);
		$solicitud->delete();

		return redirect()->route('admin.solicitudes.index')->with('message', 'Item deleted successfully.');
	}

}
