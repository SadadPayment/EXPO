<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sponsors
 *
 * @property int $id
 * @property string $Name_ar
 * @property string $Name_en
 * @property string $image
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $fax
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sponsors whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Sponsors extends Model
{
    protected $fillable = ['Name_ar', 'Name_en', 'image', 'email', 'phone', 'country', 'fax', 'address'];
    //
}
