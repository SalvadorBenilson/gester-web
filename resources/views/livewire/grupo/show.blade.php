<div>
<!--DIV DO CONTEUDO-->
<div class="container-fluid mt-3">

<!--DIV MODAL-->
@if($modal)
    @include("livewire.grupo.$view")
@endif
<!--FIM DA DIV MODAL-->

<!--DIV DO PAINEL MESSAGE-->
@if( session()->has('message') )
<div class="alert alert-success alert-dismissible fade show-sm mt-3" role="alert">
    <strong> {{ session('message') }} </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!--FIM DA DIV DO PAINEL MESSAGE-->

<!--DIV DO BOTÃO NOVO-->
    <button type="button" class="btn btn-outline-dark" wire:click="new">
        Novo
    </button>
<!--FIM DIV DO BOTÃO NOVO-->

<!--DIV DO CAMPO PESQUISAR-->
<div class="col-md-4 mt-3 mb-3">
    <input type="search" class="form-control-sm inline" placeholder="Pesquisar Grupo..." wire:model="search">
</div>
<!--FIM DIV DO CAMPO PESQUISAR-->

<!--DIV DA TABELA-->
<div class="table-responsive">
{{ $grupos->links() }}
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Superintendente</th>
                    <th>Ajudante</th>
                    <th>Telefone Superintendente</th>
                    <th>Telefone Ajudante</th>
                    <th>Nº de Publicadores</th>
                    <th>Terrítorio</th>
                    <th>Ações</th>
                </tr>
            </thead>          
            <tbody>
           @foreach ($grupos as $lista)
               <tr>
                   <td>{{$lista->numero}}</td>
                   <td>{{$lista->sup}}</td>
                   <td>{{$lista->aju}}</td>
                   <td>{{$lista->tel_sup}}</td>
                   <td>{{$lista->tel_aju}}</td>
                   <td>{{$lista->quant_pub}}</td>
                   <td>{{$lista->territorio_id}}</td>
                   <td>
                    <button type="button" class="btn btn-outline-warning btn-sm" wire:click="edit( {{ $lista->id }} )">Ver/Editar</button>
                   <button type="button" class="btn btn-outline-danger btn-sm" wire:click="deleteview( {{ $lista->id }} )">Apagar</button>
                   </td>
               </tr>
            @endforeach
           </tbody>
        </table>
        {{ $grupos->links() }}
</div>
<!--FIM DA DIV DA TABELA-->

</div>
<!--FIM DA DIV DO CONTEUDO-->

</div>

