<!--BUTTON FECHAR MODAL-->
<div class="col">
    <button class="btn-close btn-outline" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<!--FORM-->
<form class="row g-3 mb-3" wire:submit.prevent="store">

            <div class="col-md-2">
            <label>Número</label>
            <input type="number" class="form-control form-control-sm" placeholder="Número do Território" wire:model="numero">
            @error('numero') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>
            
            <div class="col-md-4">
            <label>Tipo</label>
            <select class="form-control form-control-sm" wire:model="tipo">
            <option value="Pessoal">Pessoal</option>
            <option value="Grupo">Grupo</option>
            </select>
            @error('tipo') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
            <label>Anexo</label>
            <input type="file" class="form-control form-control-sm" wire:model="anexo">
            @error('anexo') <span class="text-danger error">{{ $message }}</span> @enderror
            @if ($anexo)
            <img class="img-thumbnail rounded mt-2" src="{{ $anexo->temporaryUrl() }}" width="250" height="250">
            @else
            <img class="img-thumbnail rounded mt-2 img-fluid" src="{{ URL::asset('img/card-image.svg') }}" width="90" height="90">
            <span class="badge bg-info text-dark mt-2">Nenhuma Imagem Carregada!</span>
            @endif

            <span class="badge rounded-pill bg-success text-dark mt-2" wire:loading wire:target="anexo">Fazendo Upload...</span>
            </div>

<!--DIV DOS BOTÕES-->
<div class="col-md-12 position-relative" wire:loading.attr="disabled" wire:target="store">
    <button class="btn btn-outline-success" type="submit">Salvar</button>
    <button class="btn btn-outline-warning" wire:click="new">Limpar Formulario</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->