
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Usuários</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Usuários</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end::Row-->
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
                            <input type="search" id="user-search" class="form-control" placeholder="Perquisar usuário" aria-label="Search users" style="width: 180px">
                          </div>
                          <select id="user-role-filter" class="form-select form-select-sm w-auto" aria-label="Filter by role">
                            <option value="all" selected="">Todos</option>
                            <option value="Ativos">Ativos</option>
                            <option value="Inativos">Inativos</option>
                            
                          </select>
                          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-user">
                            <i class="bi bi-person-plus-fill me-1" aria-hidden="true"> </i>
                            Novo Usuário
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
                            <th>Código</th>

                            <th>Nome</th>

                            <th>Email</th>

                            <th>Foto</th>

                            <th>Nível</th>

                            <th>Status</th>


                            <th class="text-end">
                                Ações
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @forelse($usuarios as $usuario)
                          <tr>
                            {{--ID--}}
                            <td>
                              {{$usuario->id_usuario}}
                            </td>
                            
                            {{--Nome--}}
                            <td>
                              <span class="badge text-bg-success"> 
                                {{ $usuario->nome_usuarios }}
                             </span>
                            </td>

                            {{--Email--}}
                            <td>
                              <span class="badge text-bg-success"> 
                                {{ $usuario->email_usuarios }}
                             </span>
                            </td>

                          

                            {{--Foto--}}
                            <td>
                             @if($usuario->foto_usuarios)
                             <img 
                                src="{{ asset('barista/assets/' . $usuario->foto_usuarios) }}" 
                                alt="{{ $usuario->nome_usuarios }}"
                                class="rounded"
                                style="
                                  width: 100px;
                                  height: 60px;
                                  object-fit: cover;
                                "
                                >
                             @else
                                <span class="text-muted">
                                    Sem imagem
                                </span>
                             @endif
                            </td>

                               {{--Nível--}}
                            <td>
                              <span class="badge text-bg-success"> 
                                {{ $usuario->nivel_usuarios }}
                             </span>
                            </td>

                            {{--Status--}}
                            <td>
                                @if( $usuario->status_usuarios === 'ATIVO')
                              <span class="badge text-bg-success">
                                Ativo
                              </span>
                              @else
                              <span class="badge text-bg-warning">
                                Inativo
                              </span>
                              @endif
                            </td>
                            {{--Ações--}}
                            <td class="text-end">
                              <div class="btn-group btn-group-sm">
                                <button
                                 type="button" 
                                 class="btn btn-outline-secondary"
                                 aria-label="Editar"
                                 >
                                  <i class="bi bi-pencil" aria-hidden="true"> </i>
                                </button>
                                <button 
                                type="button" 
                                class="btn btn-outline-danger" 
                                data-bs-toggle="modal"
                                 data-bs-target="#modal-delete-categoria" 
                                 aria-label="Deletar"
                                 >
                                  <i class="bi bi-trash" aria-hidden="true"> </i>
                                </button>
                              </div>
                            </td>
                          </tr>
                          @empty
                          <tr>
                            <td
                               colspan="5"
                               class="text-center py-4 text-muted"
                               >
                                 Nenhum usuário cadastrado.
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
                      Total de usuários:
                      <strong>
                        {{ $usuarios-> count()}}
                      </strong>
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
            <div class="modal fade" id="modal-add-user" tabindex="-1" aria-labelledby="modal-add-user-label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form>
                    <div class="modal-header">
                      <h5 class="modal-title" id="modal-add-user-label">Add new usuário</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="new-user-name" class="form-label"> Full name <span class="required-indicator sr-only"> (required)</span></label>
                        <input type="text" class="form-control" id="new-user-name" placeholder="e.g. Jane Doe" required="">
                      </div>
                      <div class="mb-3">
                        <label for="new-user-email" class="form-label"> Email address <span class="required-indicator sr-only"> (required)</span></label>
                        <input type="email" class="form-control" id="new-user-email" placeholder="name@example.com" required="">
                        <div class="form-text">The invitation will be sent to this address.</div>
                      </div>
                      <div class="mb-3">
                        <label for="new-user-role" class="form-label"> Role </label>
                        <select id="new-user-role" class="form-select">
                          <option selected="">Subscriber</option>
                          <option>Author</option>
                          <option>Editor</option>
                          <option>Administrator</option>
                        </select>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="new-user-welcome" checked="">
                        <label class="form-check-label" for="new-user-welcome">
                          Send a welcome email with login details
                        </label>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                      </button>
                      <button type="submit" class="btn btn-primary">Create usuário</button>
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
                    <h5 class="modal-title" id="modal-delete-user-label">Delete usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="mb-0">
                      Are you sure you want to delete this user? All content owned by the account
                      will be reassigned to the site administrator. This action cannot be undone.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                      Cancel
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                      Delete usuário
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
