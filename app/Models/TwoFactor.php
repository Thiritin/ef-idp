<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\TwoFactor.
 *
 * @property string $id
 * @property string $user_id
 * @property string $secret
 * @property string $type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read User $user
 * @method static Builder|TwoFactor newModelQuery()
 * @method static Builder|TwoFactor newQuery()
 * @method static Builder|TwoFactor query()
 * @method static Builder|TwoFactor whereCreatedAt($value)
 * @method static Builder|TwoFactor whereId($value)
 * @method static Builder|TwoFactor whereSecret($value)
 * @method static Builder|TwoFactor whereType($value)
 * @method static Builder|TwoFactor whereUpdatedAt($value)
 * @method static Builder|TwoFactor whereUserId($value)
 * @mixin Eloquent
 */
class TwoFactor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'secret',
        'type',
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
