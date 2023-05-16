<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookIssueRequest;
use App\Models\Book;
use App\Models\BookIssue;
use App\Models\Settings;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class BookIssueController extends Controller
{
    //
    public function index()
    {
        return view('book.issueBooks', [
            'books' => BookIssue::paginate(5)
        ]);
    }

    public function create()
    {
        return view('book.issueBook_add', [
            'students' => User::where(['type'=>'user','status' => 'Y'])->latest()->get(),
            'books' => Book::where('status', 'Y')->get(),
        ]);
    }

    public function store(StoreBookIssueRequest $request)
    {
        $issue_date = date('Y-m-d');
        $return_date = date('Y-m-d', strtotime("+" . (Settings::latest()->first()->return_days) . " days"));
        $data = new BookIssue();
        $data->user_id = $request->student_id;
        $data->book_id = $request->book_id;
        $data->issue_date = $issue_date;
        $data->return_date = $return_date;
        $data->issue_status = 'N';
        $data->save();

        $book = Book::find($request->book_id);
        // subtracting book quantity
        $book->quantity--;
        if($book->quantity == 0) {
            $book->status = 'N';
        }
        
        $book->save();

        $usercount = BookIssue::where([
            'user_id' => $request->student_id,
            'issue_status' => 'N'
        ])->get()->count();

        if ($usercount >= 3) {
            $user = User::find($request->student_id);

            $user->status = 'N';
            $user->save();
        }

        return redirect()->route('book_issued');
    }


    public function edit($id)
    {
        // calculate the total fine  (total days * fine per day)
        $book = BookIssue::where('id', $id)->get()->first();
        $first_date = date_create(date('Y-m-d'));
        $last_date = date_create($book->return_date);
        $diff = date_diff($first_date, $last_date);
        $fine = (Settings::latest()->first()->fine * $diff->format('%a'));
        return view('book.issueBook_edit', [
            'book' => $book,
            'fine' => $fine,
        ]);
    }

    public function update(Request $request, $id)
    {

        $book_issue = BookIssue::find($id);
        $book_issue->issue_status = 'Y';
        $book_issue->return_day = now();
        $book_issue->save();
        $book = Book::find($book_issue->book_id);
        $book->quantity++;
        $book->status = 'Y';
        $book->save();

        // updating user status 
        $user = User::find($book_issue->user_id);
        $user->status = 'Y';
        $user->save();

        return redirect()->route('book_issued');
    }

    public function destroy($id)
    {

        $book_issue = BookIssue::find($id);
        $book = Book::find($book_issue->book_id);
        
        $book->status = 'Y';
        $book->save();
        BookIssue::find($id)->delete();
        // updating user status 
        $user = User::find($book_issue->user_id);
        $user->status = 'Y';
        $user->save();

        return redirect()->route('book_issued');
    }
}
