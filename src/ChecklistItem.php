<?php

namespace Vmitchell85\Things;

use Vmitchell85\Things\Task;
use Vmitchell85\Things\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ChecklistItem extends Model
{
    protected $connection = 'things';
    protected $table = 'TMChecklistItem';
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    public $incrementing = false;

    public function rTask()
    {
        return $this->belongsTo(Task::class, 'task');
    }
}
