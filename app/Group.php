<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $primaryKey = 'id';
    protected $table = "group";

    protected $fillable = ['name'];

    public function contact() {
        return $this->belongsTo('App\Contact', 'group_id', 'id');
    }
}
