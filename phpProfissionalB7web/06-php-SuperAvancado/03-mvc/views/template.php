<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
</head>
<body>
    <a href="<?php echo BASE_URL;?>"> Home</a>
    <a href="<?php echo BASE_URL.'galeria'; ?>">Galeria</a>
    <h1>Este é o topo</h1>
    <hr>
    
    <?php $this->loadViewInTemplate($viewName, $viewData)?>

</body>
</html>