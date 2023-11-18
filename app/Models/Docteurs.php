<?php

namespace App\Models;
use App\Models\Rendezvous;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Docteurs extends Model
{
    use HasFactory;
    protected $guarded = [
       
    ];
    
    function rendezvous(){
        return $this->hasOne(Rendezvous::class);
       }
}
