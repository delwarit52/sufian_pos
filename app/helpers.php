<?php

use Illuminate\Support\Facades\Auth;


function package($id)
{
    return App\Models\PackageModel::find($id)->first();
}

