<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');
        $priority = $request->query('priority');

        $tickets = Tiket::when($status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->when($priority, function ($query, $priority) {
                return $query->where('priority', $priority);
            })
            ->paginate(10);

        return view('tickets.index', compact('tickets'));
    }
}