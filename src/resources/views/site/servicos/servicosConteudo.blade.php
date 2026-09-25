 @extends('layout.site')

 @section('content')

  <section class="servicos">
      <header class="parallax-padrao">
        <h2>
          Nossos Serviços
        </h2>
        <h3>
          confira a variedade de trabalhos oferecidos em nosso local
        </h3>

      </header>

      <div class="site card-produtos">
        @foreach ($servicos as $linha)

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv">
              <h4>{{ $linha->nome_servicos}} </h4>
            </div>
            <div class="flip2">
              <h4>
                {{ $linha->nome_servicos}} <span>R$ {{ number_format ($linha->valor_servicos, 2, ',', '.') }}</span></h4>
            
              <h5>
                {{ $linha->descricao_servicos }}
              </h5>

            </div>

          </article>
        </div>

        @endforeach

      </div>

    </section>
   @endsection
