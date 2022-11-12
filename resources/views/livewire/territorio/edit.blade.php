<!--FORM-->
<form class="row g-2 mb-5" wire:loading.attr="disabled">

<!--BUTTON FECHAR MODAL-->
<div class="col-md-12">
    <button class="btn-close" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<div class="col-md-6">
<label>Número</label>
<input type="number" class="form-control form-control-sm" placeholder="Número do Território" wire:model="numero">
@error('numero') <span class="text-danger error">{{ $message }}</span> @enderror
</div>
            
<div class="col-md-6">
<label>Tipo</label>
<select class="form-control form-control-sm" wire:model="tipo">
<option value="Pessoal">Pessoal</option>
<option value="Grupo">Grupo</option>
</select>
@error('tipo') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<!--<div class="col-md-6">
<label>Anexo</label>
<input type="file" class="form-control form-control-sm" wire:model="anexo">
@error('anexo') <span class="text-danger error">{{ $message }}</span> @enderror
</div>
-->

@if ($anexo)
<div class="col-md-6">
<img class="img-thumbnail" src="{{ Storage::url($anexo) }}" width="200" height="200">
</div>
@else
<div class="col-md-6">
<img class="img-thumbnail mt-1" src="{{ URL::asset('img/card-image.svg') }}" width="50" height="50">
<span class="badge bg-info text-dark">Nenhuma Imagem Carregada!</span>
<span class="badge rounded-pill bg-success text-white" wire:loading wire:target="anexo">Fazendo Upload...</span>
</div>
@endif

<!--DIV DOS BOTÕES-->
<div class="btn-group mt-5">
    <button class="btn btn-success col-md-8 text-white"  wire:click="store( {{ $territorio_id }} )">Salvar</button>
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->
