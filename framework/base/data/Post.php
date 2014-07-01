<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace framework\base\data;

/**
 * Description of Post
 *
 * @author fftmpc
 */
class Post {
    //put your code here
    
    public function getAttribute($attributeName){
        if(isset(filter_input(INPUT_POST, $attributeName))){
            return filter_input(INPUT_POST, $attributeName);
        }else{
            return '';
        }
    }
}
