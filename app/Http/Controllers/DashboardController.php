<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function table(Request $request)
    {
         if ($request->ajax()) {
            $data = User::select(['id', 'name', 'email', 'created_at']);
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    return '<a href="#" class="btn btn-sm btn-primary">View</a>';
                })
                ->editColumn('created_at', function($row) {
                    return $row->created_at->format('d-m-Y H:i');
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('table'); // Blade view below
    }
}
