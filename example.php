<!--html-->
<!doctype html>
<html lang="en-US">

<head>
    <title>Webpage Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>

    <style>
        .particle-set-square {
            width: 500px;
            height: 500px;
            background: transparent;
            top: 100px;
            position: absolute;
            left: 100px;
        }

        .red-particle {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            transition: all 0.5s;
            background: red;
            transform: translateX(-50%) translateY(50%);
            bottom: 0;
        }

        .square_0 {
            transform: rotate(-45deg);
            transition: all linear 0.5s;
        }

        .square_0:hover {
            transform: rotate(-135deg);
        }

    </style>
</head>

<body>
    <div class="clearfix"></div>
    <section id="section-home1" class="container-fluid p-lr-none p-tb-md">
        <div class="container">
            <div class="particle-set-square square_0">
                <div class="red-particle"></div>
            </div>

            <div class="clearfix"></div>
            <?php include '_partial/footer-scripts.php' ?>

        </div>
    </section>
</body>

</html>
<!--style-->
