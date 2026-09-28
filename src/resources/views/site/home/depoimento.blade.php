<section class="depoimentos">
        <header class="parallax-padrao">
          <h2>
            Depoimentos
          </h2>

          <h3>
            Avaliações do nossos serviços!
          </h3>

        </header>
        
    <div class="site cardDepo">
          
        @ForElse ($listaDepo as $linha)

      @php

        // garantir que as estrelas fiquem entre 0 a 5
        $estrela = max(
          0,
          min(5,(int) $linha->nota_depoimento)
        );



        // Cliente relacionado com o depoimento
        $cliente = $linha->DepoimentoCliente;
            
      @endphp
         
         <article class="itensDepo">

         <div class="estrela">
           <ul>
             @for($i = 1; $i <= 5; $i++)
              <li class = "{{$i <= $estrela ? 'estrela-ativa' : 'estrela-inativa' }}">
               <img src="{{ asset ('jho_barber/assets/estrela_avaliacao.png') }}" alt="{{$i <= $estrela ? 'Estrela preenchida' : 'Estrela não preenchida'}}">
             </li>
             @endfor
  
  
           </ul>
         </div>

   
             
             <img src="{{ asset ('jho_barber/assets/cliente/'. $cliente->foto_cliente) }}" alt="{{ $cliente->nome_cliente }}">
   
             <p>
               {{$linha->descricao_depoimento}}
             </p>
           
           
                <h4>
                 {{ $cliente->nome_cliente }}
               </h4>
               
               <div class="registroDepo">
                
                 
                 <h5 class="textin-data">
                   Data {{ $linha->data_criacao_depoimento ? $linha->data_criacao_depoimento->format('d/m/Y') : 'data não informada'}}
                 </h5>
 
                 <h5>
                  
                 </h5>

               </div>
   
          
         </article>
        @empty
        @endforelse

    </div>
        



     
  



</section>


