<!DOCTYPE html>
<html>
    <head>
        <title>PDF</title>
        <?php

        use Cake\Routing\Router;
        ?>
        <style>
            @page {
                margin-top: 50px !important;
                margin-bottom: 50px !important;
                margin-right: 50px !important;
                margin-left: 50px !important;
                padding: 0px 0px 0px 0px !important;
            }
            body{
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
    <body>
        Hello<br/>
        <?= $title; ?>
        <br/>
<?= $body; ?>
    </body>
</html>