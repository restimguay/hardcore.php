<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace framework\base\data;

/**
 * Description of Server
 *
 * @author fftmpc
 */
class Server {
    
     public function getAttribute($attributeName){
        if(isset(filter_input(INPUT_SERVER, $attributeName))){
            return filter_input(INPUT_SERVER, $attributeName);
        }else{
            return '';
        }
    }
}
