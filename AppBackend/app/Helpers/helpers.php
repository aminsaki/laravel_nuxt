<?php

if (!function_exists('ResponseDate')) {

    function ResponseDate($dsc,  $date = null, $status = 200)
    {
        if (!empty($dsc) and !empty($date))
            return response()->json(['dsc' => $dsc, 'data' => $date], $status);

        return response()->json(['dsc' => $date], $status);

    }

}
