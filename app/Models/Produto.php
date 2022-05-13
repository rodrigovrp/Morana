<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = true;
    protected $fillable = ['name', 'price', 'created_at'];
   
    
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
