<?php

namespace App\Http\Controllers\epay;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Transactions;

class prepareResults extends Controller
{


    /**
     * @param Request $request
     * @return string
     */
    public function index(Request $request)
    {
        $marks=Transactions::orderBy(DB::raw('RAND()'))->take(20)->get()->toArray();
//        return json_encode($marks);
        return Response::json( [
            'error'      => false,
            'code'       => 200,
            'transactions'   => $marks
        ], 200 );
    }
}
