<div>

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
@if($modal)
    @include("livewire.territorio.$view")
@endif
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
        <table class="table table-hover table-sm">
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
                    <td><img src="{{ URL::asset('img/card-image.svg') }}" class="img-thumbnail rounded" alt="" width="50" height="50"></td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-sm" wire:click="edit( {{ $lista->id }} )">Ver/Editar</button>
                        <button type="button" class="btn btn-outline-warning btn-sm" wire:click="edit( {{ $lista->id }} )">Editar Foto</button>
                        <button type="button" class="btn btn-outline-danger btn-sm" wire:click="deleteview( {{ $lista->id }} )">Apagar</button>
                        <button type="button" class="btn btn-outline-success btn-sm" wire:click="edit( {{ $lista->id }} )">Baixar</button>
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

</div>