<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calculator\Calculator;

class RequestLogController extends Controller
{
    public function __construct()
    {
        //$this->middleware('tokenAutoRefresh', ['except' => ['login', 'refresh']]);
    }

    public function testResult(Request $request)
    {      
        $input = $request->json()->all();

        $data['total'] = NULL;

        if(isset($input['numbers'])) {
            /*$numbers = $input['numbers'];
            $total = 0;
            //dd($numbers);
            for($i = 0; $i < count($numbers); $i++) {
                $number = $numbers[$i];
                if(is_numeric($number) && $number > 0 && $number == round($number)) {
                    $total += intval($number);
                }
            }*/

            $total = Calculator::add($input['numbers']);

            $data['total'] = $total;
        }
        
  
        return response()->json($data, 200);
    }

    public function test()
    {
        return response()->json([
            'success' => true,
            'data' => 'test'
        ], 200);
    }
    public function welcome()
    {
        return response()->json([
            'success' => true,
            'data' => 'welcome'
        ], 200);
    }
    public function me()
    {
        return response()->json([
            'success' => true,
            'data' => 'me'
            ], 200);
    }
}
