<?php namespace Anomaly\VideosModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\VideosModule\Video\Contract\VideoRepositoryInterface;
use Anomaly\VideosModule\Video\VideoRepository;
use Anomaly\Streams\Platform\Model\Videos\VideosVideosEntryModel;
use Anomaly\VideosModule\Video\VideoModel;
use Illuminate\Routing\Router;

class VideosModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/videos'           => 'Anomaly\VideosModule\Http\Controller\Admin\VideosController@index',
        'admin/videos/create'    => 'Anomaly\VideosModule\Http\Controller\Admin\VideosController@create',
        'admin/videos/edit/{id}' => 'Anomaly\VideosModule\Http\Controller\Admin\VideosController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Anomaly\VideosModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Anomaly\VideosModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Anomaly\VideosModule\Event\ExampleEvent::class => [
        //    Anomaly\VideosModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Anomaly\VideosModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        VideosVideosEntryModel::class => VideoModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        VideoRepositoryInterface::class => VideoRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}