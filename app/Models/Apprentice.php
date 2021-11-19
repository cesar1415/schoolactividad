<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    protected $table = 'apprentices';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'genero',
        'instructors_id'
    ];
    public function instructor(){
        return $this->belongsTo(Instructor::class, 'instructors_id');
    }
}
