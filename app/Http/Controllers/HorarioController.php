<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'select asignaturas.colorAs, asignaturas.nombreAs, horas.diasH, horas.horaH from users, asignaturas, horas where horas.cod_as = asignaturas.codAs AND asignaturas.user_id = users.id AND asignaturas.user_id = '.Auth::user()->id.' order by horas.horaH,horas.diasH;';
        $horario = DB::select($sql);
        return view('horario', ['horario' => $horario]);
    }
}
