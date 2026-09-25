<!-- CONTEÚDO CONTATO -->
        <section class="contato-form">
      <div class="contato-badge  wow animate__animated animate__fadeInDown">
        <h3>JHO'S BARBERSHOP</h3>
        <p>Entre em contato conosco</p>
      </div>

      <h2>FORMULÁRIO DE CONTATO</h2>

       <!-- FORM -->
                <div class="form-contato" id="formulario">

                    {{-- Retorno do envio (a mensagem chega no dashboard em "Mensagens") --}}
                    @if (session('sucesso'))
                        <p class="aviso-form aviso-sucesso" role="status">{{ session('sucesso') }}</p>
                    @endif

                    @if (session('erro'))
                        <p class="aviso-form aviso-erro" role="alert">{{ session('erro') }}</p>
                    @endif

                    @if ($errors->any())
                        <p class="aviso-form aviso-erro" role="alert">{{ $errors->first() }}</p>
                    @endif

                    <form action="{{ route('contato.store') }}" method="POST">

                     <div class="campos-dupla">
                        <div class="linha-dupla linha-topo wow animate__animated animate__fadeInUp">

                            
                            <div>
                                <input type="text" name="nome" placeholder="Nome Completo*: " maxlength="50" required
                                value="{{ old('nome') }}">
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="E-mail*: " maxlength="80" required
                                value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="linha-dupla linha-baixo wow animate__animated animate__fadeInUp">
                            <div>
                                <div>
                                    <input type="tel" name="fone" placeholder="Telefone: " maxlength="14"
                                    value="{{ old('fone') }}">
                                </div>
                                <div>
                                    <select name="assunto" required>
                                        <option value="" disabled @selected(!old('assunto')) hidden>Selecione o assunto</option>
                                        @foreach ($assuntos as $assunto)
                                        <option value="{{ $assunto }}" @selected(old('assunto') === $assunto)>{{ $assunto }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div>
                            <textarea name="mens" cols="30" rows="10" placeholder="Digite sua mensagem" maxlength="2000" required>{{ old('mens') }}</textarea>
                        </div>
                        <div class="botoes-form wow animate__animated animate__fadeInUp">
                            <button class="btn" type="submit">Enviar Mensagem</button>
                            <button class="btn" type="reset">Limpar</button>
                        </div>

                        {{-- Token no final: o CSS do formulário usa a posição dos campos (nth-child) --}}
                        @csrf

                    </form>



                </div>

                 <div class="contato-blocos">
        <article class="contato-bloco wow animate__animated animate__fadeInLeft">
          <h3>Nosso Telefone</h3>
          <p>11 95887-1348</p>
        </article>

        <article class="contato-bloco wow animate__animated animate__fadeInRight">
          <h3>Nosso endereço</h3>
          <p>Av. João Batista Santiago,<br> 1397, Itaim Paulista.</p>
        </article>

        <article class="contato-bloco wow animate__animated animate__fadeInLeft">
          <h3>Nosso e-mail</h3>
          <p>Jhosbarbershop@gmail.com</p>
        </article>

        <article class="contato-bloco wow animate__animated animate__fadeInRight">
          <h3>Siga-nos</h3>
          <ul class="rede-social">
            <li><a href="https://wa.me/5511958871348" target="_blank"><img src="{{ asset('jho_barber/assets/whatsapp-24.png')}}"
                  alt="Logo do whatsapp 60x60"></a></li>
            <li><a href="https://www.facebook.com/jhosbarbershop/" target="_blank"><img src="{{ asset('jho_barber/assets/facebook-24.png')}}"
                  alt="Logo do facebook 60x60"></a></li>
            <li><a href="https://www.instagram.com/jhos_barbershop/" target="_blank"><img src="{{ asset('jho_barber/assets/instagram-24.png')}}"
                  alt="Logo do instagram 60x60"></a></li>
          </ul>
        </article>
      </div>


            
    </section>