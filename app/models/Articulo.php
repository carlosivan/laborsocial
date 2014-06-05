<?php

class Articulo extends \Eloquent {
	protected $fillable = [];

    public function foto()
    {
        return $this->hasMany('Foto');
    }
     public function categoria()
	{
	return $this->belongsTo('Categoria');
	}
}