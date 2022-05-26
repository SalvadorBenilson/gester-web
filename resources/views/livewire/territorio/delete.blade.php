<div>

<!--DIV DO CONTEUDO-->
<div class="container-fluid mt-3 mb-5">

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
Deseja realmente apagar o Publicador número: {{ $numero }}
<input type="hidden" placeholder="ID" wire:model="id">
</div>

<div class="col-md-12">
    <button type="button" class="btn btn-outline-danger" wire:click.prevent="delete( {{ $territorio_id }})">Apagar</button>
</div>

</div>
<!--FIM DA DIV DO ALERT-->

</div>
<!--FIM DA DIV DA LINHA-->

</div>
<!--FIM DA DIV DO CONTEUDO-->

</div>
