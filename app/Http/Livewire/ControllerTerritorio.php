<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Territorio;

class ControllerTerritorio extends Component
{
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
    ];

    private function resetInputFields()
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

    public function render()
    {
        return view('livewire.territorio.show', [
           
            'territorios' => Territorio::where('numero', 'like', '%'.$this->search.'%')->paginate(10)
        ])->layout('layouts.app');
    }

    
    public function store()
    {
        $this->validate();
    
        Territorio::updateOrCreate ([
        'id' => $this->territorio_id],
        [
            'numero' => $this->numero,
            'tipo' => $this->tipo,
            'anexo' => $this->anexo->store('public/anexos'),
        ]);

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

        $this->territorio_id = $territorio->id;
        $this->numero = $territorio->numero;
        $this->modal = true;
        $this->view = 'delete';
        $this->title = 'Apagar Territorio';
    }
}
