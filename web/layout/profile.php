<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>Vote Certo</title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/interface.css">

    <!--[if lt IE 9]>
        <script src="/bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body" id="profileInformation">
                            <img src="http://www.camara.gov.br/internet/deputado/bandep/74065.jpg" alt="..." class="img-rounded">
                            <p>
                                Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é
                                muitoam interesanteam. Com eleam ma você vai gerar textuans ha haae.
                                Ha hai. Bem boladoam, bem  boladoam. Bem gozadoam.
                                É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam, vocêam estará
                                concorrendoam a um prêmiam de cem mil reaisam.
                                É por suam contam em riscoamm? Ma va pra lá. Wellintaaammmmmmmmm.
                                Ma! Ao adiquirir o carnêam do Baúam, vocêam estará concorrendoam a
                                um prêmiam de cem mil reaisam. Eu só acreditoammmm.... Vendoammmm.
                                É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3" id="commentFields" placeholder="Deixe o seu comentário sobre este político."></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success col-md-12" id="btnVoteLike">
                                <span class="glyphicon glyphicon-thumbs-up btnVote"></span>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger col-md-12" id="btnVoteDislike">
                                <span class="glyphicon glyphicon-thumbs-down btnVote"></span>
                            </button>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#projects" data-toggle="tab">Projetos</a></li>
                        <li><a href="#commissions" data-toggle="tab">Comissões</a></li>
                        <li><a href="#proposedLaws" data-toggle="tab">Propostas de Leis</a></li>
                        <li><a href="#expenditures" data-toggle="tab">Gastos</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="projects">
                            <p>
                                Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                                interesanteam. Com eleam ma você vai gerar textuans ha haae. Ha hai. Bem boladoam,
                                bem boladoam. Bem gozadoam. É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. É por suam contam em
                                riscoamm? Ma va pra lá. Wellintaaammmmmmmmm. Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. Eu só acreditoammmm....
                                Vendoammmm. É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                                Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                                interesanteam. Com eleam ma você vai gerar textuans ha haae. Ha hai. Bem boladoam,
                                bem boladoam. Bem gozadoam. É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. É por suam contam em
                                riscoamm? Ma va pra lá. Wellintaaammmmmmmmm. Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. Eu só acreditoammmm....
                                Vendoammmm. É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                            </p>
                        </div>
                        <div class="tab-pane" id="commissions">
                            <p>
                                Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                                interesanteam. Com eleam ma você vai gerar textuans ha haae. Ha hai. Bem boladoam,
                                bem boladoam. Bem gozadoam. É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. É por suam contam em
                                riscoamm? Ma va pra lá. Wellintaaammmmmmmmm. Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. Eu só acreditoammmm....
                                Vendoammmm. É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                            </p>
                        </div>
                        <div class="tab-pane" id="proposedLaws">
                            <p>
                                Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                                interesanteam. Com eleam ma você vai gerar textuans ha haae. Ha hai. Bem boladoam,
                                bem boladoam. Bem gozadoam. É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. É por suam contam em
                                riscoamm? Ma va pra lá. Wellintaaammmmmmmmm. Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. Eu só acreditoammmm....
                                Vendoammmm. É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                            </p>
                        </div>
                        <div class="tab-pane" id="expenditures">
                            <p>
                                Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                                interesanteam. Com eleam ma você vai gerar textuans ha haae. Ha hai. Bem boladoam,
                                bem boladoam. Bem gozadoam. É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. É por suam contam em
                                riscoamm? Ma va pra lá. Wellintaaammmmmmmmm. Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. Eu só acreditoammmm....
                                Vendoammmm. É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" id="comments">

                <div class="col-md-12">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Jucicleide da Silva</h3>
                        </div>
                        <div class="panel-body">
                            <img class="media-object" src="image/user-icon.png" alt="...">
                            <p>
                                Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                            </p>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Jucicleide da Silva</h3>
                        </div>
                        <div class="panel-body">
                            <img class="media-object" src="image/user-icon.png" alt="...">
                            <p> Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                                interesanteam. Com eleam ma você vai gerar textuans ha haae. Ha hai. Bem boladoam,
                                bem boladoam. Bem gozadoam. É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. É por suam contam em
                                riscoamm? Ma va pra lá. Wellintaaammmmmmmmm. Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. Eu só acreditoammmm....
                                Vendoammmm. É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                            </p>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Jucicleide da Silva</h3>
                        </div>
                        <div class="panel-body">
                            <img class="media-object" src="image/user-icon.png" alt="...">
                            <p> Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                                interesanteam. Com eleam ma você vai gerar textuans ha haae. Ha hai. Bem boladoam,
                                bem boladoam. Bem gozadoam. É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. É por suam contam em
                                riscoamm? Ma va pra lá. Wellintaaammmmmmmmm. Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. Eu só acreditoammmm....
                                Vendoammmm. É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                            </p>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Jucicleide da Silva</h3>
                        </div>
                        <div class="panel-body">
                            <img class="media-object" src="image/user-icon.png" alt="...">
                            <p> Silvio Santos Ipsum É dinheiram ou não éam? Ma o Silvio Santos Ipsum é muitoam
                                interesanteam. Com eleam ma você vai gerar textuans ha haae. Ha hai. Bem boladoam,
                                bem boladoam. Bem gozadoam. É faciam ou não éam? Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. É por suam contam em
                                riscoamm? Ma va pra lá. Wellintaaammmmmmmmm. Ma! Ao adiquirir o carnêam do Baúam,
                                vocêam estará concorrendoam a um prêmiam de cem mil reaisam. Eu só acreditoammmm....
                                Vendoammmm. É por suam contam em riscoamm? Valendoam um mmilhãoam de reaisammm.
                            </p>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary col-md-12">Carregar mais.</button>
                </div>
            </div>
        </div>

        <script src="/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
            $("#btnVoteLike").on("click", function( event ){

                event.preventDefault();
                $("#btnVoteLike").prop("disabled", true);
                $("#btnVoteDislike").attr("disabled", "disabled");
                $("#commentFields").attr("disabled", "disabled");
            });

            $("#btnVoteDislike").on("click", function(){

                event.preventDefault();

                if ( $("#commentFields").val().length < 1 ){
                    alert("É obrigatório dizer porque não votaria neste político.");
                    return false;
                }

                $("#btnVoteLike").attr("disabled", "disabled");
                $("#btnVoteDislike").attr("disabled", "disabled");
                $("#commentFields").attr("disabled", "disabled");



            });
        </script>
    </body>
</html>