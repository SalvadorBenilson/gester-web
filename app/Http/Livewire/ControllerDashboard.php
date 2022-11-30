<?php

namespace App\Http\Livewire;

use App\Models\Publicador;
use App\Models\Grupo;
use App\Models\Territorio;

use Livewire\Component;

class ControllerDashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard', [
            'publicadors' => Publicador::count(),
            'grupo' => Grupo::count(),
            'territorio' => Territorio::count(),
            'devolver' => Publicador::where('devolver', '>', now())->count()

        ])->layout('layouts.app');
    }
}
