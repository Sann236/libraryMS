@extends('layouts.dashboard')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Add Book</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('books') }}">All Books</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('book.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Choose Image</label><br>
                            <input type="file" class="form-control-file" name="image" value="{{old('image')}}" >
                            @error('image')
                                <div class="text text-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Book Name</label>
                            <input type="text" class="form-control @error('name') isinvalid @enderror"
                                placeholder="Book Name" name="name" value="{{ old('name') }}" >
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control @error('quantity') isinvalid @enderror"
                                placeholder="Enter amount of books" name="quantity" value="{{ old('quantity') }}" >
                            @error('quantity')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control @error('category_id') isinvalid @enderror " name="category_id" >
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Author</label>
                            <select class="form-control @error('author_id') isinvalid @enderror " name="author_id" >
                                <option value="">Select Author</option>
                                @foreach ($authors as $author)
                                    <option value='{{ $author->id }}'>{{ $author->name }}</option>";
                                @endforeach
                            </select>
                            @error('author_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Publisher</label>
                            <select class="form-control @error('publisher_id') isinvalid @enderror " name="publisher_id" >
                                <option value="">Select Publisher</option>
                                @foreach ($publishers as $publisher)
                                    <option value='{{ $publisher->id }}'>{{ $publisher->name }}</option>";
                                @endforeach
                            </select>
                            @error('publisher_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="save" >
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
