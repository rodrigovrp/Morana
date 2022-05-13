<?php
namespace App\Http\Controllers;

use App\Models\Produto;

class ProdutosController extends BaseController
{

    public function __construct()
    {
        $this->classe = Produto::class;
    }

}
