<?php

namespace App\Repositories;

use App\Models\Member;

class MemberRepository implements MemberRepositoryInterface
{
    public function getAllMembers()
    {
        return Member::all(); // Mengambil semua data member
    }
}