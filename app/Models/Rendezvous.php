<?php

namespace App\Models;
use App\Models\Docteurs;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory;
    protected $guarded = [
       
    ]; 

    function docteurs(){
        return $this->belongsTo(Docteurs::class, 'docteurs_id');
       }

}
