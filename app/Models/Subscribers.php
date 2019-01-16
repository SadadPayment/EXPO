<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Subscribers
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $Name_en
 * @property string $Name_ar
 * @property string $image
 * @property string $phone
 * @property string $website
 * @property string $product_ar
 * @property string $product_en
 * @property string $activity_ar
 * @property string $activity_en
 * @property string $email
 * @property string $country
 * @property string $fax
 * @property string $address
 * @property string $halls
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereActivityAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereActivityEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereHalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereProductAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereProductEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscribers whereWebsite($value)
 */
class Subscribers extends Model
{
    protected $table ='Subscribers';
    protected $fillable = [
        'Name_ar', 'Name_en', 'image',
        'phone', 'website', 'product_ar',
        'product_en', 'activity_ar', 'activity_en',
        'email', 'country', 'fax',
        'address', 'halls'];
}
