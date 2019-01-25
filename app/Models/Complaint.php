<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Complaint
 *
 * @property int $id
 * @property string $Username
 * @property string $claim_title
 * @property string $claim_topic
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint query()
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereClaimTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereClaimTopic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereUsername($value)
 * @mixin \Eloquent
 */
class Complaint extends Model
{
    protected $fillable = ['Username', 'claim_title', 'claim_topic', 'phone'];

}



