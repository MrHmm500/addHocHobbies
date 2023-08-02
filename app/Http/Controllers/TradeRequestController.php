<?php

namespace App\Http\Controllers;

use App\Models\TradeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TradeRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tradeRequests = TradeRequest::all();

        if(count($tradeRequests) > 0) {
            $data = [
                'status' => 200,
                'tradeRequests' => $tradeRequests,
            ];

            return response()->json($data);
        }
        $data = [
            'status' => 204,
            'error' => 'No tradeRequests found',
        ];

        return response()->json($data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'string|max:10',
            'description' => 'string|max:255',
            'photo' => 'string|max:255',
        ]);

        if ($validator->fails())  {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ]);
        }

        $tradeRequest = TradeRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'photo' => $request->photo,
        ]);

        if ($tradeRequest) {
            return response()->json([
                'status' => '200',
                'message' => 'trade request created successfully'
            ]);
        }

        return response()->json([
            'status' => '500',
            'message' => 'Something went wrong'
        ]);
    }
}
