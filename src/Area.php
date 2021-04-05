<?php

namespace Vmitchell85\Things;

use Vmitchell85\Things\Task;
use Vmitchell85\Things\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Area extends Model
{
    protected $connection = 'things';
    protected $table = 'TMArea';
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    public $incrementing = false;

    public function rProjects()
    {
        return $this->hasMany(Project::class, 'area');
    }

    public function rTasks()
    {
        return $this->hasMany(Task::class, 'area');
    }

    public function rTags()
    {
        return $this->belongsToMany(Tag::class, 'TMAreaTag', 'areas', 'tags');
    }
}
