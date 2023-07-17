<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;

    public function commentable(): MorphTo{
        return $this->morphTo();
    }

    public function user() :BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function post() :BelongsTo{
        return$this->belongsTo(Post::class);
    }

    public function replies() :HasMany{
        return $this->hasMany(Comment::class, 'parent_id');
    }

}
