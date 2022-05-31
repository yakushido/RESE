<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     * アプリケーションの「ホーム」ルートへのパス。
     *
     * This is used by Laravel authentication to redirect users after login.
     * これは、ログイン後にユーザーをリダイレクトするためにLaravel認証によって使用されます。
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * The controller namespace for the application.
     * アプリケーションのコントローラー名前空間。
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     * 存在する場合、コントローラールート宣言には、この名前空間のプレフィックスが自動的に付けられます。
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     * アプリケーションのレートリミッターを構成します。
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
