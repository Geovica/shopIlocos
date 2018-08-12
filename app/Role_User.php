<?php

namespace shopIlocos;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    //

    public function users()
    {
        return $this->belongsToMany('shopIlocos\User');
    }

    public function roles(){
        return $this->belongToMany('shopIlocos\Role');
    }


    protected $table = 'role_users';

    public function scopeWhereRole($query, $roleID) {
        return $query->where('role_id', $roleID);
    }

    public function scopeAdminOnly($query) {
        return $query->whereRole(1)->get();
    }

    public function scopeBuyerOnly($query) {
        return $query->whereRole(2)->get();
    }

    public function scopeSellerOnly($query) {
        return $query->whereRole(3)->get();

    }
}

