<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\MemberRepositoryInterface;

class MemberController extends Controller
{
    private $memberRepository;

    // Kita "suntikkan" interface-nya di sini
    public function __construct(MemberRepositoryInterface $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    public function index()
    {
        $data = $this->memberRepository->getAllMembers();
        return view('member_view', ['members' => $data]);
    }
}