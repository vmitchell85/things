<?php

namespace Vmitchell85\Things;

use Vmitchell85\Things\Task;
use Vmitchell85\Things\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Tag extends Model
{
    protected $connection = 'things';
    protected $table = 'TMTag';
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    public $incrementing = false;

    public function rTasks()
    {
        return $this->belongsToMany(Task::class, 'TMTaskTag', 'tags', 'tasks');
    }

    public function rAreas()
    {
        return $this->belongsToMany(Task::class, 'TMAreaTag', 'areas', 'tasks');
    }
}
