<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CategoryExposition
 *
 * @property int $id
 * @property string $Name_ar
 * @property string $Name_en
 * @property string $description_ar
 * @property string $description_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition whereDescriptionAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryExposition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryExposition extends Model
{
    protected $fillable = ['Name_ar', 'Name_en', 'description_ar', 'description_en'];

    public function exposition()
    {
        return $this->belongsTo(Exposition::class);
    }
}
