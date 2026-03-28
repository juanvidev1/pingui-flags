<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'description'])]
class Flag extends Model
{
    use HasUuids;

    public function environment(): BelongsTo
    {
        return $this->belongsTo(Environment::class);
    }

    public function flagRules(): HasMany
    {
        return $this->hasMany(FlagRule::class);
    }
}
