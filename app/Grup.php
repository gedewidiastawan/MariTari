<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Grup extends Model
{
  protected $table = "tbl_grup";
  protected $primaryKey = 'id_grup';
  public $timestamps = false;
}
