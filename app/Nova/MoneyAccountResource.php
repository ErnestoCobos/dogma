<?php

namespace App\Nova;

use App\Models\MoneyAccount;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class MoneyAccountResource extends Resource
{
    public static $model = MoneyAccount::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name', 'currency', 'account_type'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required'),

            Number::make('Balance', 'balance')
                ->sortable()
                ->rules('required', 'numeric'),

            Text::make('Currency', 'currency')
                ->sortable()
                ->rules('required'),

            Text::make('Account Type', 'account_type')
                ->sortable()
                ->rules('required'),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }
}
