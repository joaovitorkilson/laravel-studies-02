<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class MainController extends Controller
{
    public function showPage(): View {
        // as linguas que cada pessoa fala
        $data = [
            'Carlos' => [
                'Português',
                'Inglês'
            ],
            'Mario' => [
                'Português'
            ],
            'João' => [
                'Português',
                'Inglês',
                'Francês'
            ],
        ];
        return view('home', ['pessoas_linguas' => $data]);
    }
}
