<?php

Route::get('/admin/traffic-logger/report', function () {
	dd(\AmyLashley\TrafficLogger\App\Models\Traffic::get());
});