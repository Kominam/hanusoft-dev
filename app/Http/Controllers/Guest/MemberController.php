<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Eloquent\MemberRepository as Member;
use Response;

class MemberController extends Controller
{
    private $member;

    public function __construct(Member $member)
    {
        $this->member = $member;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json($this->member->all());
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return Response::json($this->member->findBySlug($slug));
    }

}
