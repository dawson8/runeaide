<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function allowTo($permission)
    {
        if (is_string($permission)) {
            // Need to change title column to name for this to work
            // $permission = Permission::whereName($permission)->firstOrFail();
        }

        $this->permissions()->save($permission);
    }
}
