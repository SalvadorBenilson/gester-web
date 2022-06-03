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
    @include("livewire.territorio.$view")   
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
    <input type="search" class="form-control-sm inline" placeholder="Pesquisar Território..." wire:model="search">
</div>
<!--FIM DIV DO CAMPO PESQUISAR-->

<!--DIV DA TABELA-->
<div class="table-responsive">
        {{ $territorios->links() }}
        <table class="table table-sm table-hover">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Tipo</th>
                    <th>Anexo</th>
                    <th>Ações</th>
                </tr>
            </thead>          
           <tbody>
           @forelse ($territorios as $lista)
               <tr>
                    <td>{{ $lista->numero }}</td>
                    <td>{{ $lista->tipo }}</td>
                    <td><img src="{{ url($lista->anexo) }}" class="img-thumbnail rounded" alt="" width="50" height="50"></td>
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning btn-sm col-md-2 text-dark" wire:click="edit( {{ $lista->id }} )"><img src="{{ asset('/img/pencil-square.svg') }}" alt="Bootstrap" width="20" height="20"></button>
                        <button type="button" class="btn btn-danger btn-sm col-md-2 text-dark" wire:click="deleteview( {{ $lista->id }} )"><img src="{{ asset('/img/trash3-fill.svg') }}" alt="Bootstrap" width="20" height="20"></button>
                        <button type="button" class="btn btn-success btn-sm col-md-2 text-dark" wire:click="download( {{ $lista->id }} )"><img src="{{ asset('/img/download.svg') }}" alt="Bootstrap" width="20" height="20"></button>
                    </div>
                    </td>
               </tr>
            @empty
            <tr colspan="4">
            <div class="alert alert-warning text-center" role="alert">
                <strong>Território(s) Não Encontrado(s)!</strong>
            </div>
            </tr>
            @endforelse
           </tbody>
        </table>
        {{ $territorios->links() }}
</div>
<!--FIM DA DIV DA TABELA-->

<!--FIM DA DIV FLUID-->
</div>

<!--FIM DA DIV DO CONTEUDO-->
</div>
