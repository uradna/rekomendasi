<?php

if (!function_exists('getDriveFileId')) {
    function getDriveFileId($url)
    {
        $urlParts = parse_url($url);
        parse_str($urlParts['query'], $queryParameters);
        $id = isset($queryParameters['id']) ? $queryParameters['id'] : null;

        return $id;
    }
}
