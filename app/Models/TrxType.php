<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxType extends Model
{
    use HasFactory;
    protected $table = 'trx_types';
    public function transactions(){
        return $this->hasMany(Transaction::class, 'type_id', 'id');
    }
}
