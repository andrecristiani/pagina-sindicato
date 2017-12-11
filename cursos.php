<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sindicato Rural de Itápolis</title>
        <!--<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/anderson.css"/>--><!--ligação com arquivo CSS-->
        <!--<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/andre.css"/>-->
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/style.css"/>
        <script src="lib/jquery/jquery.min.js"></script>
    </head>
    <body>
        <!-- Cabeçalho -->
        <header class="nav navbar-fixed-top">
            <!--modelo de menu 2-->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="img/logof.png" class="logotipo"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">home<span class="sr-only">(current)</span></a></li>
                            <li><a href="oSindicato.html">O Sindicato</a></li>
                            <li><a href="cursos.html">Cursos</a></li>
                            <li><a href="cotacoes.html">Cotações</a></li>
                            <li><a href="galeria.html">Galeria</a></li>
                            <li><a href="associese.html">Associe-se</a></li>
                            <!--EXEMPLO dropdown
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="buttonLogin">
                                <button type="button" class="btn btn-default navbar-btn" data-container="body" data-toggle="popover" data-placement="bottom" data-original-title="" title="">Login</button>
                            </li>
                                <div id="popover_content_wrapper" style="display: none">
                                    <form action="" role="form">
                                        <div class="form-group">
                                            <label for="user">Usuário</label>
                                            <input type="text" class="form-control" id="user" placeholder="Usuário" />
                                            <label for="password">Senha</label>
                                            <input type="password" class="form-control" id="password" placeholder="Senha" />
                                        </div>
                                        <button type="submit" class="btn btn-default"><a href="areaUsuario.html">Sign in</a></button>
                                    </form>
                                </div>
                        </ul>
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Digite sua pesquisa...">
                            </div>
                            <button type="submit" class="btn btn-default">Pesquisar</button>
                        </form>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!--//fim modelo menu 2-->
        </header>
        <!-- /cabeçalho -->

        <div class="container container-cursos">
            <section class="cursos">
                <div class="container">
                    <div class="col-xs-12 col-sm-6">
                        <h1>Próximos cursos:</h1>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar curso...">
                            </div>
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="container">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img style="height:200px; width: 300px;" src="http://www.sritapetininga.com.br/imagens/materias/operacao-e-manutencao-de-tratores-agricolas.jpg" alt="Operação e Manutenção de Tratores">
                            <div class="caption">
                                <h3>Operação e Manutenção de Tratores</h3>
                                <p>Período: 24 e 25 de Julho</p>
                                <p><a href="#" class="btn btn-primary" role="button">Mais informações</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 nav-paginas">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </section>
        </div>
        
        <!--Rodapé-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <h1>Menu</h1>
                        <nav class="menuRodape">
                            <ul class="nav">
                                <li class="linksRodape"><a href="cursos.html"><i class="fa fa-angle-right"></i> Cursos</a></span></li>
                                <li class="linksRodape"><a href="cotacoes.html"><i class="fa fa-angle-right"></i> Cotações</a></li>
                                <li class="linksRodape"><a href="galeria.html"><i class="fa fa-angle-right"></i> Galeria</a></li>
                                <li class="linksRodape"><a href="associese.html"><i class="fa fa-angle-right"></i> Associe-se</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <h1>Contato</h1>
                        <address>
                            <span class="glyphicon glyphicon-map-marker"></span><span> Odilon Negrão, 578<br>Itápolis-SP</span>
                        </address>
                        <div class="tel">
                            <span class="glyphicon glyphicon-earphone"></span><span> (16) 3262-1234</span>
                        </div>
                        <div class="tel">
                            <span><i class="fa fa-fax" aria-hidden="true"></i> (16) 3262-1234</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <h1>Redes Sociais</h1>
                        <address> 
                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i> sritapolis@uol.com.br</span>
                        </address>
                        <div class="icones-sociais">
                            <p href="#" target="_blank"><i class="fa fa-facebook"></i> srItápolis</p>
                            <p href="#" target="_blank"><i class="fa fa-twitter"></i> @srItápolis</p>
                            <p href="#" target="_blank"><i class="fa fa-instagram"></i> srItápolis</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <img src="img/logor.jpg">
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                <p>© Zavério&Cristiani</p>
            </div>
        </footer>
        <!--Rodapé-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>