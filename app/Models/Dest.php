<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Dest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'area_id',
        'study_id'
    ];

    /**
     * relation
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function study()
    {
        return $this->belongsTo(Study::class);
    }

    /**
     * some functions
     */
    public static function isExistsDestImage($image){
        $res = Storage::disk('local')->exists($image);

        return $res;
    }
}
