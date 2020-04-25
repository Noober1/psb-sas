<?php namespace Config;

class Custom extends \CodeIgniter\Config\BaseConfig
{
    public $foo  = 'This is foo';
    public $bar = 'This is bar';
    
    public function pageTitle($title)
    {
        return $title.($title=='' ? '' : ' | ')."PSB SMK Bina Taruna";
    }

    public function resourceLoader($res=array(),$type='css')
    {
        $ret = '';
        $opt = array(
            'load_lte'          => TRUE,
            'load_fontawesome'  => TRUE,
            'load_ionicons'     => FALSE,
            'load_icheck'       => FALSE,
            'load_datepicker'   => FALSE,
            'load_wow'          => TRUE,
            'load_select2'      => TRUE,
            'load_toast'        => FALSE,
            'load_texteditor'   => FALSE,
            'load_osbar'        => TRUE,
            'load_jscookie'     => FALSE,
            'load_fakeloader'   => TRUE,
            'load_modal'        => FALSE,
            'load_inputmask'    => FALSE,
            'load_pagepilling'     => FALSE,
        );
        $opt = array_merge($opt,$res);
        $css = array(
            'load_lte'          => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte3/lte/css/adminlte.min.css">',
            'load_fontawesome'  => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte3/fontawesome-free-5/css/all.min.css">',
            'load_ionicons'     => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte/Ionicons/css/ionicons.min.css">',
            'load_icheck'       => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte3/icheck-bootstrap/icheck-bootstrap.min.css">',
            'load_datepicker'   => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">',
            'load_wow'          => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte/wowjs/css/libs/animate.css">',
            'load_select2'      => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte3/select2/css/select2.min.css"><link rel="stylesheet" href="'.getenv('RES_URL').'lte3/select2-bootstrap4-theme/select2-bootstrap4.min.css">',
            'load_toast'        => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte3/sweetalert2/dist/sweetalert2.min.css">',
            'load_texteditor'   => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte3/summernote/summernote.min.js">',
            'load_osbar'        => '<link rel="stylesheet" href="'.getenv('RES_URL').'lte/overlayScrollbars/css/OverlayScrollbars.css">',
            'load_jscookie'     => '',
            'load_fakeloader'   => '<link rel="stylesheet" href="'.getenv('RES_URL').'plugins/jq-fakeloader/dist/fakeLoader.min.css">',
            'load_modal'        => '<link rel="stylesheet" href="'.getenv('RES_URL').'plugins/fancybox/dist/jquery.fancybox.min.css">',
            'load_inputmask'    => '',
            'load_pagepilling'     => '<link rel="stylesheet" href="'.getenv('RES_URL').'plugins/page-pilling.js/dist/jquery.pagepiling.min.css">',
        );
        $js = array(
            'load_lte'          => '<script src="'.getenv('RES_URL').'lte3/bootstrap/js/bootstrap.bundle.min.js"></script><script src="'.getenv('RES_URL').'lte3/lte/js/adminlte.min.js"></script>',
            'load_fontawesome'  => '',
            'load_ionicons'     => '',
            'load_icheck'       => '',
            'load_datepicker'   => '<script src="'.getenv('RES_URL').'lte/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>',
            'load_wow'          => '<script src="'.getenv('RES_URL').'lte/wowjs/dist/wow.min.js"></script>',
            'load_select2'      => '<script src="'.getenv('RES_URL').'lte3/select2/js/select2.full.min.js"></script>',
            'load_toast'        => '<script src="'.getenv('RES_URL').'lte3/sweetalert2/dist/sweetalert2.all.min.js"></script>',
            'load_texteditor'   => '',
            'load_osbar'        => '<script src="'.getenv('RES_URL').'lte/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>',
            'load_jscookie'     => '<script src="'.getenv('RES_URL').'lte3/jquery/jquery.cookie.js"></script>',
            'load_fakeloader'   => '<script src="'.getenv('RES_URL').'plugins/jq-fakeloader/dist/fakeLoader.min.js"></script>',
            'load_modal'        => '<script src="'.getenv('RES_URL').'plugins/fancybox/dist/jquery.fancybox.min.js"></script>',
            'load_inputmask'    => '<script src="'.getenv('RES_URL').'plugins/Inputmask/dist/jquery.inputmask.min.js"></script>',
            'load_pagepilling'  => '<script src="'.getenv('RES_URL').'plugins/page-pilling.js/dist/jquery.pagepiling.min.js"></script>',
        );
        if (count($opt)==count($css)&&count($opt)==count($js)) {
            $keys = array_keys($opt);
            $list = $type=='css' ? $css : $js;
            for ($i=0; $i < count($keys); $i++) { 
                if ($opt[$keys[$i]]) {
                    $ret .= $list[$keys[$i]];
                }
            }
        } else {
            $ret = 'Error script';
        }
        return $ret;
    }
}