<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {

        $usuarios = User::all()->count();

        // gráfico 1 - usuarios
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])->groupBy('ano')->orderBy('ano', 'asc')->get();

        // preparar arrays
        foreach($usersData as $user) {
            $ano[] = $user->ano;
            $total[] = $user->total;
        }

        // formatar para o chart.js
        $userLabel = "'Comparativo de cadastro de usuários'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal'));
    }
}
