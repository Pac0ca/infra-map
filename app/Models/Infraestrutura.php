<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraestrutura extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'latitude', 'longitude', 'descricao'];

    // Relacionamento com o usuário que cadastrou
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
