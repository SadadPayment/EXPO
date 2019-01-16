<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Notification
 *
 * @property int $id
 * @property string $Title_ar
 * @property string $Title_en
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Notification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Notification extends Model
{
    protected $fillable =['Title_ar', 'Title_en'];
    //
}
