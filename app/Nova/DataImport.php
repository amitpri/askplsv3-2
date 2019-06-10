<?php

namespace App\Nova;

use Auth;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Text;
use Outhebox\NovaHiddenField\HiddenField;

use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class DataImport extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $group = "Company";

    public static $displayInNavigation = true;

    public static $model = 'App\DataImport';

    public static function label() {

        return 'Data Imports';

    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    public static function searchable()
    {
        return false;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable()->hideFromIndex()->hideFromDetail(),
            HiddenField::make('User', 'user_id')->current_user_id()->hideFromIndex()->hideFromDetail(),
            Text::make('Type' , 'type')->sortable(),
            DateTime::make('Created at')->format('DD MMM YYYY, LT')->sortable(),

        ];
    }

 
    public function cards(Request $request)
    {
        return [

            new \Sparclex\NovaImportCard\NovaImportCard(\App\Nova\Profile::class),
            new \Sparclex\NovaImportCard\NovaImportCard(\App\Nova\Group::class),
            new \Sparclex\NovaImportCard\NovaImportCard(\App\Nova\GroupProfile::class),

        ];
    }
 
    public function filters(Request $request)
    {
        return [];
    }

 
    public function lenses(Request $request)
    {
        return [];
    }

 
    public function actions(Request $request)
    {
        return [];
    }
}
