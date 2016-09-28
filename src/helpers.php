<?php

if (! function_exists('api_response')) {

    /**
     * Get an instance of api response
     *
     * @return \Gtk\Gapi\ApiResponse
     */
    function api_response()
    {
        $apiResponse = app('api-response');

        if (func_num_args() == 0) {
            return $apiResponse;
        }

        return $apiResponse;
    }

}