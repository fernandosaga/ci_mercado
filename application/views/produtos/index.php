<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css") ?>">
</head>
<body>
    <div class="container">
    <h1>Produtos</h1>
        <table class="table">
        <?php foreach ($produtos as $produto):?>
            <tr>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['preco']?></td>
            </tr>
        <?php endforeach?>
        </table>
    </div>
</body>
</html>