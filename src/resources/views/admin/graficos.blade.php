<div class="row">
  {{-- Produtos por categoria --}}
  <div class="col-lg-4">
    <div class="card card-grafico mb-4">
      <div class="card-header">
        <h3 class="card-title">Produtos ativos por categoria</h3>
      </div>
      <div class="card-body">
        <div id="grafico-categorias" role="img" aria-label="Quantidade de produtos ativos em cada categoria"></div>
      </div>
    </div>
  </div>

</div>





{{-- ApexCharts (o CSS já é carregado no head) --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.54.1/dist/apexcharts.min.js"></script>

{{-- Gráficos do dashboard --}}
<script>
    // Cores do tema (a laranja um pouco mais clara que --cor-secundaria-2 para ter contraste com o card marrom)
    const corBarra = '#fca311';
    const corTexto = '#fdb734';
    const corGrade = 'rgba(26, 18, 9, 0.12)';

    // Formata número como dinheiro: R$ 1.234,50
    function formatarReal(valor) {
        return Number(valor).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
    }

    // Arredonda o fim do eixo para um número "redondo" (ex.: 108 -> 150 com marcas de 50; 6,5 -> 7 com marcas de 1)
    function eixoRedondo(valor) {

        let passo = Math.pow(10, Math.floor(Math.log10(valor))) / 2;

        // Quantidades nunca têm marca quebrada
        passo = Math.max(passo, 1);

        // No máximo 8 divisões no eixo
        while (Math.ceil(valor / passo) > 8) {
            passo = passo * 2;
        }

        const max = Math.ceil(valor / passo) * passo;

        return { max: max, divisoes: Math.round(max / passo) };
    }

    // Configuração comum a todos os gráficos
    function configuracaoBase(altura) {
        return {
            chart: {
                type: 'bar',
                height: altura,
                toolbar: { show: false },
                foreColor: corTexto,
                fontFamily: '"Bebas Neue", sans-serif',
                background: 'transparent'
            },
            colors: [corBarra],
            grid: { borderColor: corGrade },
            tooltip: { theme: 'dark' },
            noData: { text: 'Ainda não há dados', style: { color: corTexto } }
        };
    }

    // Gráfico de barras deitadas (usado em 3 gráficos)
    function graficoBarrasDeitadas(elemento, nomeSerie, dados, formatador) {

        const opcoes = configuracaoBase(260);
        const valores = Object.values(dados).map(Number);
        const eixo = eixoRedondo(Math.max(...valores, 1) * 1.3);

        opcoes.series = [{ name: nomeSerie, data: valores }];
        opcoes.xaxis = {
            categories: Object.keys(dados),
            labels: { formatter: formatador },

            // Folga de 30% depois da maior barra para o valor caber ao lado dela
            min: 0,
            max: eixo.max,
            tickAmount: eixo.divisoes
        };
        opcoes.plotOptions = {
            bar: {
                horizontal: true,
                barHeight: '55%',
                borderRadius: 4,
                borderRadiusApplication: 'end',
                dataLabels: { position: 'top' }
            }
        };
        opcoes.dataLabels = {
            enabled: true,
            formatter: formatador,
            offsetX: 36,
            style: { colors: [corTexto] }
        };
        opcoes.tooltip.y = { formatter: formatador };

        new ApexCharts(document.querySelector(elemento), opcoes).render();
    }


    // 1 - Faturamento mensal (colunas)
   // const meses  json($graficoMeses);
//    const opcoesMeses = configuracaoBase(280);

 //   opcoesMeses.series = [{ name: 'Faturamento', data: meses.valores }];
 //   opcoesMeses.xaxis = { categories: meses.rotulos };
 //   opcoesMeses.yaxis = { labels: { formatter: formatarReal } };
//    opcoesMeses.plotOptions = { bar: { columnWidth: '45%', borderRadius: 4, borderRadiusApplication: 'end' } };
 //   opcoesMeses.dataLabels = { enabled: false };
 //   opcoesMeses.tooltip.y = { formatter: formatarReal };

 //   new ApexCharts(document.querySelector('#grafico-meses'), opcoesMeses).render();


    // 2 - Faturamento por forma de pagamento
   // graficoBarrasDeitadas('#grafico-pagamento', 'Faturamento', // json($graficoPagamento), formatarReal);

    // 3 - Produtos mais vendidos (quantidade)
   // graficoBarrasDeitadas('#grafico-mais-vendidos', 'Quantidade vendida', //json($graficoMaisVendidos), function(valor) {
  //      return Number(valor).toLocaleString('pt-BR');
   // });

   // 4 - Produtos ativos por categoria
    graficoBarrasDeitadas('#grafico-categorias', 'Produtos', @json($graficoCategorias), function(valor) {
        return Math.round(valor);
    });
</script>