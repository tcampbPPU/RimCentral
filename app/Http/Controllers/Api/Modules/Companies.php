<?php

namespace App\Http\Controllers\Api\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules\Company;
use Illuminate\Support\Facades\Gate;
use App\Http\Resources\Modules\CompaniesResource;



class Companies extends Controller
{
    /**
     * Description - 
     * @param \Illuminate\Http\Request request
     * @return
     */
    public function index(Request $request) {
        if (Gate::check('read-companies', $request->user())) {
            return CompaniesResource::collection(Company::all());
        }else {
            return response()->json([
                'success' => false,
                'error'   => "Invalid Permission",
                'code'   => "jErL78utiq",
                'msg'     => "You are not authorized to make this request, if this is not correct please contact your administrator."
            ], 422);
        }
    }

    /**
     * Description - 
     * @param \Illuminate\Http\Request request
     * @return
     */
    public function store(Request $request) {
        if (Gate::check('add-companies', $request->user())) {
            dd($request->all());
        }else {
            return response()->json([
                'success' => false,
                'error'   => "Invalid Permission",
                'code'   => "RKxViCC6KD",
                'msg'     => "You are not authorized to make this request, if this is not correct please contact your administrator."
            ], 422);
        }    
    }
    
    /**
     * Description - 
     * @param \Illuminate\Http\Request request
     * @param \App\Models\Modules\Company id
     * @return
     */
    public function update(Request $request, $id) {
        if (Gate::check('modify-companies', $request->user())) {
            dd($request);
        }else {
            return response()->json([
                'success' => false,
                'error'   => "Invalid Permission",
                'code'   => "S4pNy84r3w",
                'msg'     => "You are not authorized to make this request, if this is not correct please contact your administrator."
            ], 422);
        }    
    }
}
