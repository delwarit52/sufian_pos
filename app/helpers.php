<?php

use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;


function package($id)
{
    // return $id;
    return App\Models\PackageModel::where('id', $id)->first();
}

function newusernotification()
{
    $notifications =[];


    $datas = App\Models\CustomerModel::orderBy('updated_at', 'asc')->get();

    $count = 0;
    foreach ($datas as $key => $data) {
        if($data->user_id == '' ){
            // return (Carbon::now()->diffInHours($data->created_at))/24;
            $create_notification = [
                'id' => $data->id,
                'username' => $data->name,
                'message' => 'New User, Active Now',
                'ago' => $data->created_at->diffForHumans(),
                'messagetype' => 'newuser',
                // 'date' => (Carbon::now()->diffInHours($data->updated_at))/24,
            ];
            array_push($notifications, $create_notification);
        }
        if(((Carbon::now()->diffInHours($data->updated_at))/24)>2 && $data->status == 3){
            $create_notification = [
                'id' => $data->id,
                'username' => $data->name,
                'message' => 'Date Expire',
                'ago' => $data->updated_at->diffForHumans(),
                'messagetype' => 'dateexpire',
            ];
            array_push($notifications, $create_notification);
        }
    }



    
    // $paymant = App\Models\CustomerModel::all();
    // return $time;
    return $notifications;
    // return $newusers = App\Models\CustomerModel::orderBy('updated_at', 'desc')->get();
}

function getAmount($id)
{
    // $users = User::join('withdraw_models', 'users.id', '=', 'withdraw_models.user_id')
    //            ->get('amount');
    return App\Models\WithdrawModel::where('user_id', $id)->sum('amount');
}

function getAllWithdraw($id)
{
    // $users = User::join('withdraw_models', 'users.id', '=', 'withdraw_models.user_id')
    //            ->get('amount');
    return App\Models\WithdrawModel::where('user_id', $id)->get();
}


