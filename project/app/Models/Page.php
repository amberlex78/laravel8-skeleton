<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Database\Factories\PageFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property string|null $content
 * @property bool|null $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $is_active_human
 * @method static PageFactory factory(...$parameters)
 * @method static Builder|Page findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static Builder|Page newModelQuery()
 * @method static Builder|Page newQuery()
 * @method static Builder|Page query()
 * @method static Builder|Page withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
 * @mixin Eloquent
 */
class Page extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'pages';

    protected $guarded = ['id'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getIsActiveHumanAttribute(): string
    {
        return $this->is_active ? __('app.yes') : __('app.no');
    }
}
