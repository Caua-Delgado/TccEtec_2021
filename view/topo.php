<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <!-- adicionando imagem -->
            <nav class="navbar navbar-dark bg-dark">
                <div class="container"> 
                    <a class="navbar-brand" href="#">
                        <img src="view/imagens/logoTcc .png" alt="" width="200" height="50"> 
                        <!-- <h3>CADÊ VOCÊ?</h3> -->
                    </a>
                </div> 
            </nav>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>

                    <!-- PAGINA HOME -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=inicial"><h3>Início</h3></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>

                    <!-- PAGINA QUEM SOMOS -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=quemSomos"><h3>Quem Somos</h3></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>


                </ul>

                <form class="d-flex">
                    <button class="btn btn-outline-success" type="button"><a class="nav-link active" href="index.php?classe=usuarioController&metodo=abrir_login">Entrar</a></button>
                </form>
                &nbsp &nbsp
                <form class="d-flex">
                    <button class="btn btn-outline-success" type="button"><a class="nav-link active" href="index.php?classe=usuarioController&metodo=abrir_cadastro">Cadastre-se agora!</a></button>
                </form>
                
            </div>
            
        </div>
   
    </nav>