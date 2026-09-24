<section class="produto">
      <header class="parallax-padrao">
        <h2>
          Produto | {{$categoriaSelecionada->nome_categoria}}
        </h2>

        
        
        
          <nav class="teste">
            @foreach($listaCategorias as $linha)
              <ul class="botao-categorias">
                  <li>
                      <a href=" {{route('produto.categoria',$linha->id_categoria)}} ">{{$linha->nome_categoria}}</a>
                  </li>
              </ul>
            @endforeach
          </nav>
               
      </header>
      <div class=" site card-produto">

        @foreach($produtos as $linha)

        <div class="card-flip wow animate__animated animate__flipInX animate__delay-1s">
   
           <article class="card-flip-miolo">
             <div class="flip1">
               <h4>{{$linha->nome_produto}} </h4>
             </div>
             <div class="flip2">
               <h4>
                 {{$linha->nome_produto}}  <span> R$ {{number_format($linha->preco_produto, 2,  ',', '.')}}</span>
               </h4>
               <h5>
                 {{$linha->descricao_produto}}
               </h5>
   
             </div>
             
           
           </article>
   
        </div>

        @endforeach


      </div>
      
      <!-- <div class="site btn-produto">
        <a class="btn" href="#">Veja mais</a>
      </div> -->
     
     </section>