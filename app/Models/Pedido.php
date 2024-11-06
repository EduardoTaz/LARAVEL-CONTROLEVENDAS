<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class Pedido extends Model
{
    use HasFactory;

    public function user()
    {
        /* cada pedido pertence a um único usuário, o pedido só terá um único User, permitindo acessar
        o usuário diretamente com $pedido->user->name sem precisar de um foreach */
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function items()
    {
        /* aqui estamos falando que um pedido tem muitos produtos e ai ele usa a tabela 
        intermediaria. $pedido->items retorna uma coleção (ou array) de produtos, necessitando
        de um foreach para acessar o nome de cada produto individualmente. */
        return $this->belongsToMany(Produto::class, 'pedido_produtos')->withPivot('quantidade', 'created_at');
    }

    public function calculateTotal()
    {
        return $this->items->sum(function ($item) {
            return $item->pivot->quantidade * $item->preco;
        });
    }
}
