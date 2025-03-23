<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        // Ambil jumlah tiket berdasarkan status
        $ticketStatus = Tiket::selectRaw('status, count(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status')
            ->toArray();

        // Data untuk chart
        $labels = ['Open', 'In Progress', 'Resolved', 'Closed'];
        $data = [
            $ticketStatus['open'] ?? 0,
            $ticketStatus['in_progress'] ?? 0,
            $ticketStatus['resolved'] ?? 0,
            $ticketStatus['closed'] ?? 0,
        ];

        return view('reports.index', compact('labels', 'data'));
    }
}