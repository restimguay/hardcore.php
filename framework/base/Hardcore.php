<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace framework\base;

/**
 * Description of Hardcore
/* @var $db Database
 * @author fftmpc
 */
class Hardcore {

    private $_version;
    private $_title;
    public $db;
    private $_mysqli_conn;

    //put your code here
    public function __construct($config) {
        session_start();
        foreach ($config as $key => $value) {
            if ($key == 'application') {
                foreach ($value as $attribute => $attrValue) {
                    if ($attribute == 'title') {
                        $this->_title = $attrValue;
                    } elseif ($attribute == 'version') {
                        $this->_version = $attrValue;
                    }
                }
            } elseif ($key == 'database') {
                $this->db = new \framework\base\Database($value);
                $this->_mysqli_conn= mysqli_connect(
                        $this->db->getHostname(),
                        $this->db->getUsername(),
                        $this->db->getPassword(),
                        $this->db->getDatabase());
            }
        }
    }
    
    public function getApplicationTitle() {
        return $this->_title;
    }
    /**
     * hello
     * @return Database
     */
    public function db(){
        return $this->_database;
    }
    
    /**
     * 
     * @return String
     */
    public function getApplicationVersion() {
        return $this->_version;
    }
    
    public function start(){
        
    }
}
