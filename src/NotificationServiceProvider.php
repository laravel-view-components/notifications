<?php

namespace LaravelViewComponents;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class NotificationServiceProvider extends LaravelServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->loadViewComponentsAs('notification', [
        Components\Alert::class,
        Components\Modal::class,
        Components\Toast::class,
    ]);

    $this->loadViewsFrom(__DIR__.'/Views', 'components');
    $this->publishes([
        __DIR__.'/Views' => resource_path('views/vendor/components'),
    ]);
  }
}
