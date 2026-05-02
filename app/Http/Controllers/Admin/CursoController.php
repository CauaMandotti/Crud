<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Curso;

class CursoController extends Controller
{
    public function index() {
    $rows = Curso::all();
    return view('admin.cursos.index', compact('rows'));
}
}
