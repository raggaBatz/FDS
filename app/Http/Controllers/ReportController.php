<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Intervention;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ReportController extends Controller
{
    public function generar1()
    {
        $interventions = Intervention::paginate();
        // dd($interventions);

        // return view('report.report1', compact('interventions'))
        //     ->with('i', (request()->input('page', 1) - 1) * $interventions->perPage());
        $pdf = PDF::loadView('report.report1', compact('interventions'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download('prueba.pdf');
    }
}
