<!--BUTTON FECHAR MODAL-->
<div class="col-md-12">
    <button class="btn-close" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<!--FORM-->
<form class="row g-3 mb-5" wire:submit.prevent="store({{ $territorio_id }})" wire:loading.attr="disabled">

<div class="col-md-6">
<label>Número</label>
<input type="number" class="form-control form-control-sm" placeholder="Número do Território" wire:model.lazy="numero">
@error('numero') <span class="text-danger error">{{ $message }}</span> @enderror
</div>
            
<div class="col-md-6">
<label>Tipo</label>
<select class="form-control form-control-sm" wire:model.lazy="tipo">
<option value="Pessoal">Pessoal</option>
<option value="Grupo">Grupo</option>
@error('tipo') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<!--DIV DOS BOTÕES-->
<div class="btn-group mt-3">
    <button class="btn btn-success col-md-8 text-dark" type="submit">Salvar</button>
    <button class="btn btn-warning col-md-4 text-dark" wire:click.prevent="fecharModal">Cancelar</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->
