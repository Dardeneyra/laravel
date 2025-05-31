<?php

namespace App\Http\Controllers;

use App\Services\ReportService;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index()
    {
        $service = app(reportservice::class);
        return $service->reportRepository->get();
    }


}
