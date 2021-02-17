<?php

use Illuminate\Support\Facades\Auth;


function package($id)
{
    // return $id;
    return App\Models\PackageModel::where('id', $id)->first();
}

