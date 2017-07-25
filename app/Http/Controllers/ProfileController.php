<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Theme;
class ProfileController extends Controller
{
    public function profile(){
        $theme = Theme::uses('default')->layout('default')->setTitle('PapersLLC');
        return $theme->scope('profile')->render();
    }
}
