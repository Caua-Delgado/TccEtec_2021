
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid"> 

            <!-- adicionando imagem -->
            <nav class="navbar navbar-dark bg-dark">
                <div class="container"> 
                    <a class="navbar-brand" href="#"> 
                        <img src="view/imagens/logoTcc .png" alt="" width="200" height="50"> 
                         <!-- CADÊ VOCÊ? -->
                    </a>
                </div> 
            </nav> 

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?classe=desaparecidoController&metodo=abrir_consulta">Consultar Desaparecidos</a>
                    </li>

                    &nbsp &nbsp

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?classe=desaparecidoController&metodo=abrir_cadastro1">Cadastrar Desaparecidos</a>
                    </li>

                </ul>

                <ul class="navbar-nav my-2 my-lg-0">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown">
                            <a class="nav-link active">
                            Olá,&nbsp
                                <?php 
                                    echo $_SESSION["nome_logado"]; 
                                ?>
                            !
                            </a>
                        </button>
                        <div class="dropdown-content">
                            <a href="index.php?classe=usuarioController&metodo=editar">Minha conta</a>
                            <a href="index.php?classe=desaparecidoController&metodo=consultaEspecifica">Minhas publicações</a>
                            <div class="dropdown-divider"></div>
                            <a href="index.php?classe=usuarioController&metodo=sair">Sair</a>
                        </div>
                    </div>
                </ul>

            </div>
    
        </div>
   
    </nav>