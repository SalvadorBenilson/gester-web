<!--FORM-->
<form class="row g-2 mb-5" wire:submit.prevent="store" wire:loading.attr="disabled">

<!--BUTTON FECHAR MODAL-->
<div class="col">
    <button class="btn-close" wire:click="fecharModal"></button>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<div class="col-md-12">
<label>Nome Completo</label>
<input type="text" class="form-control form-control-sm" placeholder="Nome Completo" wire:model.lazy="nome" value="old{{ $nome }}">
@error('nome') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-4">
<label>Telefone</label>
<input x-mask="999-999-999" type="tel" class="form-control form-control-sm" placeholder="Telefone" wire:model.lazy="telefone" value="old{{ $telefone }}">
@error('telefone') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-4">
<label>Email</label>
<input x-mask="*" type="email" class="form-control form-control-sm" placeholder="Email" wire:model.lazy="email" value="old{{ $email }}">
@error('email') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-4">
<label>Morada</label>
<input x-mask="*" type="text" class="form-control form-control-sm" placeholder="Morada" wire:model.lazy="morada" value="old{{ $morada }}">
@error('morada') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Recebido em:</label>
<input x-mask="99/99/9999" type="date" class="form-control form-control-sm" wire:model.lazy="recebido" value="old{{ $recebido }}">
@error('recebido') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Devolver em:</label>
<input x-mask="99/99/9999" type="date" class="form-control form-control form-control-sm" wire:model.lazy="devolver" value="old{{ $devolver }}">
@error('devolver') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Territorio Nº</label>
<select class="form-control form-control-sm" wire:model="territorio_id" value="old{{ $territorio_id }}">       
@foreach ($territorio_id as $lista)       
    <option>{{ $lista }}</option>
@endforeach    
</select>
@error('territorio_id') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<div class="col-md-6">
<label>Grupo Nº</label>
<select class="form-control form-control-sm" wire:model.lazy="grupo_id" value="old{{ $grupo_id }}">
@foreach ($grupo_id as $lista)       
    <option>{{ $lista }}</option>
@endforeach      
</select>
@error('grupo_id') <span class="text-danger error">{{ $message }}</span> @enderror
</div>

<!--DIV DOS BOTÕES-->
<div class="btn-group mt-3">
    <button class="btn btn-success col-md-8 text-dark" type="submit">Salvar</button>
    <button class="btn btn-warning col-md-4 text-dark" wire:click="resetInputFields">Limpar Formulario</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->

</form>
<!--FIM DO FORM-->
