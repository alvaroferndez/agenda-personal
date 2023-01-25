<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Hora extends Model
{
    use HasFactory;

    protected $table = "horas";
    public $timestamps = false;
    public $incrementing = false;

    protected $primaryKey = ['diasH', 'horaH'];

    protected $fillable = ['diasH','horaH', 'cod_as'];

    public function obtenerHoras()
    {
        $sql = 'select horas.diasH, horas.horaH, asignaturas.nombreAs FROM horas,asignaturas,users WHERE horas.cod_as = asignaturas.codAs and asignaturas.user_id = users.id AND users.id = '.Auth::user()->id.' ;';
        return DB::select($sql);
    }

    public function obtenerHorasPorId($diasH,$horaH)
    {
        return Hora::find($diasH,$horaH);
    }
}
