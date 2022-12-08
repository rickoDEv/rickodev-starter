<?php

namespace App\Http\Livewire\PowerGridThemes;

use PowerComponents\LivewirePowerGrid\Themes\Components\{Actions,
    checkbox,
    ClickToCopy,
    Cols,
    editable,
    FilterBoolean,
    FilterDatePicker,
    FilterInputText,
    FilterMultiSelect,
    FilterNumber,
    FilterSelect,
    footer,
    Table};
use PowerComponents\LivewirePowerGrid\Themes\Theme;
use PowerComponents\LivewirePowerGrid\Themes\ThemeBase;

class Tailwind extends ThemeBase
{
    public string $name = 'tailwind';

    public function table(): Table
    {
        return Theme::table('rounded-lg min-w-full border border-slate-200 dark:bg-slate-600 dark:border-slate-500')
            ->div('my-3 overflow-x-auto bg-white shadow-lg rounded-lg overflow-y-auto relative')
            ->thead('shadow-sm bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-500')
            ->tr('')
            ->trFilters('bg-white shadow-sm dark:bg-slate-700')
            ->th('font-semibold px-2 pr-4 py-3 text-left text-xs font-semibold text-slate-700 tracking-wider whitespace-nowrap dark:text-slate-300')
            ->tbody('text-slate-800')
            ->trBody('border border-slate-100 dark:border-slate-400 hover:bg-slate-50 dark:bg-slate-700 dark:odd:bg-slate-800 dark:odd:hover:bg-slate -900 dark:hover:bg-slate-700')
            ->tdBody('px-3 py-2 whitespace-nowrap dark:text-slate-200')
            ->tdBodyTotalColumns('px-3 py-2 whitespace-nowrap dark:text-slate-200 text-sm text-slate-600 text-right space-y-2');
    }

}
