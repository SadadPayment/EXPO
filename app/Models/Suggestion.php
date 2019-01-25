<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Suggestion
 *
 * @property int $id
 * @property string $Username
 * @property string $suggest_title
 * @property string $suggest_topic
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereSuggestTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereSuggestTopic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Suggestion whereUsername($value)
 * @mixin \Eloquent
 */
class Suggestion extends Model
{
    protected $fillable = ['Username', 'suggest_title', 'suggest_topic', 'phone'];
}
