<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layaway extends Model
{
    use HasFactory;
    protected $table = 'layaways';
    protected $guarded = [];
    public function details(){
        return $this->hasMany(LayawayDetail::class, 'layaway_id', 'id');
    }

}
