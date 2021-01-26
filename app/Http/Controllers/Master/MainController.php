<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function __construct()
    {
        //
    }

    public function BM_index()
    {
        return view('BM.master.index');
    }

    /**
     * Listado de usuarios
     */
    public function BM_usersList(Request $request)
    {
        // Variables de la llamada
        $per_page = (null === $request->per_page) ? 10 : $request->per_page; // Resultados por página
        $field = (null === $request->field) ? 'username' : $request->field; // Campo de ordenación
        $ord = (null === $request->ord) ? 'ASC' : $request->ord; // Sentido de ordenación
        $search = (null === $request->search) ? '' : $request->search; // Contenido a buscar (en todo el registro, no en un solo campo)
        $currentScope = auth()->user()->scope;

        $query = DB::table('users');
        if ($currentScope == 'U') {
            $query->where('scope', 'U');
        } elseif ($currentScope == 'A') {
            $query->where('scope', '<>', 'M');
        }
        $query->where(function($query) use($search)
        {
            $query->where('first_name', 'like', '%'.$search.'%');
            $query->orWhere('surname', 'like', '%'.$search.'%');
            $query->orWhere('username', 'like', '%'.$search.'%');
            $query->orWhere('email', 'like', '%'.$search.'%');
            $query->orWhere('country_code', 'like', '%'.$search.'%');
            $query->orWhere('phone_number', 'like', '%'.$search.'%');
        });
        $query->orderBy($field, $ord);
        $usersList = $query->paginate($per_page);

        return view('BM.users.users_list', compact('usersList', 'per_page', 'field', 'ord', 'search'));
    }
}
