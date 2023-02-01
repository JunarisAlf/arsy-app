<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayawayDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function layaway(){
        return $this->belongsTo(Layaway::class, 'layaway_id', 'id');
    }
}
