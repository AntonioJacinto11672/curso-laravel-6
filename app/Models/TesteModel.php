<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesteModel extends Model
{
    use HasFactory;
    private $filable = ['id', 'name'];
}
