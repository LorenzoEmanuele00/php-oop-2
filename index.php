<?php 
include_once __DIR__ . '/database/db.php';

try
{
    echo 'Pagamento in corso</br>';
    $user1->checkMoney($cart);
    echo 'Pagamento riuscito';
}
catch (Exception $e)
{
    echo 'errore';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <h1 class="my-4">CATALOGO</h1>
        <div class="row row-cols-4">
            <?php foreach($catalog as $prod) {?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4><?php echo $prod->getProdName(); ?></h4>
                            <div>
                                <i class="<?php echo $prod->getCategory()->getIcon(); ?>"></i>
                                <span> <?php echo $prod->getCategory()->getName(); ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>