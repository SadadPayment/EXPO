<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Participant
 *
 * @property int $id
 * @property string $Name_ar
 * @property string $Name_en
 * @property string $image
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $country
 * @property string $address
 * @property string $website
 * @property string $products_ar
 * @property string $products_en
 * @property string $activity_ar
 * @property string $activity_en
 * @property int $hall
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Participant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Participant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Participant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereActivityAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereActivityEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereHall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereProductsAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereProductsEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Participant whereWebsite($value)
 * @mixin \Eloquent
 */
class Participant extends Model
{
    protected $fillable = [
        'Name_ar',
        'Name_en',
        'image',
        'phone',
        'fax',
        'email',
        'country',
        'address',
        'website',
        'products_ar',
        'products_en', 'activity_ar', 'activity_en', 'hall', '',];
    //
}
