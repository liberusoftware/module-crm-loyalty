<?php

declare(strict_types=1);

namespace Liberu\CRM\Loyalty\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $member_id
 * @property float $balance
 * @property bool $fraud_locked
 */
final class LoyaltyMember extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_loyalty_members';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['balance' => 'decimal:2', 'lifetime_earned' => 'decimal:2', 'fraud_locked' => 'boolean'];
    }
}
