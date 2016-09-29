<?php

if (! function_exists('api_response')) {

    /**
     * Get an instance of api response
     *
     * @param array $data
     * @param int $status
     * @param array $headers
     * @return \Gtk\Gapi\ApiResponse
     */
    function api_response($data = [], $status = 200, $headers = [])
    {
        $apiResponse = app('api-response');

        if (func_num_args() == 0) {
            return $apiResponse;
        }

        return $apiResponse->setStatusCode(200)->withArray($data, $headers);
    }

}