<?php namespace Pilotwfc\Address\Components;

use Cms\Classes\ComponentBase;
use Pilotwfc\Address\Models\AddressPost;
use Pilotwfc\Address\Models\AddressCategory;

class AddressesList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Addresses List',
            'description' => 'Displays a list of addresses with optional category filtering.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Category Slug',
                'description' => 'Filter addresses by category slug.',
                'default'     => '',
                'type'        => 'string',
            ]
        ];
    }

    public function onRun()
    {
        $slug = $this->property('slug');
        $this->page['categories'] = AddressCategory::all(); // Получаем все категории
        $this->page['currentCategory'] = AddressCategory::where('slug', $slug)->first();

        if ($slug) {
            $this->page['addresses'] = AddressPost::where('category_id', $this->page['currentCategory']->id ?? 0)
                ->with('category')
                ->get();
        } else {
            $this->page['addresses'] = AddressPost::with('category')->get();
        }
        // Получаем slug из параметра страницы
        $slug = $this->property('slug');

        // Проверка: если slug передан, фильтруем по категории
        if ($slug) {
            $category = AddressCategory::where('slug', $slug)->first();

            if ($category) {
                $this->page['addresses'] = AddressPost::where('category_id', $category->id)
                    ->with('category')
                    ->get();
                $this->page['currentCategory'] = $category;
            } else {
                // Если категория не найдена, выводим пустой список
                $this->page['addresses'] = collect();
                $this->page['currentCategory'] = null;
            }
        } else {
            // Если slug не передан, выводим все записи
            $this->page['addresses'] = AddressPost::with('category')->get();
            $this->page['currentCategory'] = null;
        }
    }
}
