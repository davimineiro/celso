<!DOCTYPE html>
<html>
  <head>
    <html lang="pt-br">
    <title>Loja de Autopeças</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Links que possibiltam o bootstrap no Carrosel-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
  </head>
  
    <header>
      <h1>Loja de Autopeças<div id="imagemTitulo"></div></h1>
    </header>
  
  
  <body>

    <div>
    <main>
      <table><!--Um carrosel com setas de passar e voltar a imagem, usando bootstrap-->
        <div class="container-fluid">
          <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
                     
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"></button>
                </div>                       
              <div class="carousel-inner">
              <div class="carousel-item active">
                      <img src="Imagens/Suspensao.jpg" class="d-block w-100" alt="Suspensao">
                      <div class="carousel-caption d-none d-md-block">
                          <h2>Suspensões</h2>
                      </div>
                  </div>
              
                  <div class="carousel-item  ">
                      <img src="Imagens/Pneu.jpg" class="d-block w-100" alt="Pneu">
                      <div class="carousel-caption d-none d-md-block">
                          <h2>Pneus</h2>
                      </div>
              </div>
                          
                  <div class="carousel-item  ">
                      <img src="Imagens/Motor.jpg" class="d-block w-100" alt="Motor">
                      <div class="carousel-caption d-none d-md-block">
                          <h2>Motores</h2>
                      </div>
                  </div>
              </div>
              <a href="#mainSlider" class="carousel-control-prev" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black;"></span>
                  <span class="sr-only">Anterior</span>
              </a>
              <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
              </a>
  
          </div>
      </div>

      <div class="mei"><h1>Qual foi o MEI escolhido?</h1><!--Especificando qual foi o MEI escolhido-->
      <p>O MEI(microempreendedor individual) escolhido foi o de comerciante de peças e acessórios novos para veículos automotores independentes, de modo mais informal, uma loja de autopeças (4530-7/0), seguindo todos os requisitos e normas de um MEI.
      <a href="https://www.gov.br/empresas-e-negocios/pt-br/empreendedor/quero-ser-mei/atividades-permitidas">Ocupações Permitidas — Empresas & Negócios</a> 
      </p>

      <h1>Qual o problema que nosso produto tenta resolver?</h1><!--Especificando qual o problema que resolvemos-->

      <p>O problema é a falta de informação sobre os produtos da loja, que geram perda de tempo para o cliente, onde há casos que podem gerar viagens desnecessárias para a loja quando não é encontrado o que se procura. De modo que criamos um site que mostra o estoque da loja e podendo até fazer pedidos para reserva do produto.</p>

      </div>
      
      <div id="video"><!--Área do video no youtube com o pitch-->
      <iframe width="560" height="315" src="https://www.youtube.com/embed/pASPr7qgOz0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

      <div class="mei"><!--Especificando como o problema funciona-->

        <h1>Como o produto vai funcionar?</h1>

        <p>O produto tem como ideia principal o cliente não perder tempo indo na loja sem ter certeza de que o item estará lá, isso funcionará com algum funcionario da loja botando a quantidade dos itens no site e irá alterando toda vez que vende ele ou chega um novo carregamento, assim não terá um problema do cliente ficar com desgosto da loja e voltar mais vezes.</p>

      </div>

      <p id="estoqueTitulo">Estoque de Peças</p> <!--Tabela com PHP onde a quantidade de itens de cada produto vai ficar alterando usando a outra página de alterar itens-->
         
          <tr style="background-color: #6E6E6E;">
          <td style="padding-right:20px" >Pneus</td>
            <td style="padding-right:10px">Quantidade</td>
            <td style="padding-right:60Spx;">
          
            <?php 
            $pneus = $_GET["pneus"];

            echo "$pneus";
            
            ?>
          
          </td>
          </tr>


          <tr >
          <td style="padding-right:20px" >Suspensão</td>
            <td>Quantidade</td>
            <td>

              <?php 

                $suspensao = $_GET["suspensao"];

                echo "$suspensao";


              ?>

            </td>
          </tr>


          <tr style="background-color: #6E6E6E;">
          <td>Motor</td>
            <td>Quantidade</td>
            <td><?php 

            $motor = $_GET["motor"];

            echo "$motor";


            ?></td>
          </tr>


        </tbody>
        
      
    <button><a href="editarItens.html">Editar Quantidade de Itens</a></button><!--Botão que leva para a outra página que edita os itens-->
      </table>
      
    </main>
    

      <body> 
  
  
  </div>
      <footer> 

 <p id="textpFooter"> Direitos &copy Autorais </p>

      </footer>
      
 
  
  </body>
</html>