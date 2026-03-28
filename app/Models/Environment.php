<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Environment extends Model
{
    use HasUuids;

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function flags(): HasMany
    {
        return $this->hasMany(Flag::class);
    }
}
