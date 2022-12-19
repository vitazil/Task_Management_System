<?php

use Vitab\TaskManagementSystem\Controllers\TaskController;
use Vitab\TaskManagementSystem\Controllers\EmployeeController;
use Vitab\TaskManagementSystem\Services\RouterService;


RouterService::get('/newemployee', EmployeeController::class, 'create');
RouterService::post('/newemployee', EmployeeController::class, 'store');

RouterService::get('/newtask', TaskController::class, 'create');
RouterService::post('/newtask', TaskController::class, 'store');
RouterService::get('/', TaskController::class, 'edit');
RouterService::post('/complete', TaskController::class, 'update');
RouterService::get('/archive', TaskController::class, 'index');
RouterService::post('/delete', TaskController::class, 'delete');
