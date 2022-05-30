<!--BUTTON FECHAR MODAL-->
<div class="col">
    <button class="btn-close" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<!--FORM-->
<form class="row g-2 mb-5" wire:submit.prevent="store" wire:loading.attr="disabled">

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

<div class="col-md-6 mt-5">
<label>Anexo</label>
<input type="file" class="form-control form-control-sm" wire:model.lazy="anexo">
@error('anexo') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
@if ($anexo)
<img class="img-thumbnail img-fluid" src="{{ $anexo->temporaryUrl() }}" width="250" height="250">
@else
<img class="img-thumbnail  img-fluid" src="{{ URL::asset('img/card-image.svg') }}" width="90" height="90">
<span class="badge bg-info text-dark">Nenhuma Imagem Carregada!</span>
@endif
<span class="badge rounded-pill bg-success text-dark" wire:loading wire:target="anexo">Fazendo Upload...</span>
</div>

<!--DIV DOS BOTÕES-->
<div class="btn-group mt-3">
    <button class="btn btn-success col-md-8 text-dark" type="submit">Salvar</button>
    <button class="btn btn-warning col-md-4 text-dark" wire:click.prevent="resetInputFields">Limpar Formulario</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->
