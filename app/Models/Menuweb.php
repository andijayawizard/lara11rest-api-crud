<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menuweb
 *
 * @property $id
 * @property $nama
 * @property $caption
 * @property $seq
 * @property $slug
 * @property $pub
 * @property $ktrg
 * @property $ktrg1
 * @property $title
 * @property $keyword
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Menuweb extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nama', 'caption', 'seq', 'slug', 'pub', 'ktrg', 'ktrg1', 'title', 'keyword', 'description'];


}
