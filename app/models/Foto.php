<?php

class Foto extends \Eloquent {
	protected $fillable = [];

	 public function articulo()
	{
	return $this->belongsTo('Articulo');
	}
}