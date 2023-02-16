    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Desafio Renê</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($aViewVar['nameController'] == "") { ?> class="active" <?php } ?>><a href="/" >Home</a></li>
                        <li <?php if ($aViewVar['nameController'] == "ProdutoController") { ?> class="active" <?php } ?>
                                class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/produto/index">Listar</a></li>
                                <li><a href="/produto/cadastrar">Cadastrar</a></li>
                            </ul>
                        </li>

                        <li <?php if ($aViewVar['nameController'] == "CategoriaController") { ?> class="active" <?php } ?>
                                class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/categoria/index">Listar</a></li>
                                <li><a href="/categoria/cadastrar">Cadastrar</a></li>
                            </ul>
                        </li>

                        <?php  if(\App\Lib\Auth::usuario()->perfil == "A"){ ?>
                            <li <?php if ($aViewVar['nameController'] == "UsuarioController") { ?> class="active" <?php } ?>
                                    class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Usuários <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/usuario/index">Listar</a></li>
                                    <li><a href="/usuario/cadastrar">Cadastrar</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
