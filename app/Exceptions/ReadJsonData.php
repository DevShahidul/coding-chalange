<?php

namespace App\Exceptions;


class ReadJsonData {
    /**
     * @var string
     */
    $jsonData = json_decode(file_get_contents(public_path(). "/assets/GP_JSON/components.json"), true);
    dd($jsonData);
}