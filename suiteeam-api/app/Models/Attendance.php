<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model {
    use HasFactory, SoftDeletes;

    public function employee(): BelongsTo {
        return $this->belongsTo(Employee::class);
    }

    public function timing(): BelongsTo {
        return $this->belongsTo(Timing::class);
    }
}
