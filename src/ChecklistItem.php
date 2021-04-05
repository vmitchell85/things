<?php

namespace Vmitchell85\Things;

use Illuminate\Database\Eloquent\Model;

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
