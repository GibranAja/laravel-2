<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Certificates;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $skills = Skill::all();
        $projects = Project::all();
        $certificates = Certificates::all();
        $contacts = Contact::all();

        return view('index', compact('skills', 'projects', 'certificates', 'contacts'));
    }
}
