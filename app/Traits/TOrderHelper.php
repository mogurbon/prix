<?php
/**
 * Created by PhpStorm.
 * User: gerardo
 * Date: 29/06/18
 * Time: 04:27 PM
 */
namespace App\Traits;

trait TOrderHelper {
    public function extractNumber($chain){
        return intval(preg_replace('/[^0-9]+/', '', $chain), 10);



    }
}