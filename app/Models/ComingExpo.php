<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ComingExpo
 *
 * @property int $id
 * @property string $Name_en
 * @property string $Name_ar
 * @property string $file_upload
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo whereFileUpload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComingExpo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ComingExpo extends Model
{
    protected $fillable =['Name_en', 'Name_ar', 'file_upload'];
    //
}
