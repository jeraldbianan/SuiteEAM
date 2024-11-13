<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlexibleTimeType extends Model {
    use HasFactory, SoftDeletes;

    public static array $flexibleType = ['Flexi-B', 'Flexi-IOB', 'Flexi-IOBH', 'Flexi-DT'];

    public function employees(): HasMany {
        return $this->hasMany(Employee::class);
    }
}
