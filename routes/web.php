                        <?php

                        use Illuminate\Support\Facades\Route;

                            /*
                        |--------------------------------------------------------------------------
                        | Web Routes
                        |--------------------------------------------------------------------------

                        */

                        Route::get('BarCode', [App\Http\Controllers\BarCodeController::class, 'generate'])->name('generateBC');
