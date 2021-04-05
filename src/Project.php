<?php

namespace Vmitchell85\Things;

use Vmitchell85\Things\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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
