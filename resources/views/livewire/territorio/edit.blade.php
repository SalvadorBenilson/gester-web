<div>

<!--DIV DO CONTEUDO-->
<div class="container-fluid mt-3 mb-5">

<!--FORM-->
<form class="row g-3">


<input type="hidden" placeholder="ID" wire:model="territorio_id" readonly>

<div class="col-md-4">
            <label>Número</label>
            <input type="number" class="form-control" placeholder="Número do Território" wire:model="numero">
            @error('numero') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>
            
            <div class="col-md-8">
            <label>Tipo</label>
            <select class="form-control" wire:model="tipo">
            <option value="Pessoal">Pessoal</option>
            <option value="Grupo">Grupo</option>
            </select>
            @error('tipo') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

<!--DIV DOS BOTÕES-->
<div class="col-md-12">
    <button class="btn btn-outline-success" type="submit" wire:click.prevent="store({{ $territorio_id }})">Salvar</button>
    <button class="btn btn-outline-warning" wire:click="resetImput">Limpar Formulario</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->

</div>
<!--FIM DA DIV DO CONTEUDO-->

</div>