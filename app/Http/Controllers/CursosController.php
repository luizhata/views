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
      $cursos = SELF::CURSOS;
      return view('cursos.index', compact('cursos'));
    }

    public function show($index) {
      $curso = SELF::CURSOS[$index];
      return view('cursos.show', compact('curso'));
    }
}
