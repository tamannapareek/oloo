<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class AdminTicketController extends Controller
{

    public function index()
    {
        $tickets = Ticket::with('ticket')->get();
        return view('admin.admin.post.index', compact('tickets'));
    }
}
