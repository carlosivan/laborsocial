<?php

class Categoria extends \Eloquent {
	protected $fillable = [];


    public function Articulo()
    {
        return $this->hasMany('Articulo');
    }
}