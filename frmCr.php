<?php
include_once "p_frmc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Creature</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div id="app">

        <div class="container">
            <h1 class="text-center"> {{ti}}</h1>
            <div class="row">
                <div class="col-3  border ">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem nulla inventore fugiat
                        necessitatibus facere, dicta ea iusto eius nesciunt sint, molestias laborum recusandae, odio
                        ratione veniam dolores porro repellat voluptatibus.</p>
                </div>

                <div class="col-5 border ">
                    <?php
                    echo $r;
                    ?>
                </div>
                <div class="col-4 border ">
                    <?php
                    echo $r;
                    ?>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="js.js"></script>
</body>

</html>