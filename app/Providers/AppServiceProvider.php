<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

<<<<<<< HEAD
use Illuminate\Support\Facades\Blade;

=======
>>>>>>> d829b292b794c5b02f3f28e9e50e8c6a68cdb0a4
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        Blade::directive('active', function ($expression) {
            return "<?php echo active_url($expression); ?>";
        });
=======
        //
>>>>>>> d829b292b794c5b02f3f28e9e50e8c6a68cdb0a4
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
