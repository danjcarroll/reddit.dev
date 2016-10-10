<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }ß
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Roll the Bones</div>
                <h1>Fate gave you...</h1>
                <div class="title"><?=$roll?></div>
                <h1>You guessed...</h1>
                <div class="title"><?=$guess?></div>
                <?php if ($roll == $guess) :?>
                	<h2>You guessed well</h2>
                <?php else : ?>
                	<h2>You guess poorly</h2>
                <?php endif;?>
            </div>
        </div>
    </body>
</html>
