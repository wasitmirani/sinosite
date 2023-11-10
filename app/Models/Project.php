<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded=[];
    /**
     * Get the user that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function industry(){
        return $this->belongsTo(Industry::class, 'industry_id', 'id');
    }
    /**
     * Get all of the comments for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectSections()
    {
        return $this->hasMany(ProjectSection::class, 'project_id', 'id');
    }

    public function getThumbnailAttribute($value)
    {
        if(!empty($value))
        return asset('assets/images/projects/'.$value);
        else
        return $value;
    }
}
