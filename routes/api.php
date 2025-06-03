<?php

use Illuminate\Support\Facades\Route;
use WireElements\WireExtender\Http\Controllers\EmbedController;

Route::any(config('wire-extender.embed_route'), EmbedController::class);
