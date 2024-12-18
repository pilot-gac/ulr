<?php namespace Pilotwfc\ExtendBlog;

use Backend;
use System\Classes\PluginBase;
use Tailor\Models\EntryRecord;


/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'ExtendBlog',
            'description' => 'No description provided yet...',
            'author' => 'Pilotwfc',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        EntryRecord::extend(function ($model) {
            if ($model->blueprint_handle === 'Blog\Category') {
                $model->addDynamicMethod('getUrlAttribute', function () use ($model) {
                    return url('/blog/category/' . $model->slug);
                });
            }
        });
        // Расширение модели EntryRecord для расчета времени чтения
        EntryRecord::extend(function ($model) {
            if ($model->blueprint_handle === 'Blog\PostContent') {
                $model->addDynamicMethod('getReadTimeAttribute', function () use ($model) {
                    // Удалить HTML-теги из контента
                    $plainText = strip_tags($model->content);

                    // Подсчет количества слов
                    $wordCount = str_word_count($plainText);

                    // Подсчет количества изображений
                    $imageCount = substr_count($model->content, '<img');

                    // Средняя скорость чтения (слов в минуту)
                    $readingSpeed = 200;

                    // Время чтения текста
                    $timeInMinutes = ceil($wordCount / $readingSpeed);

                    // Время на просмотр изображений (12 секунд на изображение)
                    $extraTime = ceil($imageCount * 12 / 60);

                    return $timeInMinutes + $extraTime;
                });
            }
        });
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Pilotwfc\ExtendBlog\Components\CategoriesList' => 'categoriesList'
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'pilotwfc.extendblog.some_permission' => [
                'tab' => 'ExtendBlog',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'extendblog' => [
                'label' => 'ExtendBlog',
                'url' => Backend::url('pilotwfc/extendblog/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['pilotwfc.extendblog.*'],
                'order' => 500,
            ],
        ];
    }
}
