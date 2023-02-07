<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractorDetail extends Model
{
    use HasFactory;
    protected $table = 'contractor_details';
    protected $guarded = ['id'];
    public function contractor(){
        return $this->belongsTo(Contractor::class, 'contractor_id', 'id');
    }
}
