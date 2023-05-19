<?php

namespace App\Service;


class DeveloperService
{
    public $dataPost = [];

    public function getDataPost(): array
    {
        $this->changeDataPost();
        return $this->dataPost;
    }

    public function getHeaders(): array
    {
        return [
            'asepto' => 'casarme'
        ];
    }

    private function changeDataPost(){
        $this->dataPost = [
            "name" => "Your Father",
            "skills" => [
              "dirty code",
            ],
            "age" => 55
        ];   
    }
}
