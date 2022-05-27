<div>

<!--DIV DO PAINEL MESSAGE-->
@if( session()->has('message') )
<div class="position-relative">
<div class="alert alert-success d-flex align-items-center sm" role="alert">
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
    <button type="button" class="btn btn-outline-dark" wire:click="new">
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
           @foreach ($territorios as $lista)
               <tr>
                    <td>{{ $lista->numero }}</td>
                    <td>{{ $lista->tipo }}</td>
                    <td><img src="{{ URL::asset('storage/app/anexos/$lista->anexo') }}" class="img-thumbnail rounded" alt="" width="50" height="50"></td>
                    <td>
                        <button type="button" class="btn btn-outline-warning btn-sm" wire:click="edit( {{ $lista->id }} )">Ver/Editar</button>
                        <button type="button" class="btn btn-outline-warning btn-sm" wire:click="edit( {{ $lista->id }} )">Editar Foto</button>
                        <button type="button" class="btn btn-outline-danger btn-sm" wire:click="deleteview( {{ $lista->id }} )">Apagar</button>
                        <button type="button" class="btn btn-outline-success btn-sm" wire:click="edit( {{ $lista->id }} )">Baixar</button>
                    </td>
               </tr>
            @endforeach
           </tbody>
        </table>
        {{ $territorios->links() }}
</div>
<!--FIM DA DIV DA TABELA-->

</div>