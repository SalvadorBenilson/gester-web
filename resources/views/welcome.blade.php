<x-guest-layout>

<!--PAINEL PRINCIPAL-->
<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Partes integrantes do Sistema</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        </div>
        <div>
          <h2>Publicador</h2>
          <p>Esta parte mantém o registro dos publicadores da congregação, ele mantém o grupo e o Território do publicador.</p>
          <a href="{{ url('/publicador') }}" class="btn btn-outline-secondary">
            Ver mais
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        </div>
        <div>
          <h2>Grupo</h2>
          <p>Aqui encontra-se os grupos da congregação e seu territorio designado.</p>
          <a href="{{ url('/grupo') }}" class="btn btn-outline-secondary">
            Ver mais
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
        </div>
        <div>
          <h2>Território</h2>
          <p>E por fim nesta sessão ficam guardados todos os cartões de território da congregação.</p>
          <a href="{{ url('/territorio') }}" class="btn btn-outline-secondary">
            Ver mais 
          </a>
        </div>
      </div>
    </div>
  </div>
<!--FIM DE PAINEL PRINCIPAL-->

</x-guest-layout>
