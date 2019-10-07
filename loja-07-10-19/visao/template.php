<html>
    <head>
        <title>World of books</title>
        <meta charset="utf-8">
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./publico/css/app.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      .mySlides {display:none;}
    </style>
        
    </head>
    <body class="container">
	  
<img id="logo"src="publico/imgs/logo.png" alt="imagemlogo">
        <div id="lista"> 
          <nav class="menu">
			<ul>
				<li><a href="//localhost/loja">Home</a></li>
                               
                                <?php if (acessoPegarPapelDoUsuario() == 'Adm') { ?>

				<li>Administrador
					<ul>
                                                <li>Usuário
                                                    <ul>
                                                       <li><a href="./cliente/listarClientes">Listar</a></li> 
                                                    </ul>
                                                </li>
						<li>Produto
                                                    <ul>
                                                       <li><a href="./produto/listarProdutos">Listar</a></li> 
                                                    </ul>
                                                </li>
                                                <li>Categoria
                                                     <ul>
                                                       <li><a href="./categoria/listarCategorias">Listar</a></li> 
                                                    </ul>
                                                </li>
                                                <li>Forma de Pagamento
                                                    <ul>
                                                       <li><a href="./formapagamento/listarFormaPagamento">Listar</a></li> 
                                                    </ul>
                                                </li>
                                                <li>Cupom
                                                    <ul>
                                                       <li><a href="./cupom/listarCupom">Listar</a></li> 
                                                    </ul>
                                                </li>
                                                
                                        </ul>
                                </li>
                                <?php } ?>

                                <li><a href="cliente/ver/<?=acessoPegarUsuarioLogado();?>"> Minha Conta </a></li>
                                <li><a href="./login/logout"> Logout</a></li>
                        </ul>
         </nav>
        <nav class="menu">
            <ul>
                <li><img id="logousuario"src="publico/imgs/logousuario.png" alt="imagemlogo">
                    <ul>
                        <li><a id= "usuario-menu" href="./login/">Entre</a><a id= "usuario-menu" href="./cliente/cadastro">Cadastre-se</a></li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
            <a id= "usuario-menu" href="./login/"><img id="logousuario"src="publico/imgs/logousuario.png" alt="imagemlogo"></a>
            <a id= "carrinho-menu" href="./sacola/mostrar"><img id="logocar"src="publico/imgs/logocar2.png" alt="imagemlogo"></a>
        </div>
    
      
          <form action="./busca/pesquisar" method="POST">
              <div id="Caixabusca">
            <input type="text" id="txtBusca" placeholder="Pesquisar" name="pesquisar" required="">
            <button id="btnBusca">Busca</button> 
          </form>
      </div>

 
      
        


        <main class="container">
            <?php require $viewFilePath; ?>
            
        </main>


<div id="rodape">
	  
        <div id="esquerda">
          <h3 class="lorem-rodape">Lorem ipsum dolor</h3> 
          <p class="parag-rodape">Sed ut perspiciatis unde<br>
		  omnis iste natus error sit<br>
		  voluptatem accusantium<br>
		  doloremque laudantium,<br>
		  totam rem aperiam, eaque<br> 
		  ipsa quae ab illo inventore</p>
        </div>
        <div id="centro">
          <h3 class="lorem-rodape">Lorem ipsum dolor</h3> 
          <p class="parag-rodape">Sed ut perspiciatis unde<br>
		  omnis iste natus error sit<br>
		  voluptatem accusantium<br>
		  doloremque laudantium,<br>
		  totam rem aperiam, eaque<br> 
		  ipsa quae ab illo inventore</p>
        </div>
        <div id="direita">
          <h3 class="lorem-rodape">Lorem ipsum dolor</h3> 
          <p class="parag-rodape">Sed ut perspiciatis unde<br>
		  omnis iste natus error sit<br>
		  voluptatem accusantium<br>
		  doloremque laudantium,<br>
		  totam rem aperiam, eaque<br> 
		  ipsa quae ab illo inventore</p>
        </div>
        
       	
    
        <div id="endereco">
          <p id="p1">Endereço: Av. João Olímpio de Oliveira, 1561 - Vila Asem, Itapetininga - SP, 18202-000</p> 

        </div>
        <div id="icones">

          <div id="instagram">
            <a href="https://www.instagram.com/"
               target="_blank"><img id="insta" src="publico/imgs/instagram.jpg" style="margin-top: 1%"></a>

          </div>
          <div id="googleplus">
            <a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
               target="_blank">
                <center><img src="publico/imgs/gplus.svg" style="margin-top: 15%"></center></a>

          </div>
          <div id="twitter">
            <a href="https://twitter.com/login?lang=pt"
               target="_blank">
              <center><img src="publico/imgs/twitter.svg" style="margin-top: 15%"></center></a>
          </div>

          <div id="facebook">
            <a href="https://pt-br.facebook.com/"
               target="_blank"> <center>
                    <img src="publico/imgs/facebook.svg" style="margin-top: 15%"></center></a>
          </div>
          
       </div>
	</div>
    </body>
</html>
