<?php
namespace App\Helpers;
use App\Models\User;
use Response;

class Helper
{
    public function getAllGrade()
    {
        $grades = User::all()->pluck('grade')->toArray();
        return Response::json(['grades' => $grades],200);
    }
}