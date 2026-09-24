<main class="app-main" id="main" tabindex="-1">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Cliente</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cliente</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end::Row-->

             {{-- ALERTA SUCESSO --}} 
            @if(session('sucesso'))
              <div class="alert alert-success" role="alert">
                 <i class="bi bi-check-circle-fill"></i>
                {{session('sucesso')}}        
             </div>
            @endif

             {{-- ALERTA ERRO --}} 
            @if(session('erro'))
              <div class="alert alert-danger" role="alert">
                <i class="bi bi-exclamation-circle-fill"></i>
                {{session('erro')}}           
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
                        <h3 class="card-title">Clientes cadastrados</h3>
                      
                      </div>
                      <div class="col-12 col-md-8">
                        <div class="d-flex flex-wrap justify-content-md-end gap-2">
                          <div class="input-group input-group-sm w-auto">
                            <span class="input-group-text">
                              <i class="bi bi-search" aria-hidden="true"></i>
                            </span>
                            <input type="search" id="cliente-search" class="form-control" placeholder="Pesquisar cliente" aria-label="Pesquisar cliente" style="width: 180px">
                          </div>
                          <select id="user-role-filter" class="form-select form-select-sm w-auto" aria-label="Filter by role">
                            <option value="all" selected="">Todos</option>
                            <option value="Ativos">Ativos</option>
                            <option value="Inativos">Inativos</option>
                            
                          </select>
                          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-cliente">
                            <i class="bi bi-person-plus-fill me-1" aria-hidden="true"> </i>
                            Novo cliente
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
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                           
                            <th scope="col">Foto</th>
                            <th scope="col">Status</th>
                            <th class="text-end">
                                Ações
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($listaCliente as $cliente)
                          <tr>
                            
                            <td>
                              {{$cliente->id_cliente}}
                            </td>

                            </td>
                            <td>
                              @if($cliente->nome_cliente)
                              <span>
                                {{$cliente->nome_cliente}}
                              </span>
                             
                                @else
                                    <span class="text-muted">
                                        Sem imagem
                                    </span>

                             @endif
                            </td>
                            <td>
                                @if($cliente->email_cliente)
                                <span>
                                    {{$cliente->email_cliente}}

                                </span>
                                @endif
                            </td>

                            <td>
                                @if($cliente->senha_cliente)
                                <span>
                                    {{$cliente->senha_cliente}}

                                </span>
                                @endif
                            </td>

                            <td>
                                @if($cliente->foto_cliente)
                              <img src= "{{ asset('jho_barber/assets/cliente/' . $cliente->foto_cliente) }}"
                                    alt="{{$cliente->foto_cliente }}"
                                    class = "rounded"
                                    style="
                                        width:100px;
                                        height:95px;
                                       
                                    "
                              >
                                @else
                                    <span class="text-muted">
                                        Sem imagem
                                    </span>

                             @endif
                            </td>

                            {{--Status--}}
                            <td>
                                @if( $cliente->status_cliente === 'ATIVO')
                              <span class="badge text-bg-success">
                                Ativo
                              </span>
                              @else
                              <span class="badge text-bg-warning">
                                Inativo
                              </span>
                              @endif
                            </td>
                            
                            <td class="text-end">
                              <div class="btn-group btn-group-sm">
                                {{-- EDITAR --}}
                                <button
                                 type="button" 
                                 class="btn btn-outline-secondary"
                                 data-bs-toggle="modal" data-bs-target="#modal-edit-cliente" 
                                 data-id="{{ $cliente->id_cliente }}"
                                 data-titulo="{{ $cliente->titulo_cliente }}"
                                 data-email="{{ $cliente->email_cliente }}"
                                 data-status="{{ $cliente->status_cliente }}"
                                 data-image="{{ asset('jho_barber/assets/' . $cliente->imagem_cliente) }}"
                                 data-url="{{ route('admin.cliente.update', $cliente->id_cliente) }}"          
                                 aria-label="Editar"
                                 >
                                  <i class="bi bi-pencil" aria-hidden="true"> </i>
                                </button>

                                {{-- INICIO: ATIVAR / DESATIVAR --}}
                              <form
                                action="{{ route('admin.cliente.status', $cliente->id_cliente) }}"
                                method="POST" class="d-inline">
                                  @csrf
                                  @method('PATCH')

                                  @if($cliente->status_cliente === 'ATIVO')
                                    <button 
                                      type="submit" 
                                      class="btn btn-outline-danger" 
                                      data-bs-toggle="modal"
                                      data-bs-target="#modal-status-cliente" 
                                      title="Desativar cliente"
                                      data-url="{{ route('admin.cliente.status', $cliente->id_cliente) }}"
                                      data-titulo="{{ $cliente->id_cliente }}"
                                      data-status="ATIVO"
                                      aria-label="Deletar">
                                     <i class="bi bi-eye"></i>
                                    </button>

                                         @else

                                    <button 
                                      type="submit" 
                                      class="btn btn-outline-success" 
                                      data-bs-toggle="modal"
                                      data-bs-target="#modal-status-cliente" 
                                      title="Desativar cliente"
                                      data-url="{{ route('admin.cliente.status', $cliente->id_cliente) }}"
                                      data-titulo="{{ $cliente->id_cliente }}"
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
                            
                            <td>Nenhum registro encontrado!</td>
                           
                            
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
                      Total de clientes: {{$listaCliente->count()}} 
                    </div>
                    </ul>
                  </div>
                  <!--end::Card Footer-->
                </div>
                <!--end::Card-->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->

            {{-- INICIO - MODAL CADASTRO CLIENTE --}}
            <div class="modal fade" id="modal-add-cliente" tabindex="-1" aria-labelledby="modal-add-cliente-label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  {{-- FORMA DE CADASTRO --}}
                  <form
                  action="{{ route('admin.cliente.store') }}"
                    method="POST"
                    enctype="multipart/form-data"> {{-- só quando tiver arquivo --}}
                    @csrf 
                  >
                    
                    <div class="modal-header">
                      <h5 class="modal-title" id="modal-add-cliente-label">Novo cliente</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="new-cliente-name" class="form-label"> Nome Completo <span class="required-indicator sr-only"> (required)</span></label>
                        <input type="text" class="form-control" id="new-user-name" placeholder=" Nome Completo" required="">
                      </div>
                      <div class="mb-3">
                        <label for="new-user-email" class="form-label"> Email <span class="required-indicator sr-only"> (required)</span></label>
                        <input type="email" class="form-control" id="new-user-email" placeholder="Email" required="">
                      </div>

                      <div class="mb-3">
                        <label for="new-user-role" class="form-label"> Status </label>
                        <select id="new-user-role" class="form-select">
                          <option selected="">Ativo</option>
                          <option>Inativo</option>
                        </select>
                      </div>
                      <!--<div class="form-check">
                        <input class="form-check-input" type="checkbox" id="new-user-welcome" checked="">
                        <label class="form-check-label" for="new-user-welcome">
                          Send a welcome email with login details
                        </label>
                      </div>-->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancelar
                      </button>
                      <button type="submit" clas s="btn btn-primary">Confirmar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!--end::Add User Modal-->

            <!--begin::Delete User Modal-->
            <div class="modal fade" id="modal-delete-user" tabindex="-1" aria-labelledby="modal-delete-user-label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-delete-user-label">Deixar inativo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="mb-0">
                      Tem certeza que deseja deixar inativo esse cliente?
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                      Cancelar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                      Deixar inativo
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Delete User Modal-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
