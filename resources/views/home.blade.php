@extends('layouts.master')
  
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  
                    You are a User.
                </div>
            </div>
        </div>
    </div>
</div> -->

<section>

        <nav>

            <div class="logo">
                <img src="image/logo.png">
            </div>

            <ul>
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
                    <ul class="navbar-nav ms-auto">
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
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
                <img src="image/table.png">
            </div>

        </div>

    </section>




    <!--Services-->

    <div class="services">

        <div class="services_box">

            <div class="services_card">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Fast Delivery</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-headset"></i>
                <h3>24 x 7 Services</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-tag"></i>
                <h3>Best Deal</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-lock"></i>
                <h3>Secure Payment</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                </p>
            </div>

        </div>

    </div>




    <!--About-->

    <div class="about">

        <div class="about_image">
            <img src="image/about.png">
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





    <!--Books-->

    <div class="featured_boks">

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



    
    <!--Arrivals-->

    <div class="arrivals">
        <h1>New Arrivals</h1>

        <div class="arrivals_box">

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_1.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_2.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_3.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_4.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_5.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_6.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_7.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_8.webp">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_9.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

            <div class="arrivals_card">
                <div class="arrivals_image">
                    <img src="image/arrival_10.jpg">
                </div>
                <div class="arrivals_tag">
                    <p>New Arrivals</p>
                    <div class="arrivals_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="arrivals_btn">Learn More</a>
                </div>
            </div>

        </div>

    </div>





    <!--reviews-->

    <div class="reviews">
        <h1>Reviews</h1>

        <div class="review_box">

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="image/review_1.png">
                </div>
                <div class="card">
                    <h2>John Deo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                        distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore, 
                        tenetur itaque nostrum voluptas excepturi aut.
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="image/review_2.png">
                </div>
                <div class="card">
                    <h2>John Deo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                        distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore, 
                        tenetur itaque nostrum voluptas excepturi aut.
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="image/review_3.png">
                </div>
                <div class="card">
                    <h2>John Deo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                        distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore, 
                        tenetur itaque nostrum voluptas excepturi aut.
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

            <div class="review_card">
                <i class="fa-solid fa-quote-right"></i>
                <div class="card_top">
                    <img src="image/review_4.png">
                </div>
                <div class="card">
                    <h2>John Deo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                        distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore, 
                        tenetur itaque nostrum voluptas excepturi aut.
                    </p>
                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <!--Banner-->

    <div class="banner">
        <a href="#" class="banner_btn">Learn More</a>
    </div>





    <!--Blog-->
    
    <div class="blog">
        <h1>Our Blog</h1>
        <div class="blog_box">

            <div class="blog_card">
                <div class="blog_img">
                    <img src="image/blog_1.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quos quis quasi ut 
                        impedit reiciendis voluptatem rem esse ratione omnis, laudantium earum. Aperiam 
                        nesciunt dolore aliquam repellat consequatur amet ducimus.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="blog_card">
                <div class="blog_img">
                    <img src="image/blog_2.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quos quis quasi ut 
                        impedit reiciendis voluptatem rem esse ratione omnis, laudantium earum. Aperiam 
                        nesciunt dolore aliquam repellat consequatur amet ducimus.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="blog_card">
                <div class="blog_img">
                    <img src="image/blog_3.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quos quis quasi ut 
                        impedit reiciendis voluptatem rem esse ratione omnis, laudantium earum. Aperiam 
                        nesciunt dolore aliquam repellat consequatur amet ducimus.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

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

        <p class="end">Design By<span><i class="fa-solid fa-face-grin"></i> WT Master Code</span></p>

    </footer>
@endsection