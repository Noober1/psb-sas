<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$page_title?></title>
        <?=$res_css?>
        <link rel="stylesheet" href="<?=getenv('RES_URL')?>plugins/jq-fakeloader/dist/fakeLoader.min.css">
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    </head>

    <body class="layout-top-nav layout-navbar-fixed" <?=(isset($custom_body_style) ? 'style="'.$custom_body_style.'"' : '')?>>
    <div class="fakeLoader"></div>
    <script src="<?=getenv('RES_URL')?>lte3/jquery/jquery.min.js"></script>
    <script src="<?=getenv('RES_URL')?>plugins/morphing-modal/js/modernizr.js"></script>
    <script src="<?=getenv('RES_URL')?>plugins/jq-fakeloader/dist/fakeLoader.min.js"></script>
    <script>
    var bg = ['#658af8','#42bcf5','#06e38d','#dc3545','#fd7e14','#6610f2'];
    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }
    $.fakeLoader({
        bgColor: bg[getRandomInt(6) + 1],
        spinner: 'spinner'+(getRandomInt(6) + 1)
    });
    </script>
    <?=view($page_content)?>
    <?=$res_js?>
    </body>
</html>