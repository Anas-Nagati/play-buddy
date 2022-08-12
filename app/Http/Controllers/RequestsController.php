<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequests;
use App\Models\Requests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestsController extends Controller
{
    public function allRequests()
    {
        $user_id = Auth::id();
        $requests_by_current_user = Requests::where('user_id',$user_id)->get()->toArray();
        $requests_by_other_users = Requests::where('user_id' , '!=' , $user_id)
            ->where('user_id' , '!=' , $user_id)
            ->where('user_id' , '!=' , $user_id)
            ->where('user_id' , '!=' , $user_id)
            ->where('user_id' , '!=' , $user_id)
            ->where('user_id' , '!=' , $user_id)
            ->get()->toArray();
        if (empty($requests_by_current_user)){
            return redirect('/createRequest');
        }

        $matched_request = DB::table('requests')
            ->where('game', $requests_by_current_user[0]['game'])
            ->where('platform', $requests_by_current_user[0]['platform'])
            ->where('date', $requests_by_current_user[0]['date'])
            ->where('hours', $requests_by_current_user[0]['hours'])
            ->where('location', $requests_by_current_user[0]['location'])
            ->where('ampm', $requests_by_current_user[0]['ampm'])
            ->where('user_id', '!=', $requests_by_current_user[0]['user_id'])
            ->get();

        if ($matched_request->isNotEmpty()){
            $requests = Requests::all()->sortBy([
                ['date', 'DESC'],
            ])->whereNotIn('id', $matched_request[0]->id);
        }else{
            $requests = Requests::all()->sortBy([
                ['date', 'DESC'],
            ]);
        }

        return view('dashboard', [
            'requests_by_current_user' => $requests_by_current_user,
            'matched_request' => $matched_request,
            'requests_by_other_users' => $requests_by_other_users,
            'requests' => $requests,
        ]);
    }

    public function createRequest()
    {
        return view('createRequest');
    }

    public function createRequestPost(Request $request)
    {
        //TODO validation for Platforms should be dynamic
        //TODO validation for Games should be dynamic
        //TODO validation for locations should be dynamic
        $request->validate([
            'platform' => 'required|in:ps5,ps4,ps3,xbox,pc',
            'game' => 'required|in:fifa-22,fifa-21,fifa-20,fifa-19,pes-2022,pes-2021,pes-2020,pes-2019,mortal-kombat',
            'datePicker' => 'required|date',
            'hours' => 'between:1,9',
            'minutes' => 'in:0,30',
            'ampm' => 'in:am,pm',
            'location' => 'in:giza,Helipolis,Zayed,Downtown,5th-Settlement,Nasr-City',
            'user_id' => 'unique:requests,deleted_at,NULL'
        ], [
            'user_id.unique' => 'one request por favor'
        ]);

        $request_details = new Requests;

        $request_details->platform = $request->platform;
        $request_details->game = $request->game;
        $request_details->date = $request->datePicker;
        $request_details->hours = $request->hours;
        $request_details->minutes = $request->minutes;
        $request_details->location = $request->location;
        $request_details->ampm = $request->ampm;
        $request_details->whatsapp = $request->whatsapp;
        $request_details->phoneNumber = $request->phoneNumber;
        $request_details->user_id = $request->user_id;

        $request_details->save();
//        dd($request);
        return redirect()->back();
    }

    public function deleteResult($request)
    {
        Requests::where('id', '=', $request)->delete();

        return redirect('/');
    }

    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
}
