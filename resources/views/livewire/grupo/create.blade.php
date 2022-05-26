<!--BUTTON FECHAR MODAL-->
<div class="col">
    <button class="btn-close btn-outline" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<!--FORM-->
<form class="row g-3 mb-5" wire:submit.prevent="store">

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
                <option>{{ $lista }}</option>    
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
            <input x-mask="999-999-999" type="tel" class="form-control" placeholder="Telefone" wire:model="tel_sup">
            @error('tel_sup') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
            <label>Nome do Ajudante</label>
            <input type="text" class="form-control" placeholder="Nome" wire:model="aju">
            @error('aju') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
            <label>Telefone do Ajudante</label>
            <input x-mask="999-999-999" type="tel" class="form-control" placeholder="Telefone" wire:model="tel_aju">
            @error('tel_aju') <span class="text-danger error">{{ $message }}</span> @enderror
            </div>

<!--DIV DOS BOTÕES-->
<div class="col-md-12 mb-5">
    <button type="submit" class="btn btn-outline-success">Salvar</button>
    <button class="btn btn-outline-info" wire:click="resetImput">Limpar Formulario</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->