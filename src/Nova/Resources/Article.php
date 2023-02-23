<?php

namespace Newindianic\PackageDemo\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use App\Nova\Resource;

class Article extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\Newindianic\PackageDemo\Models\Article>
     */
    public static $model = \Newindianic\PackageDemo\Models\Article::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $body = 'body';
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $type = 'type';
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $publishedDate = 'article_published_date';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title','body','article_published_date','type'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('title')
                ->sortable()
                ->rules('required', 'max:50'),
            Text::make('body')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('type')
                ->sortable()
                ->rules('required', 'max:55'),
            HasMany::make('Comments'),
            DateTime::make('article_published_date'),
            Image::make('article_image')->disk('public'),
        ];

    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [
            //
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [
            //
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [
            //
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
