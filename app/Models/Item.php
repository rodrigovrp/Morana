<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = true;
    protected $fillable = ['pedido_id', 'produto_id', 'quantity', 'amount', 'created_at'];
       
    public function pedidos()
    {
        return $this->belongsTo(Pedido::class);
    }
}