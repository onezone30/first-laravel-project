<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'salary',
        'location',
        'url'
    ];

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate([
            'name' => $name
        ]);

        $this->tags()->attach($tag);

    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }


}
