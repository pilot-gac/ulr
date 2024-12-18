<?php namespace Pilotwfc\ExtendBlog\Components;

use Cms\Classes\ComponentBase;
use Tailor\Models\EntryRecord;

class CategoriesList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Categories List',
            'description' => 'Displays a list of categories with subcategories'
        ];
    }

    public function onRun()
    {
        $this->page['categories'] = $this->loadCategories();
    }

    protected function loadCategories()
    {
        return EntryRecord::inSection('Blog\Category')
            ->with('children') // Загружаем подкатегории
            ->orderBy('title') // Сортировка по названию
            ->get();
    }
}
