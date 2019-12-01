<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";
    protected $primaryKey = "id";

    protected $fillable = ['first_name', 'last_name', 'address', 'city', 'zip', 'country', 'email', 'phone', 'note', 'avatar_url'];

    public function group() {
        return $this->hasOne('App\Group', 'id', 'group_id');
    }
}
