<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table = "tbl_event";
  protected $primaryKey = 'id_event';
  public $timestamps = false;
}
