<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author satriaprayoga
 */
class Product_model extends MY_Model{
    
    public function __construct() {
        parent::__construct();
        $this->table_name='product';
    }
    
    public function find_service($is_gallery=0){
        return $this->query_object_list(array('type'=>'service','is_gallery'=>$is_gallery));
    }
    
    public function find_product($is_gallery=0){
        return $this->query_object_list(array('type'=>'product','is_gallery'=>$is_gallery));
    }
    
    public function find_by_link($link){
        return $this->query(array('link'=>$link));
    }
}
