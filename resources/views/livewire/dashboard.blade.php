<div class="container-fluid">
    <!--SESSÃO DOS CARTÕES-->
<div class="mt-4">
  <section>
    <div class="row">
    <h2><span class="badge bg-light text-dark">Analise aqui o progresso da sua congregação!</span></h2>
    </div>

    <div class="mt-2 row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
              <img src="{{ asset('/img/person-fill.svg') }}" alt="Bootstrap" width="20" height="20">
                <h3 class="text-info">{{ $publicadors }}</h3>
                <p class="mb-0">Publicador(s)</p>
              </div>
              <div class="align-self-center">
                <i class="fas fa-book-open text-info fa-3x"></i>
              </div>
            </div>
            <div class="px-md-1">
              <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $publicadors }}%;" aria-valuenow="{{ $grupo }}"
                  aria-valuemin="0"></div>
              </div>
            </div>
            <a href="{{ route('publicador') }}" class="btn btn-outline-info stretched-link">Ver mais</a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
              <img src="{{ asset('/img/house-fill.svg') }}" alt="Bootstrap" width="20" height="20">
                <h3 class="text-warning">{{ $grupo }}</h3>
                <p class="mb-0">Grupo(s)</p>
              </div>
              <div class="align-self-center">
                <i class="far fa-comments text-warning fa-3x"></i>
              </div>
            </div>
            <div class="px-md-1">
              <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $grupo }}%;" aria-valuenow="{{ $grupo }}"
                  aria-valuemin="0"></div>
              </div>
            </div>
            <a href="{{ route('grupo') }}" class="btn btn-outline-warning stretched-link">Ver mais</a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <img src="{{ asset('/img/map-fill.svg') }}" alt="Bootstrap" width="20" height="20">
                <h3 class="text-success">{{ $territorio }}</h3>
                <p class="mb-0">Território(s)</p>
              </div>
              <div class="align-self-center">
                <i class="fas fa-mug-hot text-success fa-3x"></i>
              </div>
            </div>
            <div class="px-md-1">
              <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $territorio }}%;" aria-valuenow="{{ $territorio }}"
                  aria-valuemin="0"></div>
              </div>
            </div>
            <a href="{{ route('territorio') }}" class="btn btn-outline-success stretched-link">Ver mais</a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
              <img src="{{ asset('/img/arrow-left-right.svg') }}" alt="Bootstrap" width="20" height="20">
                <h3 class="text-danger">{{ $devolver }}</h3>
                <p class="mb-0">Território(s) a Devolver</p>
              </div>
              <div class="align-self-center">
                <i class="fas fa-map-signs text-danger fa-3x"></i>
              </div>
            </div>
            <div class="px-md-1">
              <div class="progress mt-3 mb-1 rounded" style="height: 7px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $devolver }}%;" aria-valuenow="{{ $devolver }}"
                  aria-valuemin="0"></div>
              </div>
            </div>
            <a href="{{ route('publicador') }}" class="btn btn-outline-danger stretched-link">Ver mais</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!--FIM SESSÃO DOS CARTÕES-->
</div>
