<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Exposition
 *
 * @property int $id
 * @property string $Name_ar
 * @property string $Name_en
 * @property string $image
 * @property string $title_ar
 * @property string $title_en
 * @property string $start_date
 * @property string $date_end
 * @property string $activity
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exposition whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CategoryExposition[] $cat
 */
class Exposition extends Model
{
    protected $fillable = [
        'Name_ar',
        'Name_en',
        'image',
        'title_ar',
        'title_en',
        'start_date',
        'date_end',
        'activity',
    'category_id'];

    public function cat()
    {
        return $this->hasMany(CategoryExposition::class);
    }
}
