<?php

namespace App\Http\Controllers;

use App\Http\Requests\changePasswordRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\BookIssue;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard', [
            'authors' => Author::count(),
            'publishers' => Publisher::count(),
            'categories' => Category::count(),
            'books' => Book::count(),
            'students' => User::where('type', 'user')->latest()->get()->count(),
            'issued_books' => BookIssue::count(),
        ]);
    }

    public function change_password_view()
    {
        return view('reset_password');
    }

    public function change_password(changePasswordRequest $request)
    {
        if (Auth::check(["username" => auth()->user()->username, "password" => $request->c_password])) {
            auth()->user()->password = bcrypt($request->password);
            return redirect()->back()->with(['message' => "Password Changed Successfully!."]);
        } else {
            return "";
        }
    }
}
