<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tari extends Model
{
  protected $table = "tbl_tari";
  protected $primaryKey = 'id_tari';
  public $timestamps = false;
}
