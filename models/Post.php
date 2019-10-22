<?php

declare(strict_types=1);


class Post{
    private $name;
    private $title;
    private $content;
    private $date;

    public function __construct(string $_name, string $_title, string  $_content,  $_date)
    {
        $this->name = $_name;
        $this->title = $_title;
        $this->content = $_content;
        $this->date = $_date;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function getContent()
    {
        return $this->content;
    }


    public function getDate()
    {
        return $this->date;
    }



    public function writeToJson($_name, $_title, $_content, $_date){
//        echo "hello";
        $JsonArray = array(
            'name' => $_name,
            'title' => $_title,
            'content' => $_content,
            'date' => $_date,
        );

        //open or read json data
        $data_results = file_get_contents('../data/data.json');
        $tempArray = json_decode($data_results);

        //append additional json to json file
        $tempArray[] = $JsonArray ;
        $jsonData = json_encode($tempArray);

        file_put_contents('../data/data.json', $jsonData);
    }


}

