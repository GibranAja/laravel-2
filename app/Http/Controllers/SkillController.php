<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skill(){
        $skills = Skill::all();
        //var_dump($skills);exit;
        return view('skill', compact('skills'));
    }
}
