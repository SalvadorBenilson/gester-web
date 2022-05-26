<!--DIV DO CONTEUDO-->
<div class="container-fluid">

<!--FORM-->
<form class="row g-3">

<div class="col-md-4">
            <label>Número</label>
            <input type="number" class="form-control" placeholder="Número do Território" wire:model="numero" readonly>
            @error('numero') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>
            
            <div class="col-md-8">
            <label>Tipo</label>
            <select class="form-control" wire:model="tipo" readonly>
            <option value="Pessoal" selected>Pessoal</option>
            <option value="Grupo">Grupo</option>
            </select>
            @error('tipo') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-8">
            <label>Anexo</label>
            <input type="file" class="form-control" wire:model="anexo">
            @error('anexo') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-4">
            <label>Vizualização do Território</label>
            @if ($anexo)
            <img class="img-thumbnail rounded float-start" src="{{ $anexo->Url() }}" width="350" height="350">
            @else
            <p class="text">Nenhuma Imagem Carregada!</p>
            @endif

            <div class="col-md-4" wire:loading wire:target="anexo">Fazendo Upload...</div>
            </div>

<!--DIV DOS BOTÕES-->
<div class="col-md-12 mb-5">
    <button class="btn btn-outline-success" wire:click.prevent="store()">Salvar</button>
    <button class="btn btn-outline-info" wire:click="resetImput()">Limpar</button>
    <button class="btn btn-outline-danger" wire:click="cancel()">Cancelar</button>            
</div>
<!--FIM DA DIV DOS BOTÕES-->


</form>
<!--FIM DO FORM-->


</div>
<!--FIM DA DIV DO CONTEUDO-->