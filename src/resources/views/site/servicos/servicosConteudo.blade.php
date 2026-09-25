<section class="servicos" id="servicos">

```
<div class="container">

    <div class="cabecalho-secao cabecalho-secao--centralizado">
      
        <h2>Nossos serviços</h2>

        <p>
            Confira os serviços disponíveis na Jho Barber.
        </p>
    </div>

    <div class="grade-servicos">

        @forelse($servicos as $linha)

            @if($linha->status_servicos === 'ATIVO')

                <article class="servico">

                    <div class="servico__imagem">

                        @if($linha->imagem_servicos)

                            <img
                                src="{{ asset('jho_barber/assets/servicos/' . $linha->imagem_servicos) }}"
                                alt="{{ $linha->nome_servicos }}"
                            >

                        @else

                            <div class="servico__imagem-vazia">
                                Imagem em breve
                            </div>

                        @endif

                    </div>

                    <h3>
                        {{ $linha->nome_servicos }}
                    </h3>

                    <p class="servico__descricao">
                        {{ $linha->descricao_servicos }}
                    </p>

                    <div class="servico__rodape">

                        <div class="servico__valor">
                            R$ {{ number_format($linha->valor_servicos, 2, ',', '.') }}
                        </div>

                        <button
                            type="button"
                            class="botao-detalhes"
                            data-abrir-detalhes
                            data-nome="{{ $linha->nome_servicos }}"
                            data-descricao="{{ $linha->descricao_servicos }}"
                            data-preco="R$ {{ number_format($linha->valor_servicos, 2, ',', '.') }}"
                            data-imagem="{{ $linha->imagem_servicos ? asset('jho_barber/assets/servicos/' . $linha->imagem_servicos) : '' }}"
                        >
                            Ver detalhes
                        </button>

                    </div>

                </article>

            @endif

        @empty

            <p class="mensagem-vazia">
                Nenhum serviço disponível no momento.
            </p>

        @endforelse

    </div>

</div>
```

</section>

<!-- ====================== MODAL DE SERVIÇO ====================== -->

<div class="modal-servico" data-modal-servico hidden>

```
<div class="modal-servico__fundo" data-fechar-modal-servico></div>

<section
    class="modal-servico__janela"
    role="dialog"
    aria-modal="true"
    aria-labelledby="modal-servico-titulo"
    aria-describedby="modal-servico-descricao"
>

    <button
        class="modal-servico__fechar"
        type="button"
        data-fechar-modal-servico
        aria-label="Fechar detalhes"
    >
        ×
    </button>

    <div class="modal-servico__imagem">

        <img
            data-modal-servico-imagem
            src=""
            alt=""
        >

        <div
            class="modal-servico__imagem-vazia"
            data-modal-servico-sem-imagem
            hidden
        >
            Imagem em breve
        </div>

    </div>

    <div class="modal-servico__conteudo">

        <h2
            id="modal-servico-titulo"
            data-modal-servico-titulo
        ></h2>

        <p
            id="modal-servico-descricao"
            data-modal-servico-descricao
        ></p>

        <p
            class="modal-servico__preco"
            data-modal-servico-preco
        ></p>

        <button
            type="button"
            class="botao-detalhes"
            data-fechar-modal-servico
        >
            Fechar
        </button>

    </div>

</section>
```

</div>
<!-- ======================== FIM DO MODAL ======================== -->
