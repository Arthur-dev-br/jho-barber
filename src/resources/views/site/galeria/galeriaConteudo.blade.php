
    <section class="galeria">
      <header class="parallax-padrao">
        <h2>
          Galeria
        </h2>
        <h3>
          Veja os resultados de nossos clientes!
        </h3>
      </header>
      <div class="cards-galeria wow animate__animated animate__fadeInUp animated_delay 1s">

        @foreach ($listaGaleria as $linha)
        <article>
          <img src="{{ asset ("jho_barber/assets/$linha->imagem_galeria") }}" alt="{{ $linha->nome_galeria }}">
          
        </article>
        @endforeach
      







      </div>

    </section>




