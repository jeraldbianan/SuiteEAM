<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timing extends Model {
    use HasFactory, SoftDeletes;

    public function employee(): BelongsTo {
        return $this->belongsTo(Employee::class);
    }

    public function attendance(): HasOne {
        return $this->hasOne(Attendance::class);
    }
}
