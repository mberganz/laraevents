<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'event_name',
        'speaker_name',
        'start_date',
        'end_date',
        'target_audience',
        'participants_limit'
    ];

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = Carbon::createFromFormat('dd/mm/YYYY H:i', $value)
            ->format('Y-m-d H:i:s');
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = Carbon::createFromFormat('dd/mm/YYYY H:i', $value)
            ->format('Y-m-d H:i:s');
    }

    public function getStartDateFormattedAttribute()
    {
        return Carbon::parse($this->start_date)->format('dd/mm/YYYY H:i');
    }

    public function getEndDateFormattedAttribute()
    {
        return Carbon::parse($this->end_date)->format('dd/mm/YYYY H:i');
    }
}