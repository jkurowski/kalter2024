<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Floor extends Model
{
    use HasTranslations;
    public array $translatable = ['name', 'meta_title', 'meta_description'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'investment_id',
        'building_id',
        'name',
        'number',
        'position',
        'type',
        'area_range',
        'price_range',
        'room_range',
        'html',
        'cords',
        'file',
        'file_webp',
        'meta_title',
        'meta_description',
        'active'
    ];

    /**
     * Get floor properties
     * @return HasMany
     */
    public function properties(): HasMany
    {
        return $this->hasMany('App\Models\Property');
    }

    public function findNext(int $investment, int $id, int $building = null)
    {
        $next = $this->where('investment_id', $investment)->where('id', '>', $id)->orderBy('id')->first();
        if ($building && $next) {
            $next->where('building_id', $building);
        }
        return $next;
    }

    public function findPrev(int $investment, int $id, int $building = null)
    {
        $prev = $this->where('investment_id', $investment)->where('id', '<', $id)->orderByDesc('id')->first();
        if ($building && $prev) {
            $prev->where('building_id', $building);
        }
        return $prev;
    }

    /**
     * The "boot" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::deleting(function ($floor) {
            $floor->properties()->each(function($property) {
                $property->delete();
            });
        });
    }
}
