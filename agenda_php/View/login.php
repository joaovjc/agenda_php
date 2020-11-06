<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Agenda PHP</title>
    <!-- CSS do Bootstrap e CSS customizado -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once "include/menu.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col-lg-4">
                <h3>Efetuar Login</h3>

                <form>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Informe seu E-mail" required>
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="senha" placeholder="Informe sua Senha" required>
                            <div class="input-group-addon" onmouseover="mouseOver(this)" onmouseout="mouseOut(this)">
                                <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABDUlEQVQ4jd2SvW3DMBBGbwQVKlyo4BGC4FKFS4+TATKCNxAggkeoSpHSRQbwAB7AA7hQoUKFLH6E2qQQHfgHdpo0yQHX8T3exyPR/ytlQ8kOhgV7FvSx9+xglA3lM3DBgh0LPn/onbJhcQ0bv2SHlgVgQa/suFHVkCg7bm5gzB2OyvjlDFdDcoa19etZMN8Qp7oUDPEM2KFV1ZAQO2zPMBERO7Ra4JQNpRa4K4FDS0R0IdneCbQLb4/zh/c7QdH4NL40tPXrovFpjHQr6PJ6yr5hQV80PiUiIm1OKxZ0LICS8TWvpyyOf2DBQQtcXk8Zi3+JcKfNafVsjZ0WfGgJlZZQxZjdwzX+ykf6u/UF0Fwo5Apfcq8AAAAASUVORK5CYII=" id="olho"/></i></a>
                            </div>
                        </div>
                        <script>
                            function mouseOver() {
                                document.getElementById('senha').type = 'text';
                            }

                            function mouseOut() {
                                document.getElementById('senha').type = 'password';
                            }
                        </script>
                    </div>
                    <button id="login" onclick="efetuarLogin()" type="button" class="btn btn-primary">Entrar</button>
                </form>

                <div id="status"></div>
            </div>

            <div class="col"></div>
        </div>
    </div> <!-- fecha /container -->

    <!-- jQuery (online) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript customizado -->
    <script src="js/scripts.js"></script>
</body>
</html>