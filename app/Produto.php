<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = [ 'codigo', 'pagina', 'nome', 'valor' ];
}
