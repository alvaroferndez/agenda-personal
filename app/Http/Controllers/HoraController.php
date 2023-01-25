<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hora;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HoraController extends Controller
{

    protected $asignatura;
    protected $horas;
    public function __construct(Hora $horas, Asignatura $asignatura)
    {
        $this->horas = $horas;
        $this->asignatura = $asignatura;
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horas = $this->horas->obtenerHoras();
        return view('horas.lista', ['horas' => $horas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_usuario = Auth::user()->id;
        return view('horas.crear', ['asignaturas' => $this->asignatura->obtenerAsignaturaPorUsuario($id_usuario)]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $horas = new Hora($request->all());
        $horas->save();
        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($diasH,$horaH)
    {
        $horas = $this->horas->obtenerHorasPorId($diasH,$horaH);
        return view('horas.ver', ['horas' => $horas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($diasH,$horaH)
    {
        $hora = $this->horas->obtenerhoraPorId($diasH,$horaH);
        return view('horas.editar', ['hora' => $hora]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$diasH,$horaH)
    {
        $hora = Hora::find($diasH,$horaH);
        $hora->fill($request->all());
        $hora->save();
        return redirect()->action([HoraController::class, 'index']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($diasH,$horaH)
    {
        DB::table('horas')->where('diasH', $diasH)->where('horaH', $horaH)->delete();
        return redirect()->action([HoraController::class, 'index']);
    }
}
