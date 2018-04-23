<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Sanggar extends Model
{
  protected $table = "tbl_sanggar";
  protected $primaryKey = 'id_sanggar';
  public $timestamps = false;
}
