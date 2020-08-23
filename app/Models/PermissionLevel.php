<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionLevel extends Model
{
    use SoftDeletes;

    public $table = 'permission_levels';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'level',
    ];

    /**
     * Relationships
     */
    public function permissions() {
        return $this->hasMany(Permission::class);
    }
}
