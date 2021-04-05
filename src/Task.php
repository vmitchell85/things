<?php

namespace Vmitchell85\Things;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $connection = 'things';
    protected $table = 'TMTask';
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    public $incrementing = false;

    public function rProject()
    {
        return $this->belongsTo(Project::class, 'project');
    }

    public function rArea()
    {
        return $this->belongsTo(Area::class, 'area');
    }

    public function rChecklistItems()
    {
        return $this->hasMany(ChecklistItem::class, 'task', 'uuid');
    }

    public function rTags()
    {
        return $this->belongsToMany(Tag::class, 'TMTaskTag', 'tasks', 'tags');
    }

    public function getLinkAttribute()
    {
        return 'things:///show?id=' . $this->uuid;
    }

    public function scopeNotTrashed($query)
    {
        return $query->where('trashed', 0);
    }

    public function scopeStarted($query)
    {
        return $query->where('start', 1);
    }

    public function scopeNotStarted($query)
    {
        return $query->where('start', 0);
    }

    public function scopeIncomplete($query)
    {
        return $query->where('status', 0);
    }

    public function scopeComplete($query)
    {
        return $query->where('status', 3);
    }

    public function scopeHasStartDate($query)
    {
        return $query->whereNotNull('startdate');
    }

    public function scopeToday($query)
    {
        return $query
            ->notTrashed()
            ->incomplete()
            ->started()
            ->hasStartDate()
            ->orderBy('todayIndex')
            ->orderBy('startdate');
    }

    protected static function booted()
    {
        static::addGlobalScope('task', function (Builder $builder) {
            $builder->where('type', 0);
        });
    }
}
