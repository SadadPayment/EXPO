<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Archive
 *
 * @property int $id
 * @property string $Name_en
 * @property string $Name_ar
 * @property string $file_upload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Archive newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Archive newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Archive query()
 * @method static \Illuminate\Database\Eloquent\Builder|Archive whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Archive whereFileUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Archive whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Archive whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Archive whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Archive whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Archive extends Model
{
    protected $fillable = ['Name_en', 'Name_ar', 'file_upload'];
    //
}
