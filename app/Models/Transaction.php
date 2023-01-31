<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transcations';
    protected $guarded = ['id'];
    public function type(){
        return $this->belongsTo(TrxType::class, 'type_id', 'id');
    }
    public function category(){
        return $this->belongsTo(ItemCategory::class, 'category_id', 'id');
    }
    public function stock(){
        return $this->belongsTo(Stock::class, 'stock_id', 'id');
    }
    public function project(){
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
