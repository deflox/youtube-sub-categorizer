<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Returns all categories for the user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function categories()
    {
        return response()->json([
            1 => 'Gaming',
            2 => 'Technology',
            3 => 'Music',
            4 => 'Science',
        ]);
    }
}
