<?php

namespace App\Services;

use App\Repositories\ReportRepository;

class ReportService
{

     public function __construct(
         public ReportRepository $reportRepository,
     )
     {

     }
}
