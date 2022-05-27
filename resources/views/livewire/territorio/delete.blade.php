<div class="mb-2">

<!--DIV DO CONTEUDO-->
<div>

<!--BUTTON FECHAR MODAL-->
<div class="row mt-4">
    <div class="col">
<button type="button" class="btn-close btn-outline" wire:click="fecharModal()"></button>
    </div>
</div>
<!--FIM BUTTON FECHAR MODAL-->

<!--DA DIV DA LINHA-->
<div class="row">
<!--DIV DO ALERT-->
<div class="col-md-12">

<div class="alert alert-danger" role="alert">
Deseja Realmente Apagar o Território número: {{ $numero }}
<input type="hidden" placeholder="ID" wire:model="id">
</div>

<div class="col-md-12">
    <button type="button" class="btn btn-outline-success" wire:click.prevent="delete( {{ $territorio_id }})">Apagar</button>
    <button type="button" class="btn btn-outline-danger" wire:click="fecharModal">Não</button>
</div>
</div>

</div>
<!--FIM DA DIV DO ALERT-->

</div>
<!--FIM DA DIV DA LINHA-->

</div>
<!--FIM DA DIV DO CONTEUDO-->
