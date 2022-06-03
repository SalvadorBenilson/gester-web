<!--FORM-->
<form class="row g-2 mb-5" wire:submit.prevent="store" wire:loading.attr="disabled">

<!--BUTTON FECHAR MODAL-->
<div class="col-md-12">
    <button class="btn-close" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<div class="col-md-4">
<label>Número do Grupo</label>
<input x-mask="99" type="text" class="form-control form-control-sm" placeholder="Número do Grupo" wire:model.lazy="numero">
@error('numero') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-4">
<label>Quantidade de Publicadores</label>
<input x-mask="99" type="text" class="form-control form-control-sm" placeholder="Quantidadde de Publicadores" wire:model.lazy="quant_pub">
@error('quant_pub') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-4">
<label>Territorio Nº</label>
<select class="form-control form-control-sm" wire:model.lazy="territorio_id">
@foreach($territorio_id as $lista)        
<option>{{ $lista }}</option>    
 @endforeach  
</select>
@error('territorio_id') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Nome do Superintendente</label>
<input type="text" class="form-control form-control-sm" placeholder="Nome" wire:model.lazy="sup">
@error('sup') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Telefone do Superintendente</label>
<input x-mask="999-999-999" type="tel" class="form-control form-control-sm" placeholder="Telefone" wire:model.lazy="tel_sup">
@error('tel_sup') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Nome do Ajudante</label>
<input type="text" class="form-control form-control-sm" placeholder="Nome" wire:model.lazy="aju">
 @error('aju') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Telefone do Ajudante</label>
<input x-mask="999-999-999" type="tel" class="form-control form-control-sm" placeholder="Telefone" wire:model.lazy="tel_aju">
@error('tel_aju') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<!--DIV DOS BOTÕES-->
<div class="btn-group mt-5">
    <button class="btn btn-success col-md-8 text-white" type="submit">Salvar</button>
    <button class="btn btn-warning col-md-4 text-dark" wire:click="resetInputFields">Limpar Formulario</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->