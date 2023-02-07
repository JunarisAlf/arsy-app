<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;
    protected $table = 'contractors';
    protected $guarded = ['id'];

    public function details(){
        return $this->hasMany(ContractorDetail::class, 'contractor_id', 'id');
    }

}
