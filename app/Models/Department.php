<?php
/*
 * Stride Authentication Backend
 *
 * @copyright	Copyright (c) 2020 Martin Becker (https://martin-becker.ovh)
 * @license		GNU AGPLv3 (GNU Affero General Public License v3.0)
 * @link		https://stride.thiritin.com
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Jamesh\Uuid\HasUuid;

/**
 * @property string $id
 * @property string $name
 * @property string $logo
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Department extends Model
{
    use HasFactory, HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'logo',
    ];


    /**
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
