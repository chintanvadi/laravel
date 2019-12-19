<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return response
     */
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = User::select(['id', 'name', 'email', 'updated_at']);
            return Datatables::of($data)
                            ->addColumn('action', function($data) {
                                return '<a href="javascript:void(0)" onclick="getForm(' . $data->id . ')" class="btn btn-primary btn-xs">View</a>';
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }

        return view('users');
    }

    public function userDetail($id) {
        $user = User::find($id);
        $view = view("userDetail", compact('user'))->render();
        return response()->json(['html' => $view]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
