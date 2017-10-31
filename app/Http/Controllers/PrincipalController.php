<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function abrirHome() {
        return view('site.index');
    }

    public function abrirSobre() {
        return view('site.about');
    }

    public function abrirServicos() {
        return view('site.services');
    }

    public function abrirLocalizacao() {
        return view('site.location');
    }

    public function abrirAgendarConsulta() {
        return view('site.schedule');
    }

    public function abrirMaisInformacoes() {
        return view('site.overview');
    }
}
