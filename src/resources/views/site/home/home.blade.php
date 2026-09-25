
@extends('layout.site')


@section ('content')

  <!-- inicio Cabeçalho -->

  

  <!-- Fim cabeçalho -->

  <!-- Corpo -->
  

    <!-- inicio banner -->
    @include ('site.home.banner')

    <!-- fim banner -->

    <!-- inicio Bem vindo -->

    @include('site.home.sobre')

    <!-- fim bem vindo -->


    <!-- Destaque-inicio -->

    @include('site.home.servicos')

    <!-- destaque fim -->

    <!-- Galeria inicio -->
    @include('site.home.galeria')

    <!-- Galeria fim -->
     
    <!-- Inicio equipe -->

    @include('site.home.agendamento
    ')


    <!-- equipe fim -->
    
    <!-- Eventos inicio -->

    @include('site.home.equipe')

    <!-- eventos fim -->

    <!-- Cardápio inicio -->
    @include('site.home.produto')

    <!-- Cardápio fim -->





    <!-- Depoimentos inicio -->

    @include('site.home.localizacao')

    <!-- Depoimentos Fim -->

@endsection

