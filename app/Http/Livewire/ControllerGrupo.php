<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grupo;
use App\Models\Territorio;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class ControllerGrupo extends Component
{
    public $grupo, $grupo_id, $numero, $quant_pub, $sup, $aju, $tel_sup, $tel_aju, $territorio_id, $t_id, $tt_id;
    public $modal = false;
    public $view = 'show';
    public $title = 'Lista de Grupo(s)';
    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';

    protected $rules = [
        'numero' => 'required|max:2',
        'quant_pub' => 'required|max:2',
        'sup' => 'required|string|max:255',
        'aju' => 'required|string|max:255',
        'tel_sup' => 'required|max:11|min:11',
        'tel_aju' => 'required|max:11|min:11',
        'territorio_id' => 'required'
    ];

    public function resetInputFields()
    {
        $this->numero = '';
        $this->quant_pub = '';
        $this->sup = '';
        $this->aju = '';
        $this->tel_sup = '';
        $this->tel_aju = '';
        $this->territorio_id = '';
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
        $this->title = 'Lista de Grupo(s)';
    }

    public function abrirModal($view)
    {
        $this->resetInputFields();
        $this->modal = true;
        return view("livewire.grupo.$view");
    }

    
    public function new()
    {
            $this->resetInputFields();
            $this->modal = true;
            $this->view ='create';
            $this->title = 'Adicionar Grupo';
            $this->territorio_id = Territorio::pluck('id'); 
            $this->t_id = explode(',', $this->territorio_id);
            $this->tt_id = preg_replace('/[^0-9]/', ' ', $this->t_id); 
    }

    public function render()
    {
        return view('livewire.grupo.show', [
           
            'grupos' => Grupo::where('numero', 'like', '%'.$this->search.'%')->paginate(10)
        ])->layout('layouts.app');
    }

    
    public function store()
    {
            $this->validate();
    
            Grupo::updateOrCreate ([
            'id' => $this->grupo_id], 
            [
                'numero' => $this->numero,
                'quant_pub' => $this->quant_pub,
                'sup' => $this->sup,
                'aju' => $this->aju,
                'tel_sup' => $this->tel_sup,
                'tel_aju' => $this->tel_aju,
                'territorio_id' => $this->territorio_id
            ]);
    
            session()->flash('message', 
            $this->grupo_id ? 
            'Grupo Actualizado com Sucesso!' : 'Grupo Cadastrado com Sucesso!');
            $this->resetInputFields();
            $this->fecharModal();
    }

    public function edit($id)
    {
        $grupo = Grupo::findOrFail($id);

        
        $this->id = $id;
        $this->numero = $grupo->numero;
        $this->quant_pub = $grupo->quant_pub;
        $this->sup = $grupo->sup;
        $this->aju = $grupo->aju;
        $this->tel_sup = $grupo->tel_sup;
        $this->tel_aju = $grupo->tel_aju;
        $this->territorio_id = $grupo->territorio_id;
        $this->modal = true;
        $this->view = 'edit';
        $this->title = 'Editar Grupo';
    }

    public function delete($id)
    {
        Grupo::destroy($id);
        session()->flash('message', 'Grupo Apagado com Sucesso');
        $this->fecharModal();
    }

    public function deleteview($id)
    {
        $grupo = Grupo::findOrFail($id);

        $this->grupo_id = $grupo->id;
        $this->numero = $grupo->numero;
        $this->modal = true;
        $this->view = 'delete';
    }
}
