<!--FORM-->
<form class="row g-2 mb-5" wire:submit.prevent="store" wire:loading.attr="disabled">

<!--BUTTON FECHAR MODAL-->
<div class="col">
    <button class="btn-close" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<input type="hidden" placeholder="ID" wire:model="grupo_id" readonly>

<div class="col-md-12">
<label>Número do Grupo</label>
<input x-mask="99" type="text" class="form-control form-control-sm" placeholder="Número do Grupo" wire:model.lazy="numero">
@error('numero') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Quantidade de Publicadores</label>
<input x-mask="99" type="text" class="form-control form-control-sm" placeholder="Quantidade de Publicadores" wire:model.lazy="quant_pub">
@error('quant_pub') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
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
<div class="btn-group mt-3">
    <button class="btn btn-success col-md-8 text-dark" type="submit">Salvar</button>          
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->