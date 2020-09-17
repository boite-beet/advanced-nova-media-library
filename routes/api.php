<?php

use BoiteBeet\AdvancedNovaMediaLibrary\Http\Controllers\DownloadMediaController;
use BoiteBeet\AdvancedNovaMediaLibrary\Http\Controllers\MediaController;

Route::get('/download/{media}', [DownloadMediaController::class, 'show']);

Route::get('/media', [MediaController::class, 'index']);
