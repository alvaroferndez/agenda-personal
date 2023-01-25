<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = "asignaturas";
    public $timestamps = false;

    protected $primaryKey = 'codAs';

    protected $fillable = ['codAs','nombreAs', 'nombreCortoAs', 'profesorAs', 'colorAs', 'user_id'];

    public function obtenerAsignaturas()
    {
        return Asignatura::all();
    }

    public function obtenerAsignaturaPorCodigo($codAs)
    {
        return Asignatura::find($codAs);
    }

    public function obtenerAsignaturaPorUsuario($id_usuario)
    {
        return Asignatura::where('user_id',$id_usuario)->get();
    }
}
