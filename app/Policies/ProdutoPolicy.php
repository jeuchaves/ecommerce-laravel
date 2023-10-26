<?php

namespace App\Policies;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Se o usuário autenticado é o mesmo que cadastrou o produto
    public function verProduto(User $user, Produto $produto) {
        return $user->id === $produto->id_user;
    }
}
