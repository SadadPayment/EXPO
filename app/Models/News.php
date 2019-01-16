<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ExNews
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $Title_ar
 * @property string $Title_en
 * @property string $topic_ar
 * @property string $topic_en
 * @property int $is_notification
 * @method static \Illuminate\Database\Eloquent\Builder|News whereIsNotification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitleAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTopicAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTopicEn($value)
 */
class News extends Model
{
    protected $table = 'ex_news';
    protected $fillable =['Title_ar', 'Title_en', 'topic_ar', 'topic_en', 'image', 'is_notification', ''];
    //
}
