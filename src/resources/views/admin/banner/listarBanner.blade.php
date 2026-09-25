<main class="app-main" id="main" tabindex="-1">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Banners</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Banners</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end::Row-->

            <!-- SUCESSO ALERTA -->
             @if (session('sucesso'))
               <div class="alert alert-success" role="alert">
               <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                {{ session('sucesso')}}
                 A simple success alert—check it out!
               </div>
             @endif
             
             @if (session('erro'))
               <!-- ERRO ALERTA -->
               <div class="alert alert-danger" role="alert">
               <i class="bi bi-exclamation-circle-fill" aria-hidden="true"></i>
                {{ session('erro') }}
                A simple danger alert—check it out!
               </div>
             @endif






            
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!--begin::Card-->
                <div class="card mb-4">
                  <!--begin::Card Header-->
                  <div class="card-header">
                    <div class="row g-2 align-items-center">
                      <div class="col-12 col-md-4">
                        
                      </div>
                      <div class="col-12 col-md-8">
                        <div class="d-flex flex-wrap justify-content-md-end gap-2">
                          <div class="input-group input-group-sm w-auto">
                            <span class="input-group-text">
                              <i class="bi bi-search" aria-hidden="true"></i>
                            </span>
                            <input type="search" id="user-search" class="form-control" placeholder="Search users" aria-label="Search users" style="width: 180px">
                          </div>
                          <select id="user-role-filter" class="form-select form-select-sm w-auto" aria-label="Filter by role">
                            <option value="all" selected="">Todos</option>
                            <option value="Ativos">Ativos</option>
                            <option value="Inativos">Inativos</option>
                            
                          </select>
                          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-user">
                            <i class="bi bi-sun-fill" aria-hidden="true"> </i>
                            Novo banner
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end::Card Header-->
                  <!--begin::Card Body-->
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-hover align-middle m-0" role="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($listaBanner as $banner)
                          <tr>
                            
                            <td>
                              {{$banner->id_banner}}
                            </td>

                            <td>@if($banner->imagem_banner)
                              <img src= "{{ asset('jho_barber/assets/' . $banner->imagem_banner) }}"
                                    alt="{{$banner->titulo_banner }}"
                                    class = "rounded"
                                    style="
                                        width:140px;
                                        height:90px;
                                        object-fit:cover;
                                    "
                              >
                                @else
                                    <span class="text-muted">
                                        Sem imagem
                                    </span>

                             @endif</td>
                            <td>

                             @if($banner->titulo_banner)
                              <span>
                                {{$banner->titulo_banner}}
                              </span>
                             
                                @else
                                    <span class="text-muted">
                                        Sem imagem
                                    </span>

                             @endif




                            </td>
                             {{--Status--}}
                            <td>
                                @if( $banner->status_banner === 'ATIVO')
                              <span class="badge text-bg-success">
                                Ativo
                              </span>
                              @else
                              <span class="badge text-bg-warning">
                                Inativo
                              </span> 
                              @endif
                            </td>
                            
                            {{-- AÇÕES --}}
                            <td class="text-end">
                              <div class="btn-group btn-group-sm">

                            {{-- EDITAR --}}
                              <button
                                 type="button" 
                                 class="btn btn-outline-secondary"
                                 data-bs-toggle="modal" data-bs-target="#modal-edit-banner" 
                                 data-id="{{ $banner->id_banner }}"
                                 data-titulo="{{ $banner->titulo_banner }}"
                                 data-status="{{ $banner->status_banner }}"
                                 data-image="{{ asset('jho_barber/assets/' . $banner->imagem_banner) }}"
                                 data-url="{{ route('admin.banner.update', $banner->id_banner) }}"          
                                 aria-label="Editar"
                                 >
                                  <i class="bi bi-pencil" aria-hidden="true"> </i>
                                </button>

                                {{-- INICIO: ATIVAR / DESATIVAR --}}
                              <form
                                action="{{ route('admin.banner.status', $banner->id_banner) }}"
                                method="POST" class="d-inline">
                                  @csrf
                                  @method('PATCH')

                                  @if($banner->status_banner === 'ATIVO')
                                    <button 
                                      type="submit" 
                                      class="btn btn-outline-danger" 
                                      data-bs-toggle="modal"
                                      data-bs-target="#modal-status-banner" 
                                      title="Desativar banner"
                                      data-url="{{ route('admin.banner.status', $banner->id_banner) }}"
                                      data-titulo="{{ $banner->id_banner }}"
                                      data-status="ATIVO"
                                      aria-label="Deletar">
                                     <i class="bi bi-eye"></i>
                                    </button>

                                    @else

                                    <button 
                                      type="submit" 
                                      class="btn btn-outline-success" 
                                      data-bs-toggle="modal"
                                      data-bs-target="#modal-status-banner" 
                                      title="Desativar banner"
                                      data-url="{{ route('admin.banner.status', $banner->id_banner) }}"
                                      data-titulo="{{ $banner->id_banner }}"
                                      data-status="INATIVO"
                                      aria-label="Deletar">
                                     <i class="bi bi-eye-slash"></i>
                                    </button>


                                  
                                  @endif
                              </form>

                                

                                {{-- FIM: ATIVAR / DESATIVAR --}}

                              </div>
                            </td>
                          </tr>
                          @empty
                          <tr>
                            <td
                               colspan="5"
                               class="text-center py-4 text-muted"
                               >
                                 Nenhum banner cadastrado.
                            </td>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!--end::Card Body-->
                  <!--begin::Card Footer-->
                  <div class="card-footer clearfix">
                    <div class="float-start pt-1 fs-7 text-body-secondary">
                      <span>
                        Total de banners: {{$banner->Count()}} 
                      </span>
                    </div>
                    
                  </div>
                  <!--end::Card Footer-->
                </div>
                <!--end::Card-->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->

            <!--begin::Add User Modal-->
            <div
              class="modal fade"
              id="modal-add-user"
              tabindex="-1"
              aria-labelledby="modal-add-user-label"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">

                <!-- FORMA DE CADASTRO -->
                  <form
                    action="{{ route('admin.banner.store') }}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                      <h5 class="modal-title" id="modal-add-banner-label">Cadastrar  novo banner</h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>

                    <div class="modal-body">
                      <div class="mb-3">
                      <label for="new-banner-name" class="form-label">  Título Banner </label>
                        <input
                          type="text"
                          class="form-control"
                          id="new-banner-name"
                          placeholder="Título banner"
                          required
                          name="titulo_banner"
                        />
                      </div>

                      <div class="mb-3">
                      
                    
                        <label for="img-banner" class="form-label"> Selecione uma Imagem</label>
                        <input type="file" class="form-control input-banner" id="img-banner" name="imagem_banner" accept="image/*" required>
                        
                      <label for="img-banner" class="banner-upload">
                       
                        <img id="ver-banner" src="{{ asset('jho_barber/assets/admin/sem-banner.svg')}}" alt="Selecione uma imagem para o banner">

                        <div class="banner-upload">
                          <i class="bi bi-image"></i>
                          <span>Clique para selecionar o banner</span>
                        </div>

                        
                      </label>
                      </div>
                      
                      <div class="mb-3">
                        <label for="new-banner-role" class="form-label"> Status </label>
                        <select id="new-banner-role" class="form-select" name="status_banner">
                          <option value="ATIVO">ATIVO</option>
                          <option value="INATIVO">INATIVO</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancelar
                      </button>
                      <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
             {{--FIM - MODAL CADASTRO  BANNER --}}

              {{-- INICIO - MODAL EDITAR BANNER --}}
            <div class="modal fade" id="modal-edit-banner" tabindex="-1" aria-labelledby="modal-add-banner-label" 
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  {{-- FORMA DE EDITAR --}}
                  <form id="form-edit-banner" method="POST" enctype="multipart/form-data">
                    @csrf  
                    @method('PUT')
                    
                    <div class="modal-header">
                      <h5
                       class="modal-title"
                        id="modal-add-banner-label"
                        >Cadastrar novo banner</h5>
                      <button
                       type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                         aria-label="Close">
                        </button>
                    </div>

                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="edit-banner-titulo" class="form-label"> Título Banner</label>
                        <input 
                        type="text" 
                        class="form-control"
                        id="edit-banner-titulo"
                        required
                        name="titulo_banner"
                        >
                      </div>

                      <div class="mb-3">

                        <label for="edit-banner-imagem" class="form-label"> Selecione uma imagem </label>

                        <input 
                        type="file" 
                        class="form-control input-banner"
                        id="edit-banner-imagem"
                        name="imagem_banner"
                        accept="image/*" />

                        <label for="edit-banner-imagem" class="banner-upload">

                          <img id="edit-banner-mostrar" src="" alt="Banner">

                        <div class="banner-upload">
                          <i class="bi bi-image"></i>
                          <span>Deixe vazio para manter a imagem atual</span>
                        </div>

                      </label>

                       </div>

                      <div class="mb-3">
                        <label for="edit-banner-role" class="form-label"> Status </label>
                        <select id="edit-banner-status" class="form-select" name="status_banner">
                          <option value="ATIVO">Ativo</option>
                          <option value="INATIVO">Inativo</option>
                        </select>
                      </div>
                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancelar
                      </button>
                      <button type="submit" class="btn btn-primary">
                        Atualizar banner
                      </button>
                    </div>
                  </form>
                  {{-- FIM FORMA DE ATUALIZAÇÃO --}}

                  {{-- INICIO: ATIVAR/DESATIVAR BANNER --}}
            <div class="modal fade" id="modal-status-banner" tabindex="-1" aria-labelledby="modal-status-banner-label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <form id="form-status-banner" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="modal-header">
                    <h5 class="modal-title" id="modal-status-banner-titulo">Alterar Status do banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                    <p id="modal-status-banner-txt">
                    
                    </p>
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                      Cancelar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btn-status-banner">
                     Confirmar
                    </button>
                  </div>


                  </form>
                  
                </div>
              </div>
            </div>
            {{-- FIM: ATIVAR/DESATIVAR BANNER --}}
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

      
{{-- Carregando a foto do modal cadastrar --}}
<script>
    const inputBanner = document.getElementById('img-banner');
    const previewBanner = document.getElementById('ver-banner');
 
    inputBanner.addEventListener('change', function() {
 
        const arquivo = this.files[0];
 
        if (arquivo) {
 
            previewBanner.src = URL.createObjectURL(arquivo);
 
        }
 
    });
</script>

{{-- Editar Banner --}}
<script>
  const modalEditarBanner = document.getElementById('modal-edit-banner');
  const formEditarBanner = document.getElementById('form-edit-banner');
  const editId = document.getElementById('edit-banner-id');
  const editTitulo = document.getElementById('edit-banner-titulo');
  const editStatus = document.getElementById('edit-banner-status');
  const editImagem = document.getElementById('edit-banner-imagem');
  const editMostrar = document.getElementById('edit-banner-mostrar');
  
  // Carregar as informações no modal
  modalEditarBanner.addEventListener('show.bs.modal', function(event){

    const botao = event.relatedTarget;

    const id = botao.getAttribute('data-id');
    const titulo = botao.getAttribute('data-titulo');
    const status = botao.getAttribute('data-status');
    const image = botao.getAttribute('data-image');
    const url = botao.getAttribute('data-url');

    // Form Action
    formEditarBanner.action = url;

    // Preencher
    editTitulo.value = titulo;
    editStatus.value = status;
    editMostrar.src = image;

    console.log(editMostrar.src);

    editImagem.value = '';
    
  })

  // VER FOTO PARA EDITAR
    editImagem.addEventListener('change', function() {
 
        const arquivo = this.files[0];
 
        if (arquivo) {
 
            editMostrar.src = URL.createObjectURL(arquivo);
 
        }
 
    });



</script>

{{-- Ativar e Desativar Banner --}}
<script>

  const modalStatusBanner = document.getElementById('modal-status-banner');
  const formStatusBanner = document.getElementById('form-status-banner');
  const tituloStatusBanner = document.getElementById('modal-status-banner-titulo');
  const txtStatusBanner = document.getElementById('modal-status-banner-txt');
  const btnStatusBanner = document.getElementById('btn-status-banner');

  modalStatusBanner.addEventListener('show.bs.modal', function(event){

    const botao = event.relatedTarget;

    const url = botao.getAttribute('data-url');
    const titulo = botao.getAttribute('data-titulo');
    const status = botao.getAttribute('data-status');

    // console.log("URL: " + url);

    formStatusBanner.action = url;


    if(status === "ATIVO"){

      tituloStatusBanner.textContent = 'Desativar Status Banner';
      txtStatusBanner.textContent = 'Tem certeza que deseja desativar o status do banner?';
      btnStatusBanner.textContent = 'Desativar';

      btnStatusBanner.className = 'btn btn-danger'

    }else{

      tituloStatusBanner.textContent = 'Ativar Status Banner';
      txtStatusBanner.textContent = 'Tem certeza que deseja ativar o status do banner?';
      btnStatusBanner.textContent = 'Ativar';

      btnStatusBanner.className = 'btn btn-success'


    } 

  });

</script>

{{-- Time para o alerta --}}
<script>


    setTimeout(() => {

        const alertas = document.querySelectorAll('.alert');

        alertas.forEach(function(alerta){

            const instancia = bootstrap.Alert.getOrCreateInstance(alerta);

            instancia.close();

        });

        
    }, 5000);

</script>
