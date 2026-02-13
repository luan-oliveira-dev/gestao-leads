<?php

use App\Models\Address;
use App\Models\Area;
use App\Models\Category;
use App\Models\Funnel;
use App\Models\Information;
use App\Models\Product;
use App\Models\Stage;
use App\Models\StatusArea;
use App\Models\StatusFunnel;
use App\Models\StatusProduct;
use App\Models\StatusStage;
use App\Models\StatusUser;
use App\Models\TypeUser;
use App\Models\Uf;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\EventListener\AddRequestFormatsListener;

Route::get('/', function () {

try {
    
    
    $stage = Stage::with('funnel')->find(1);
    dd($stage->toArray());



} catch (\Throwable $th) {
dd($th->getMessage());

}



});
