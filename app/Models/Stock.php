<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    public function category(){
        return $this->belongsTo(ItemCategory::class, 'category_id', 'id');
    }
    public function histories(){
        return $this->hasMany(StockHistory::class, 'stock_id', 'id');
    }
    public function transactions(){
        return $this->hasMany(Transaction::class, 'stock_id', 'id');
    }
}
