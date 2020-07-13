<?php $page = 'animacao'; include '../include/nossosLinksTop.php' ;?>
<?php $page = 'animacao'; include '../include/header.php';?>
<div class="container" id="inicio">
     <div class="row containerImagem">
        <div class=" col-12">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <img id="expandedImg">
        <div id="imgtext"></div>
    </div>
     </div>
    <section class="animacaoGaleria">
    <h2 class=" text-center animacaoh1">Galeria de Imagens Animação digital</h2>
        <div class=" row imagensGaleria">
            <div class=" col-lg-3 galeria ">
                <a><img src="../imagem/animacao/animacaoAlvyRaySmith.webp" alt="Foto de Alvy Ray"  onclick="aumetaImagem(this);"></a>
                <a><img src="../imagem/animacao/animacaoWalter.webp" alt="Imagem de walter criador do desenho pica-pau" onclick="aumetaImagem(this);"></a>
            </div>
            <div class=" col-lg-3 galeria ">
                <a><img src="../imagem/animacao/animacaoWallt.webp" alt="Imagem de WALT DISNEY " onclick="aumetaImagem(this);"></a>
                <a><img src="../imagem/animacao/animacaoMax.webp" alt="MAX FLEISCHER inventor do  o Rotoscópio." onclick="aumetaImagem(this);"></a>
            </div>
            <div class=" col-lg-3 galeria ">
                <a><img src="../imagem/animacao/animacaoWilson.webp" alt="Winsor McCay Sua técnica para desenhar era tão apurada, tão diferente, que serviria como base para diversos animadores que surgiriam depois como Tex Avery, Walter Lantz, até mesmo Walt Disney." onclick="aumetaImagem(this);" ></a>
                <a><img src="../imagem/animacao/animacaoHayao.webp" alt="Hayao Miyazaki Começou a desenhar em 1958, quando fazia Ciências Políticas e Economia na Universidade Gakushuin" onclick="aumetaImagem(this);" ></a>

                
            </div>
            <div class=" col-lg-3 galeria ">
                <a><img src="../imagem/animacao/animacaoSteve.webp" alt="Imagem de Steve Jobs quando tornou-se o maior acionista individual da Disney" onclick="aumetaImagem(this);"></a>
                <a><img src="../imagem/animacao/animacaoJohnAlanLasseter.webp" alt="Imagem de John Alan Lasseter conhecido por ser o diretor de criação da Pixar, Walt Disney Animation Studios" onclick="aumetaImagem(this);" ></a>
                <a><img src="../imagem/animacao/animacaoDupla.webp" alt="Fot de William Hanna e Joseph Barbera dupal que criou tom e jerry" onclick="aumetaImagem(this);"></a>
            </div>
            <script type="text/javascript">
                    function aumetaImagem(imgs) 
                    {
                        var expandImg = document.getElementById("expandedImg");
                        var imgText = document.getElementById("imgtext");
                        expandImg.src = imgs.src;
                        imgText.innerHTML = imgs.alt;
                        expandImg.parentElement.style.display = "block";
                    }
            </script>
    </section>
</div>
<?php include '../include/footer.php'?>
<?php include '../include/nossosLinksBotom.php' ?>