<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Territorio;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use illuminate\Auth\Access\Responde;
use illuminate\Support\Facades\Gate;

class ControllerTerritorio extends Component
{
    /*Gate::define('delete', function(User $user) {
        return $user->isAdmin
        ? Response::allow()
        : session()->flash('message', 'Você deve ser um Administrador.');
    });*/ 

    public $territorio, $territorio_id, $numero, $tipo, $anexo;
    public $modal = false;
    public $view = 'new';
    public $title = 'Lista de Território(s)';
    
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';

    protected $rules = [
        'numero' => 'required',
        'tipo' => 'required',
        'anexo' => 'required',
    ];

    public function resetInputFields()
    {
        $this->numero = '';
        $this->tipo = '';
        $this->anexo = '';
    }

    public function updatedPhoto()
    {
        $this->validate([
            'anexo' => 'image|max:2024',
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function fecharModal()
    {
        $this->modal = false;
        $this->title = 'Lista de Território(s)';
    }

    public function abrirModal($view)
    {
        $this->modal = true;
        return view("livewire.territorio.$view");
    }

    
    public function new()
    {
            $this->resetInputFields();
            $this->modal = true;
            $this->view ='create';
            $this->title = 'Adicionar Território';
    }

    public function render(User $user)
    {
        return view('livewire.territorio.show', [
           
            'territorios' => Territorio::where('numero', 'like', '%'.$this->search.'%')
            ->paginate(10)
        ], ['users' => $user])->layout('layouts.app');
    }

    
    public function store()
    {
        $this->validate();

        if($this->territorio_id)
        {
        Territorio::updateOrCreate ([
        'id' => $this->territorio_id],
        [
            'numero' => $this->numero,
            'tipo' => $this->tipo,
        ]);
        }else{
        Territorio::updateOrCreate ([
        'id' => $this->territorio_id],
        [
        'numero' => $this->numero,
        'tipo' => $this->tipo,
        'anexo' => $this->anexo->store('public/anexos'),
        ]); 
        }

        session()->flash('message', 
        $this->territorio_id ? 
        'Território Actualizado com Sucesso!' : 'Território Cadastrado com Sucesso!');
        $this->resetInputFields();
        $this->fecharModal();
    }

    public function edit($id)
    {
        $territorio = Territorio::findOrFail($id);
        $this->territorio_id = $id;
        $this->numero = $territorio->numero;
        $this->tipo = $territorio->tipo;
        $this->anexo = $territorio->anexo;
        $this->modal = true;
        $this->view = 'edit';
        $this->title = 'Editar Território';
    }

    public function delete($id)
    {
        Territorio::destroy($id); 
        session()->flash('message', 'Território Apagado com Sucesso'); 
        $this->fecharModal();
    }

    public function deleteview($id)
    {
        $territorio = Territorio::findOrFail($id);
        //dd($id);
        $this->territorio_id = $territorio->id;
        $this->numero = $territorio->numero;
        $this->modal = true;
        $this->view = 'delete';
    }

    public function anexo($id)
    {   
        $territorio = Territorio::findOrFail($id);

        return Storage::url($territorio->anexo);
    }

    public function download($id)
    {   
        $territorio = Territorio::findOrFail($id);

        return Storage::download($territorio->anexo);
    }
}
