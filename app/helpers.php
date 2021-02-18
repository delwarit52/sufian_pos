<?php

use Illuminate\Support\Facades\Auth;


function package($id)
{
    // return $id;
    return App\Models\PackageModel::where('id', $id)->first();
}

function newusernotification()
{
    // return $id;
    return App\Models\CustomerModel::where('user_id', null)->get();
}

