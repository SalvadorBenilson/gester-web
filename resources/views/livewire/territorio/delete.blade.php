<!--DIV DO CONTEÚDO-->
<div class="d-flex justify-content mt-2">
<div class="alert alert-danger alert-dismissible text-center" role="alert">
        <p>Deseja Realmente Apagar o Território número: {{ $numero }}</p>
    <input type="hidden" placeholder="id" wire:model.lazy="id">
</div>
</div>
<!--FIM DA DIV DO CONTEÚDO-->

<!--DIV DOS BOTÕES-->
<div class="btn-group mt-3">
    <button class="btn btn-success text-dark" wire:click="delete( {{ $territorio_id }})" wire:loading.attr="disabled">Sim</button>
    <button class="btn btn-warning text-dark" wire:click="fecharModal">Não</button>           
</div>
<!--FIM DA DIV DOS BOTÕES-->
