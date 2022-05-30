<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Intervention;
use App\Models\Group;
use App\Models\Center;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ReportController extends Controller
{
    //Base
    public function generar1()
    {
        $interventions = Intervention::paginate();
        // dd($interventions);
        // return view('report.report1', compact('interventions'));

        $pdf = PDF::loadView('report.report1', compact('interventions'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download('reporte-mensual-intervenciones.pdf');
    }
    //Grupos que tuvieron intervenciones
    public function generar2()
    {
        $groups = Group::withCount(['interventions'])->get();
        //dd($groups);
        // return view('report.report2', compact('groups'));

        $pdf = PDF::loadView('report.report2', compact('groups'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download('reporte-mensual-intervenciones-por-grupo.pdf');
    }
    //Grupos que tuvieron intervenciones
    public function generar3()
    {
        $centers = Center::withCount(['interventions'])->get();
        //dd($groups);
        // return view('report.report3', compact('centers'));

        $pdf = PDF::loadView('report.report3', compact('centers'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download('reporte-mensual-intervenciones-por-centro.pdf');
    }
}
