<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Ticket extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'description',
        'image',
        'user_id',
    ];
     public function ticket()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    
}
