<!--BUTTON FECHAR MODAL-->
<div class="col">
    <button class="btn-close btn-outline" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<!--FORM-->
<form class="row g-3" wire:submit.prevent="store">

<input type="hidden" placeholder="ID" wire:model="grupo_id" readonly>

<div class="col-md-4">
            <label>Número do Grupo</label>
            <input type="number" class="form-control" placeholder="Número do Grupo" wire:model="numero">
            @error('numero') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-4">
            <label>Quantidade de Publicadores</label>
            <input type="number" class="form-control" placeholder="Quantidadde de Publicadores" wire:model="quant_pub">
            @error('quant_pub') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-4">
            <label>Territorio Nº</label>
            <select class="form-control" wire:model="territorio_id">
              @foreach($territorio_id as $lista)        
                <option>{{ $lista->id }}</option>    
              @endforeach  
            </select>
            @error('territorio_id') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
            <label>Nome do Superintendente</label>
            <input type="text" class="form-control" placeholder="Nome" wire:model="sup">
            @error('sup') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
            <label>Telefone do Superintendente</label>
            <input type="tel" class="form-control" placeholder="Telefone" wire:model="n_sup">
            @error('n_sup') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
            <label>Nome do Ajudante</label>
            <input type="text" class="form-control" placeholder="Nome" wire:model="aju">
            @error('n_aju') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
            <label>Telefone do Ajudante</label>
            <input type="tel" class="form-control" placeholder="Telefone" wire:model="n_aju">
            @error('n_aju') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

<!--DIV DOS BOTÕES-->
<div class="col-md-12 mb-5">
    <button type="submit" class="btn btn-outline-success">Salvar</button>
    <button class="btn btn-outline-info" wire:click="resetImput">Limpar Formulario</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->