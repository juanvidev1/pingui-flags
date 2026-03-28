<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['rule_type', 'rule_value', 'priority'])]

class FlagRule extends Model
{
    use HasUuids;

    public function flag(): BelongsTo
    {
        return $this->belongsTo(Flag::class);
    }
}
