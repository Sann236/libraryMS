@extends('layouts.master')

@section('content')


<section>

    <nav>

        <div class="logo">
            <img src="{{ asset('storage/images/logo.png') }}">
        </div>

        <ul class="mt-3">
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Featured">Featured</a></li>
            <li><a href="#Arrivals">Arrivals</a></li>
            <li><a href="#Reviews">Reviews</a></li>
            <li><a href="#Blog">Blog</a></li>
        </ul>

        <div class="social_icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-heart"></i>
        </div>


        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>

    </nav>

    <div class="main">

        <div class="main_tag">
            <h1>WELCOME TO<br><span>BOOK STORE</span></h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda molestias atque laborum
                non fuga ex deserunt. Exercitationem velit ducimus praesentium, obcaecati hic voluptate id
                tenetur fuga illum quidem omnis? Rerum?
            </p>
            <a href="#" class="main_btn">Learn More</a>

        </div>

        <div class="main_img">
            <img src="{{ asset('storage/images/table.png') }}">
        </div>

    </div>

</section>




<div class="container mb-5">
    <h1 class="text-center mb-4">Search book</h1>
    <form id="myForm" method="post" class="d-flex justify-content-center">
      <div class="form-group w-25 mx-3">
        
        <select class="form-control" id="author" name="author" required>
          <option value="">Select an author</option>
          <option value="author1">Author 1</option>
          <option value="author2">Author 2</option>
          <option value="author3">Author 3</option>
        </select>
      </div>
      <div class="form-group w-25 mx-3">
        
        <select class="form-control " id="category" name="category" required>
          <option value="">Select a category</option>
          <option value="category1">Category 1</option>
          <option value="category2">Category 2</option>
          <option value="category3">Category 3</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary mx-3">Submit</button>
    </form>
  </div>









<!--Books-->

<!-- <div class="featured_boks">

    <h1>Featured Books</h1>

    <div class="featured_book_box">

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_1.jpg">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_2.jpg">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_3.jpg">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_4.jpg">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_5.jpg">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_6.jpg">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_7.png">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_8.png">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_9.jpg">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_10.png">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_11.jpg">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_12.png">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_13.png">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_14.png">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>

        <div class="featured_book_card">

            <div class="featurde_book_img">
                <img src="image/book_15.png">
            </div>

            <div class="featurde_book_tag">
                <h2>Featured Books</h2>
                <p class="writer">John Deo</p>
                <div class="categories">Thriller, Horror, Romance</div>
                <p class="book_price">$25.50<sub><del>$28.60</del></sub></p>
                <a href="#" class="f_btn">Learn More</a>
            </div>

        </div>



    </div>

</div>
 -->



<!--Arrivals-->

<div class="arrivals">
    <h1>New Arrivals</h1>

    <div class="arrivals_box">
        @foreach($books as $book)
        <div class="arrivals_card">
            <div class="arrivals_image">
                <img src="{{ asset('storage/images/books/' . $book->image) }}">
            </div>
            <div class="arrivals_tag">

                <p>Category: {{$book->category->name}}</p>

                <p>
                    @if ($book->status == 'Y')
                    <span class="badge bg-success">Available</span>
                    @else
                    <span class='badge bg-danger'>Issued</span>
                    @endif
                </p>
                <!-- <a href="#" class="arrivals_btn">Learn More</a> -->
            </div>
        </div>
        @endforeach



    </div>
    <div class="d-flex justify-content-center mt-4">
        <div>
        {{ $books->links() }}
        </div>
    </div>

</div>


<!--About-->

<div class="about">

    <div class="about_image">
        <img src="{{ asset('storage/images/about.png') }}">
    </div>
    <div class="about_tag">
        <h1>About Us</h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae cumque atque dolor corporis
            architecto. Voluptate expedita molestias maxime officia natus consectetur dolor quisquam illo?
            Quis illum nostrum perspiciatis laboriosam perferendis? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Minus ad eius saepe architecto aperiam laboriosam voluptas nobis voluptates
            id amet eos repellat corrupti harum consectetur, dolorum dolore blanditiis quam quo.
        </p>
        <a href="#" class="about_btn">Learn More</a>
    </div>

</div>








<!--Footer-->

<footer>
    <div class="footer_main">

        <div class="tag">
            <img src="image/logo.png">
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quaerat ipsa aspernatur ad
                sequi, dolore eveniet vitae quasi. Excepturi ipsa odio impedit sequi at hic velit, minus
                vero sint. Voluptas?
            </p>

        </div>

        <div class="tag">
            <h1>Quick Link</h1>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Featured</a>
            <a href="#">Arrivals</a>
            <a href="#">Reviews</a>
            <a href="#">Blog</a>

        </div>

        <div class="tag">
            <h1>Contact Info</h1>
            <a href="#"><i class="fa-solid fa-phone"></i>+94 12 345 6789</a>
            <a href="#"><i class="fa-solid fa-phone"></i>+94 32 444 699</a>
            <a href="#"><i class="fa-solid fa-envelope"></i>bookstore123@gmail.com</a>

        </div>

        <div class="tag">
            <h1>Follow Us</h1>
            <div class="social_link">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <div class="tag">
            <h1>Newsletter</h1>
            <div class="search_bar">
                <input type="text" placeholder="You email id here">
                <button type="submit">Subscribe</button>
            </div>
        </div>

    </div>



</footer>
@endsection