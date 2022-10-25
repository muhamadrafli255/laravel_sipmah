<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DataTableController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/members', [DataTableController::class, 'getMembers']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/officers', [DataTableController::class, 'getOfficers']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/categories', [DataTableController::class, 'getCategories']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/categories/books', [DataTableController::class, 'getBooksOnCategories']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/racks', [DataTableController::class, 'getRacks']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/racks/categories', [DataTableController::class, 'getCategoriesOnRack']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/publishers', [DataTableController::class, 'getPublishers']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/publishers/books', [DataTableController::class, 'getBooksOnPublishers']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/books', [DataTableController::class, 'getBooks']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/borrows', [DataTableController::class, 'getBorrows']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/report/borrows', [DataTableController::class, 'getReportBorrows']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/report/damaged', [DataTableController::class, 'getReportDamaged']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/report/lost', [DataTableController::class, 'getReportLost']);
    });
});
