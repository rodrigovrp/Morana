<?php
namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Item;

class PedidosController extends BaseController
{
 
    public function __construct()
    {
        $this->classe = Pedido::class;
    }

    public function buscaPorItem(int $pedidoId)
    {
        
        $pedidos = Pedido::query()
            ->where('id', $pedidoId)
            ->get(['id', 'amount', 'created_at']);

        $items = item::query()->where('pedido_id', $pedidoId)->get(['id', 'produto_id', 'quantity', 'amount']);    
        
        $dados = array($pedidos, $items);
        
        return $dados;

    }

}
