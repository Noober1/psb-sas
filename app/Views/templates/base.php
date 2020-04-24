<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$page_title?></title>
        <?=$res_css?>
    </head>

    <body class="layout-top-nav layout-navbar-fixed" <?=(isset($custom_body_style) ? 'style="'.$custom_body_style.'"' : '')?>>
    <div class="fakeLoader"></div>
    <script src="<?=getenv('RES_URL')?>lte3/jquery/jquery.min.js"></script>
    <script src="https://static.smkbintarjalancagak.sch.id/plugins/animatedModal/animatedModal.min.js"></script>
    <?=view($page_content)?>
    <?=$res_js?>
    </body>
    <script>$.fakeLoader({
        bgColor: '#42bcf5',
        spinner: 'spinner6'
    });</script>
</html>