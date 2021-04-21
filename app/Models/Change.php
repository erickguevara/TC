<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Change extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $fillable = ['tc_venta','tc_compra'];
    protected $table = "change";
}
