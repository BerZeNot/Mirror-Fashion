<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font/css/open-iconic-bootstrap.css">
    <title>Checkout Mirror Fashion</title>
</head>
<body>
    <?php
        $id_produto = $_POST['id'];
        $conexao = mysqli_connect("127.0.0.1", "root", "", "dados");
        $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id=$id_produto");
        $produto = mysqli_fetch_array($dados);
          
    ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">Mirror Fashion</a>

            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav ajuste-navbar">
                    <li class="nav-item active">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perguntas frequentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entre em contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Ótima escolha!</h1>
            <p class="lead">
                Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2>Sua compra</h2>
                    </div>

                    <div class="card-body">
                        <img src="img/produtos/foto<?= $produto['id']?>-<?= $_POST['cor']?>.png" alt="<?= $produto['nome']?>" class="img-thumbnail mb-3">
                        <dl>
                            <dt>Cor</dt>
                            <dd><?= $_POST['cor'] ?></dd>

                            <dt>Tamanho</dt>
                            <dd><?= $_POST['tamanho'] ?></dd>

                            <dt>Produto</dt>
                            <dd><?= $produto['nome'] ?></dd>

                            <dt>Preço</dt>
                            <dd id="preco"><?= $produto['preco'] ?></dd>
                        </dl>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="qtd">Quantidade:</label>
                            <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="total">Total:</label>
                            <output for="qtd preco" id="total" class="form-control"><?= $produto['preco']?></output>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xl-9">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <legend>Dados pessoais</legend>

                                <div class="form-group">
                                    <label for="nome">Nome completo</label>
                                    <input type="text" class="form-control" name="nome" id="nome" autofocus required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cpf">CPF</label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
                                    <label for="newsletter" class="custom-control-label">Quero receber Newsletter da Mirror Fashion</label> 
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <legend>Cartão de crédito</legend>

                                <div class="form-group">
                                    <label for="numero-cartao">Número - CVV</label>
                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <input type="text" class="form-control" name="numero-cartao" id="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="bandeira-cartao">Bandeira</label>
                                        </div>
                                        <select class="custom-select" id="bandeira-cartao">
                                            <option disabled selected>Selecione uma  opção...</option>
                                            <option value="master">MasterCard</option>
                                            <option value="visa">VISA</option>
                                            <option value="amex">American Express</option>
                                        </select>
                                </div>
                                </div>

                                <div class="form-group">
                                    <label for="validade-cartao">Validade</label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-date">
                                            <input type="month" class="form-control" name="validade-cartao" id="validade-cartao">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">
                        <span class="oi oi-thumb-up"></span>
                        Confirmar Pedido
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/inputmask-plugin.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/total.js"></script>
</body>
</html>