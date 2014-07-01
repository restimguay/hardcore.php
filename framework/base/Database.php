<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace framework\base;

/**
 * Description of Database
 *
 * @author fftmpc
 */
class Database {

    private $_hostname;
    private $_password;
    private $_username;
    private $_database;
    private $_link;

    public function __construct($connection) {
        $this->_connection = mysqli_connect($connection['hostname'], $connection['username'], $connection['password'], $connection['database']);
        $this->_hostname = $connection['hostname'];
        $this->_database = $connection['database'];
        $this->_username = $connection['username'];
        $this->_password = $connection['password'];
        $this->_link = mysqli_connect($this->_hostname(), $this->_username(), $this->_password(), $this->_database());
        return $this;
    }

    public function getHostname() {
        return $this->_hostname;
    }

    public function getPassword() {
        return $this->_password;
    }

    public function getUsername() {
        return $this->_username;
    }

    public function getDatabase() {
        return $this->_database;
    }

    public function setHostname($_hostname) {
        $this->_hostname = $_hostname;
    }

    public function setPassword($_password) {
        $this->_password = $_password;
    }

    public function setUsername($_username) {
        $this->_username = $_username;
    }

    public function setDatabase($_database) {
        $this->_database = $_database;
    }
    public function isConnected(){
    }
}
