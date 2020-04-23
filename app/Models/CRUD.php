<?php namespace App\Models;

use CodeIgniter\Model;

class CRUD extends Model
{

    private function init()
    {
        return \Config\Services::curlrequest();
    }

    public function post($options)
    {
        $opt = array('uri'=>'PSB','data'=>[]);
        $options = array_merge($opt,$options);
        return $this->init()->request(
            'POST',
            getenv('SAS_URL').'AJAX/'.$options['uri'],
            [
                'form_params' => $options['data']
            ]);
    }
}