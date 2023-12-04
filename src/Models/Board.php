<?php

namespace ModusDigital\KanbanBoard\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'user_id',
    ];

    public function columns()
    {
        return $this->hasMany(Column::class);
    }

    public function user()
    {
        return $this->belongsTo(config('kanban-board.user_model'));
    }
}
