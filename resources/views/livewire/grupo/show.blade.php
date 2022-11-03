<div>
<!--DIV DO CONTEUDO-->

<!--DIV FLUID-->
<div class="mt-2">

<!--DIV DO PAINEL MESSAGE-->
@if( session()->has('message') )
<div class="d-flex justify-content">
<div class="alert alert-success alert-dismissible text-center" role="alert">
    <strong> {{ session('message') }} </strong>
</div>
</div>
@endif
<!--FIM DA DIV DO PAINEL MESSAGE-->

<!--DIV MODAL-->
<div>
@if($modal)
    @include("livewire.grupo.$view")
@endif
</div>
<!--FIM DA DIV MODAL-->

<!--DIV DO BOTÃO NOVO-->
    <button type="button" class="btn btn-outline-dark" wire:click="new" wire:loading.attr="disabled">
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
        <table class="table table-sm table-hover">
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
           @forelse ($grupos as $lista)
               <tr>
                   <td>{{$lista->numero}}</td>
                   <td>{{$lista->sup}}</td>
                   <td>{{$lista->aju}}</td>
                   <td>{{$lista->tel_sup}}</td>
                   <td>{{$lista->tel_aju}}</td>
                   <td>{{$lista->quant_pub}}</td>
                   <td>{{$lista->territorio_id}}</td>
                   <td>
                   <div class="btn-group">
                        <button type="button" class="btn btn-warning btn-sm col-md-2 text-dark text-wrap" wire:click="edit( {{ $lista->id }} )"><img src="{{ asset('/img/pencil-square.svg') }}" alt="Bootstrap" width="20" height="20">Editar</button>
                        <button type="button" class="btn btn-danger btn-sm col-md-2 text-dark text-wrap" wire:click="deleteview( {{ $lista->id }} )"><img src="{{ asset('/img/trash3-fill.svg') }}" alt="Bootstrap" width="20" height="20">Eliminar</button>
                    </div>
                   </td>
               </tr>
            @empty
            <tr colspan="8">
            <div class="alert alert-warning text-center" role="alert">
                <strong>Grupo(s) Não Encontrado(s)!</strong>
            </div>
            </tr>
            @endforelse
           </tbody>
        </table>
        {{ $grupos->links() }}
</div>
<!--FIM DA DIV DA TABELA-->

</div>
<!--FIM DA DIV DO CONTEUDO-->

</div>

</div>

