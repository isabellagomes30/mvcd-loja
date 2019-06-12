<html>
    <head>
        <title>template MVC</title>
        <meta charset="utf-8">
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
      <a href="./cliente/listarClientes">Usuario</a>
      <a href="./produto/listarProdutos">Produto</a>
      <a href="./categoria/listarCategorias">Categoria</a>

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
