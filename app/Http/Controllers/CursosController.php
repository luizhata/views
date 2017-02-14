<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    const CURSOS = array(
      'Lógica de programação', 'Desenvolvimento Web com PHP',
      'Algoritmos e estrutura de dados', 'Test Driven Development'
    );

    public function index() {
      return view('cursos.index', ['cursos' => SELF::CURSOS]);
    }

    public function show($index) {
      $curso = SELF::CURSOS[$index];
      return view('cursos.show', compact('curso'));
    }
}
