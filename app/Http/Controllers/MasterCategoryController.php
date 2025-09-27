<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MasterCategoryController extends Controller
{
    public function storecat(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'category_name' => 'unique:categories|max:255',
        ]);

        Category::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Category created successfully!');
    }
}
