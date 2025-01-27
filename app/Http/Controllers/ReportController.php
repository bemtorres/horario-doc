<?php

namespace App\Http\Controllers;

use App\Models\GP\Team;
use App\Models\GP\Usuario;
use App\Services\Policies\UsuarioPolicy;
use Illuminate\Http\Request;

class ReportController extends Controller
{

  private $policy;

  public function __construct() {
    $this->policy = new UsuarioPolicy();
  }

  public function index() {
    $reports = [];

    return view('report.index', compact('reports'));
  }

  // public function create() {
  //   $this->policy->admin(current_user());
  //   $usuarios = Usuario::get();

  //   return view('team.create', compact('usuarios'));
  // }

  // public function store(Request $request) {
  //   $t = new Team();
  //   $t->nombre = $request->input('nombre');
  //   $t->descripcion = $request->input('descripcion');
  //   $t->id_lider = $request->input('lider');
  //   $t->save();

  //   return redirect()->route('admin.team.index')->with('success','Se ha creado correctamente');
  // }
}
