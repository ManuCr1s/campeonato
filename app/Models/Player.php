<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'players';
    protected $fillable = [
        'dni',
        'name',
        'lastname',
        'born',
        'photo',
        'id_users',
        'id_teams',
        'id_offices',
        'id_contracts'
    ];
}
