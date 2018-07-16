<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->middleware('auth', ['test']);
    }

    public function test($query) {
        $data = explode('/',$query);
        $maskID = array_splice($data, 0, 1)[0];
        $mask = str_split(base_convert(intval($maskID), 10, 2));
        $mask_len = count($mask);
        $options = [];
        $searchIndexs = ['keyword','category','page_index','color','size','min_price', 'max_price'];

        for ($i=$mask_len-1; $i>=0;$i--) {
            if ($mask[$i] != 0) {
                $options[$searchIndexs[$mask_len-$i-1]] = array_splice($data, 0, 1)[0];
            }
        }
		
		// we got the list here
        dd($options);
    }

}
