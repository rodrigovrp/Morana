<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = true;
    protected $fillable = ['amount', 'created_at']; 
    
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}