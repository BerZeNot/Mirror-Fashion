    <?php 
        $titulo_pagina = "Sobre";
        $tipo_folha_estilo = "stylesheet";
        $folha_de_estilo = "css/sobre.css";
        include("cabecalho.php");
    ?>
    <article class="container links">
        <!-- Primeira section -->
        <section class="espaçamento_linhas">
            <h1 id="main_title">
                A Mirror Fashion
            </h1>
            <p>
                A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. 
                Fundada há <?php print date("Y")-1932; ?>, possui filiais em 124 países, sendo líder de mercado com mais de 90% de 
                participação em 118 deles.
            </p>

            <p>
                Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho" target="_blank">Jacarezinho</a>, no Paraná. De lá, saem 48 aviões que 
                distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
            </p>

            <figure id="centro-distribuicao">
                <img src="img/centro-distribuicao.png" alt="Foto do centro de distribuição da Mirror Fashion">
                <figcaption>Centro de distribuição da Mirror Fashion</figcaption>
            </figure>
            <p>
                Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.html">nossa loja</a> ou entre em contato 
                se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.
            </p>
        </section>
        <!-- Fim da primeira section -->
        <br>
        <iframe width="470" height="440" src="https://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe	width="425" height="440" frameborder="0"
        scrolling="no" marginheight="0" marginwidth="0"
        src="http://maps.google.com.br/maps?q=Jacarezinho&amp;output=embed">
    </iframe>
        <!-- Inicio da segunda section -->
        <section class="espaçamento_linhas">
            <h2 id="historia" class="subtitulos">
                História
            </h2>
            
            <figure id="familia-pelho">
                <img src="img/familia-pelho.jpg" alt="Foto da família Pelho">
                <figcaption>Família Pelho</figcaption>
            </figure>
            
            <p class="no_change">
                A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A 
                <em>família Pelho</em>, tradicional da região, investiu todas as suas economias nessa nova iniciativa, 
                revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão 
                administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado 
                de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
            </p>
            
            <p>
                O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. 
                Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões 
                de usuários diferentes, em bilhões de diferentes pedidos.
            </p>
            
            <p>
                O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do 
                Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do 
                Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e 
                nos escritórios em todo país.
            </p>
            
            <p>
                Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, 
                homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror 
                Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
            </p>
        </section>
        <!-- Fim da segunda section -->

        <!-- Inicio da terceira section -->
        <section class="espaçamento_linhas">
            <h2 id="diferenciais" class="subtitulos">
                Diferenciais
            </h2>
            
            <ul>
                <li> Menor preço do varejo, garantido</li>
                <li> Se você achar uma loja mais barata, leva o produto de graça</li>
                <li> Pague em reais, dólares, euros ou bitcoins</li>
                <li> Todas as compras com frete grátis para o mundo todo</li>
                <li> Maior comércio eletrônico de moda do mundo</li>
                <li> Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
                <li> Presente em 124 países</li>
                <li> Mais de um milhão de funcionários em todo o mundo</li>
        
            </ul>
        </section>
    </article>
    <?php include("rodape.php") ?>
</body>
</html>