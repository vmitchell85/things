<?php

namespace Vmitchell85\Things;

use Illuminate\Database\Eloquent\Model;

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
