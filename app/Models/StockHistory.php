<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockHistory extends Model
{
    use HasFactory;
    protected $table = 'stock_histories';
    protected $fillable = ['stock_id', 'alocate_to', 'action', 'quantity', 'note'];

    public function stock(){
        return $this->belongsTo(Stock::class, 'stock_id', 'id');
    }
    public function project(){
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
