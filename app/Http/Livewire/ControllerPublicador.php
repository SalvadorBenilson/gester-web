<?php

namespace App\Http\Livewire;

use App\Models\Grupo;
use Livewire\Component;
use App\Models\Publicador;
use App\Models\Territorio;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ControllerPublicador extends Component
{

    public $publicador, $publicador_id, $nome, $telefone, $email, $morada, $recebido, $devolver, $territorio_id, $grupo_id;
    public $modal = false;
    public $view = 'show';
    public $title = 'Lista de Publicador(s)';
    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';

    protected $rules = [
        'nome' => 'required|string|max:255',
        'telefone' => 'required|max:11|min:11',
        'email' => 'required|string|email',
        'morada' => 'required|min:10|max:50',
        'recebido' => 'required|date',
        'devolver' => 'required|date',
        'territorio_id' => 'required',
        'grupo_id' => 'required'
    ];

    private function resetInputFields()
    {
        $this->nome = '';
        $this->telefone = '';
        $this->email = '';
        $this->morada = '';
        $this->recebido = '';
        $this->devolver = '';
        $this->territorio_id = '';
        $this->grupo_id = '';
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
        $this->title = 'Lista de Publicadores';
    }

    public function abrirModal($view)
    {
        $this->resetInputFields();
        $this->modal = true;
        return view("livewire.publicador.$view");
    }

    
    public function render()
    {
            return view('livewire.publicador.create', [

            ])->layout('layouts.app');

            $this->resetInputFields();
            //$this->modal = true;
            //$this->view ='create';
            //$this->title = 'Adicionar Publicador';
            //$territorio_id = Territorio::find(1);
            //return $territorio_id->publicador->id;

            //$grupo_id = Grupo::find(1);
            //return $grupo_id->publicador->id;

            $this->territorio_id = DB::table('territorio')->pluck('id');
            $this->grupo_id = DB::table('grupo')->pluck('id');
    }

    public function renderUUU()
    {
        return view('livewire.publicador.show', [
           
            'publicadors' => Publicador::where('nome', 'like', '%'.$this->search.'%')->paginate(10)
        ])->layout('layouts.app');
    }

    
    public function store()
    {
            $this->validate();
    
            Publicador::updateOrCreate ([
            'id' => $this->publicador_id], 
            [
                'nome' => $this->nome,
                'telefone' => $this->telefone,
                'email' => $this->email,
                'morada' => $this->morada,
                'recebido' => $this->recebido,
                'devolver' => $this->devolver,
                'territorio_id' => $this->territorio_id,
                'grupo_id' => $this->grupo_id
            ]);
    
            session()->flash('message', 
            $this->publicador_id ? 
            'Publicador Actualizado com Sucesso!' : 'Publicador Cadastrado com Sucesso!');
            $this->resetInputFields();
            $this->fecharModal();
    }

    public function edit($id)
    {
        $publicador = Publicador::findOrFail($id);

        $this->id = $id;
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
        $this->title = 'Editar Publicador';
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
        $this->title = 'Apagar Publicador';
    }
}
