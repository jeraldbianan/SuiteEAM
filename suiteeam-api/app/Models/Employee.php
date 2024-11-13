<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model {
    use HasFactory, SoftDeletes;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function flexibleTimeType(): BelongsTo {
        return $this->belongsTo(FlexibleTimeType::class);
    }

    public function timings(): HasMany {
        return $this->hasMany(Timing::class);
    }

    public function attendance(): HasMany {
        return $this->hasMany(Attendance::class);
    }
}
