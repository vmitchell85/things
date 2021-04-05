<?php

namespace Vmitchell85\Things;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $connection = 'things';
    protected $table = 'TMTask';
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    public $incrementing = false;

    public function rTasks()
    {
        return $this->hasMany(Task::class, 'project');
    }

    public function rArea()
    {
        return $this->hasMany(Area::class, 'uuid', 'area');
    }

    protected static function booted()
    {
        static::addGlobalScope('task', function (Builder $builder) {
            $builder->where('type', 1);
        });
    }
}
