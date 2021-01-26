<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class GroupAndOption extends Model
{
    use SoftDeletes;

    protected $table = 'groups_and_options';

    protected $fillable = [
        'scope',
        'icono',
        'rotulo',
        'ruta',
        'parent_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function _construct()
    {
        //
    }

    public function parent()
    {
        return $this->belongsTo(groupAndOption::class);
    }

    public function groupsAndOptions()
    {
        return $this->hasMany(GroupAndOption::class, 'parent_id');
    }

    /**
     * The users that a GroupAndOption belongs to.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
