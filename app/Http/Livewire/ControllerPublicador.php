<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Publicador;
use App\Models\Territorio;
use App\Models\Grupo;
use Illuminate\Http\Request;

class ControllerPublicador extends Component
{

    public $publicador, $publicador_id, $nome, $telefone, $email, $morada, $recebido, $devolver, $territorio_id, $grupo_id, $t_id, $g_id, $tt_id, $gt_id;
    public $modal = false;
    public $view = 'show';
    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';

    protected $rules = [
        'nome' => 'required|string|max:255',
        'telefone' => 'required|max:11|min:11',
        'email' => 'required|string|email',
        'morada' => 'required|min:10|max:50',
        'recebido' => 'required|date',
        'devolver' => 'required|date|after:recebido',
        'territorio_id' => 'required',
        'grupo_id' => 'required'
    ];

    public function resetInputFields()
    {
        $this->nome = '';
        $this->telefone = '';
        $this->email = '';
        $this->morada = '';
        $this->recebido = '';
        $this->devolver = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function fecharModal()
    {
        $this->resetInputFields();
        $this->modal = false;
    }

    public function abrirModal($view)
    {
        $this->resetInputFields();
        $this->modal = true;
        return view("livewire.publicador.$view");
    }

    
    public function new()
    {
        $this->view ='create';
        $this->abrirModal($this->view);
        $this->publicador = Publicador::with('territorio', 'grupo')->latest()->get();
        //$this->grupo_id = Grupo::with('grupo:id')->get();  
        //$this->t_id = explode(',', $this->territorio_id);
        //$this->g_id = explode(',', $this->grupo_id);
        //$this->tt_id = preg_replace("/[^0-9]/", " ", $this->t_id); 
        //$this->gt_id = preg_replace("/[^0-9]/", " ", $this->g_id); 
    }

    public function render()
    {
        return view('livewire.publicador.show', [
           
            'publicadors' => Publicador::with('territorio', 'grupo')
            ->where('nome', 'like', '%'.$this->search.'%')
            ->latest()
            ->get(),
            //->paginate(10),
        ])->layout('layouts.app');
    }

    
    public function store(Request $request)
    {
            $request->territorio()->grupo()->publicador()->create($this->validate());
    
            session()->flash('message', 
            $this->publicador_id ? 
            'Publicador Actualizado com Sucesso!' : 'Publicador Cadastrado com Sucesso!');
            $this->resetInputFields();
            $this->fecharModal();
    }

    public function edit($id)
    {
        $publicador = Publicador::findOrFail($id);
        $this->publicador_id = $id;
        $this->nome = $publicador->nome;
        $this->telefone = $publicador->telefone;
        $this->email = $publicador->email;
        $this->morada = $publicador->morada;
        $this->recebido = $publicador->recebido;
        $this->devolver = $publicador->devolver;
        $this->territorio_id = $publicador->territorio_id;
        $this->grupo_id = $publicador->grupo_id;
        $this->modal = true;
        $this->view = 'edit';
    }

    public function delete($id)
    {
        Publicador::destroy($id);
        session()->flash('message', 'Publicador Apagado com Sucesso');
        $this->fecharModal();
    }

    public function deleteview($id)
    {
        $publicador = Publicador::findOrFail($id);
        $this->publicador_id = $publicador->id;
        $this->nome = $publicador->nome;
        $this->modal = true;
        $this->view = 'delete';
    }

    // Metodo que calcula a data de devoluação para 4 meses ou seja 120 dias depois da data escolhida do recebido
    public function calcularDataDevolucao()
    {
        $this->recebido = $this->devolver->day('120');

    }
}
