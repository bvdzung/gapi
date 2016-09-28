<?php

namespace Gtk\Gapi\Middleware;

class ParseJsonPayloadMiddleware
{
    public function handle($request, $next)
    {
        if ($request->isJson()) {
            $data = $request->json()->all();

            $request->request->replace(is_array($data) ? $data : []);
        }

        return $next($request);
    }
}