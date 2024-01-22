<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey = "id_pedido";
    protected $fillable = ['NumeroPedido', 'StatusPedido', 'Dtpedido', 'Quantidade', 'id_produto',
    'id_client'];
}
