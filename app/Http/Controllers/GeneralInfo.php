<?php

namespace App\Http\Controllers;


class GeneralInfo extends Controller
{

    public function index(){

    }

    public function getContact()
    {
exit('jj');
        return view("contact", [
//            'article' => $this->getArticle('kilback.com'),
//            'articles' => $this->listArticles(1,10)
        ]);

    }
}


