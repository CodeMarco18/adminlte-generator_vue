<?php

namespace App\Http\Controllers;

use App\Models\Nota;

use Illuminate\Http\Request;

class ConsultaController extends Controller

{

public function index(Request $request)

{

return view('vuecliente.consulta');

}

}