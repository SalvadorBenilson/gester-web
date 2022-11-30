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
<span class="badge rounded-pill bg-success text-white" wire:loading wire:target="download">Baixando por favor aguarde...</span>

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
                    <td><img src="{{ Storage::url($lista->anexo) }}" class="img-thumbnail rounded" alt="" width="50" height="20"></td>
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning text-dark text-wrap btn-sm" wire:click="editview( {{ $lista->id }} )"><img src="{{ asset('/img/pencil-square.svg') }}" alt="Bootstrap" width="15" height="15"> Ver/Editar</button>
                        <button type="button" class="btn btn-danger text-dark text-wrap btn-sm" wire:click="deleteview( {{ $lista->id }} )"><img src="{{ asset('/img/trash3-fill.svg') }}" alt="Bootstrap" width="15" height="15"> Eliminar</button>
                        <button type="button" class="btn btn-success text-dark text-wrap btn-sm" wire:click="download( {{ $lista->id }} )"><img src="{{ asset('/img/download.svg') }}" alt="Bootstrap" width="15" height="15"> Baixar</button>
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
