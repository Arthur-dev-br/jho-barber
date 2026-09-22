<!doctype html>
<html lang="pt-br">
  <!--begin::Head-->
  <head>
  @include ('partials.admin.head')
 </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include ('partials.admin.topo')
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('partials.admin.menu-lateral');
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
           
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
            
            <!--end::Row-->
            <!--begin::Row-->

            <!-- DASHBOARD INICIO -->

            <main>
              @yield ('content')
            </main>
            
            <!-- fim dashboard -->

            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      @include ('partials.admin.rodape')
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    @include('partials.admin.script')
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
