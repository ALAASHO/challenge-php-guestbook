<?php
declare(strict_types=1);

class PostLoader
{
    public  $list = [];
    public function __construct()
    {

        $json = json_decode(file_get_contents('../data/data.json'));
        foreach ($json AS $msg){
            $this->list = $msg;
        }


    }
}
