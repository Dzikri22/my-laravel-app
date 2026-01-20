<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApiMemberController extends Controller
{
    // Get all members
    public function index()
    {
        $members = User::select('id', 'name', 'email', 'created_at')->get();

        return response()->json([
            'success' => true,
            'message' => 'Members retrieved successfully',
            'data' => $members,
            'count' => $members->count()
        ]);
    }

    // Get single member
    public function show($id)
    {
        $member = User::find($id);

        if (!$member) {
            return response()->json([
                'success' => false,
                'message' => 'Member not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $member->id,
                'name' => $member->name,
                'email' => $member->email,
                'created_at' => $member->created_at,
            ]
        ]);
    }

    // Update member (only own profile)
    public function update(Request $request, $id)
    {
        $user = $request->user();

        if ($user->id != $id) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ]
        ]);
    }

    // Delete member (only own account)
    public function destroy(Request $request, $id)
    {
        $user = $request->user();

        if ($user->id != $id) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Account deleted successfully'
        ]);
    }
}
