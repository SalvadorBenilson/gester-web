<div>
<!--DIV DO CONTEUDO-->

<!--DIV DO CONTEUDO FLUID-->
<div class="container-fluid mt-3">

<!--DIV MODAL
@if($modal)
    @include("livewire.publicador.$view")
@endif
FIM DA DIV MODAL-->

<!--DIV DO PAINEL MESSAGE-->
@if( session()->has('message') )
<div class="alert alert-success alert-dismissible fade show-sm mt-3" role="alert">
    <strong> {{ session('message') }} </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!--FIM DA DIV DO PAINEL MESSAGE-->

<!--DIV DO BOTÃO NOVO-->
    <button type="button" class="btn btn-outline-dark" wire:click="new" wire:loading.attr="disabled">
        Novo
    </button>
<!--FIM DIV DO BOTÃO NOVO-->

<!--DIV DO CAMPO PESQUISAR-->
<div class="col-md-4 mt-3 mb-3">
    <input type="search" class="form-control-sm inline" placeholder="Pesquisar Publicador..." wire:model="search">
</div>
<!--FIM DIV DO CAMPO PESQUISAR-->

<!--DIV DA TABELA-->
<div class="table-responsive">
        {{ $publicadors->links() }}
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Morada</th>
                    <th>Territorio</th>
                    <th>Grupo</th>
                    <th>Recebido</th>
                    <th>Devolver</th>
                    <th>Ações</th>
                </tr>
            </thead>          
           <tbody>
           @foreach ($publicadors as $lista)
               <tr>
                   <td>{{$lista->nome}}</td>
                   <td>{{$lista->telefone}}</td>
                   <td>{{$lista->email}}</td>
                   <td>{{$lista->morada}}</td>
                   <td>{{$lista->territorio}}</td>
                   <td>{{$lista->grupo}}</td>
                   <td>{{$lista->recebido}}</td>
                   <td>{{$lista->devolver}}</td>
                   <td>
                    <button type="button" class="btn btn-outline-warning btn-sm" wire:click="edit( {{ $lista->id }} )">Ver/Editar</button>
                   <button type="button" class="btn btn-outline-danger btn-sm" wire:click="deleteview( {{ $lista->id }} )">Apagar</button>
                   </td>
               </tr>
            @endforeach
           </tbody>
        </table>
        {{ $publicadors->links() }}
</div>
<!--FIM DA DIV DA TABELA-->

<!--FIM DA DIV DO CONTEUDO-FLUID-->
</div>

<!--FIM DA DIV DO CONTEUDO-->
</div>
