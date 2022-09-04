<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends MY_Model {

    // protected $table = 'cart';

    public $table = 'orders';

    public function getDefaultValues(){
        return [
            'name'      => '',
            'address'   => '',
            'phone'     => '',
            'status'    => ''
        ];
    }

    public function getValidationRules(){
        $validationRules = [
            [
                'field'     => 'name',
                'label'     => 'Name',
                'rules'     => 'trim|required',
            ],
            [
                'field'     => 'address',
                'label'     => 'Address',
                'rules'     => 'trim|required'
            ],
            [
                'field'     => 'phone',
                'label'     => 'Phone',
                'rules'     => 'trim|required|max_length[15]'
            ],
        ];

        return $validationRules;
    }


}