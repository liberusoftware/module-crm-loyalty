<?php

declare(strict_types=1);

namespace Liberu\CRM\Loyalty\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $status */
final class LoyaltyProgram extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_loyalty_programs';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['tiers' => 'array', 'metadata' => 'array'];
    }
}
