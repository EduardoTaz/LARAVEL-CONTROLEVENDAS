<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;
use App\Models\Produto;
class PedidoProduto extends Model
{
    use HasFactory;
    protected $table = "pedido_produtos";
}
