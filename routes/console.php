<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('telescope:prune --hours=1')->everyMinute();

