<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Royalson Cafe</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/styles.css">


</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="" class="logo">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIQAAACECAMAAABmmnOVAAABdFBMVEX////+/v7/tABHIQz/tgD/uAD/ugDqLSnqJiHqKib7+/voAADqIx7u7Orm4+Hz8fDpFQ71qKf99PQ5AAA7BgDCurfUzssvAADY2dnIwr8AAADwb232razTAADuaGi5sKxEGwAlAACdkIyUhYJ5ZFxqXVoXAACFdnOpo6ODcGprU0zAhATYJyLrODTxhIPuUU74xMPuXlz0mZf50dH62tr86Oj1trVbPzSmm5Y+DwBOMSRBGQdkS0laRD1AFg9IJx9TMBxTMy6ITgD/79FPPEXhmwD/zW9fVFpuQAD92Zj/vTfvqwBGLziVXQD/+ev+3quobwD/6L7+0H5uSiBsUkD/xUpYMABmNAB6TgB1aGxQKAp5Thk+IxCLXghsSy3+qQCHIgCKU0/tgV36hVPBUkmcSkVoNithFgBsAACXAADUZAD/mQD3ggD2dxT0iXBXIAp7IRG8OwBSAACGTTyCLiTLamXTrKihJRkgIAbWh4fWODfWnZ5dto44AAAK+0lEQVR4nM1biWPa1hmXQFxCSICNkGKMQICFsBGHOGxjjO2EJi11x5LM15JmWdZ0W7e2O+zOzj+/93QAAoEe2GB/PiS94/t+77veIcBwgzCTcO0X/OH6ZVAEf7UifKTU7KpXGJwGD9pF/zN+9C6DakMAhmEj4jAMHxaPNnEg3OYRn9ZgIN0EPEuMXRU+DhMzFWeVjg9b4djkuHArJ9xSOQuUhemI/aaBtXvA7dmjKnwuwqdJWx3hEwZ7QN5DIfgUDY7YezHW6D1md1mNHR7d3E+DluNz8yl3SaaYmlxXB2FCzD3rVwBhJeH3BGJv2RCQ+C8ZBAJ7fMme/yTUMHuMOEKbB8Dg1GCp4nUJj59eULR8f0s4LjCeQI5DGOUTyJL3pweJqzl5TOx77oUBH7vaN3oC8ypKnnsgQYtUITZ4AHoKgbPC+WSapOWr2vEcZIH9pBPL8TbWYxObMa8g3aNE/6IgEPs9gf3shPIRIJE0PZ+M4S0nN5uywFhrFziNCO0W1tzMtEpBkmRJytPkSOFwnLG99VRqb60QmoIRjeh8Ib2Wkrd4u0pS2C+IMZZjY7s5t2ijLbqVckNaL1hATM0KtqWkHI+vS4UWvZ+xqY3tZ4YKIoUDiRnnJa65dUqzU+QigGAOmmI8z6d58YAcr8PFrHXs5G6bG2vTTBkg1kQUEFNI3GPa7tBhht2bUHYmO9Fa6IQwJjTiPh0TxPp9QDBbsfwzOrvGxHWnGJpzdxIDMEnq6CDXTkmGRphDA4M7butTqCQXQvHd2BbdlvRnE0ToIDTZGKezAoaTDN8WNetxeyaItSnRhUZ8nJUO6LWY2LEUk6KIMRNugoGA1atlWeu8bmBoFSaazkXHErdFyxk2Tg/UwOdSzcL+nsTT4zBCbNMYcgaGk2AGx/quVrhwqhbWmI4Y69CtmMEjlJU5EgdKF453x6OB4a4MBybb4CZvamIdKUKnU+gwL7SZZ3TOyBRMWzCr6HZ+zDFCnNuMIl4amiPVmbTcGBmvQKbpKrPHdOjsbrapPxaEYRXdoq29OM6twYKl+wxGGiEadwxQJ0PRW6xcKKzHdd9icxaAMUtTkhNyA3ZNAIdz77lTqXjWWREOUPBsqxVPybzucZIl4GOCpWmIyw2roVNgdHbvuL3riMF8bzAdBbsn82ljyEzbwjBmdTguIw3uySPNMEIHcRWAEDlSwQiNpqXYGqOcnB+p2tdUJ2WdBRivGB1h8MbcMQZilEhBHEmLTP7kOSxsigj8cbTXVcyabn2mPR3EaLiS3IvuV7B9mkc4qsYRz8xkXQXPT0zPm9mJ5DInXuI74E/Ppi3JHJ5tiY9r9njdfWnDkCSZEK0Rw5DggebEV4TL9TWYa+MozJFA4DTJdDR7fOO5yFvrGE7YzUiynJVlUeBZDhIrveoBEN8ABcpYLIsyjTuDyDSbjAyT1XOXizgfTX+CpImGSmD5vHTUkfNsLPPtKQEwuFzfke08X+AO5lur2xMrY2yBfQYc73eAM9HvCLQeVLw0PjGFxPXzV/2e16XR7+krdp/GWLsF6rwUAxYQ8y1gj9eQNdE7ffM2K2ffZqyZEAJjxFMP4SF0DK6v2VYMpK9xEI7vw+0IMqELGTBr/EHjTXhdvW632zubVDNz3DURuAjX6/yxCFKt7OwUCIBkwEk6XivkTgciCILw9vMTLdlzE4LL2+tf7B+lOYzO2bCcn0CeFAo8iEM+1/cMBurpGmtdI0BDDIkLJ2a9p18A2zKSbcfEey1yhySKxkaOfuM1dU0QvbewCGQFlocEwpPOnw5AvtB7MNlDhEWufcK05lH6GVjICbl27vLMAKE53/dg3RLLXL7onJ0DOnpxmR8B8TImXl4CZ6bR8tX09/8mscDHZRHsbNiMLoUgwIV4I+TOLvrdnsvj9XoBrO3Ts7Oeoanui0yMpndzJCYsHKEWRZA5GhMEOEcxzNnA+13E6Um3R3gJLTMRHo/L4+l1zcpXNAYjmANxPLE7RAvOsVZsFqNBnmRyzWbOPdA3jFUoHgSsx+Pt9rfhE/AVXVWveLmdBW7BCjDZzQ9iYpkls3D5EmqC/EhK2yYKPTUTrtN0Or7d3zqMt7qwqtuH84brHGRTEBpa/7HEajNv25ya4dZiRl+9yjA3kfx7wx6eLlS9p3cGN5wtbZ91eOryAG8464J/l7ALqYUnnmWt7Bc6MpPhDCpATlzh2wtdE57tC+CD3u7VYNML6PC86/V4r7Y9RPelvjOSgGOEcuSAOdppkR1MHqZGGO30Potdbmuq6F11vYR3+7DlHqVW+qL/Pt4lPNsvhbaZUJmc/VmSg9Qxoo0dJiuDK3+qpYre2ftu9/1ADVcmmNZhGhiM+COHkbuinq+ag5Q5dkQ73xTGa0t5RmOW1zO3p59uHZoY9i56561WKuU+Onr37j302O+hfDoGVUAeD4RNHzAKnmPB1GjmAmQEr8f14cOf0inTBh///OnTX374/Pnzj3/9299/+vDB4+1fmh2gCR0lzYiXYRWT1VfbbPvkp3/889PP1UijrMY+/tJquX/59YdIGZBaVtUaIFVtRKo/f/rXv43TSzE2whgfuQ64Wx5mEQ12PySbba3/p6FCMUqyUioVdwD5fAEqrBHl8xWLpVIlqSRAIzF+LHIMmMhtjnQWpfxBJifR8uH+RskfDIYpfwCSz+f3U36fdgkUi1pZwE+Fg0Hqv+9S1x8Ll7/cPBwGYJGbcjUc+PE3vyY6HPb7wlQxGKgkNzbCAd8GuJSCoIDyUWEq4AsEfvvfr+Cm2qijMEeOk2g1EobiwcipZCSRDCZqar1Sxr+odcqfwL+UG9W6WquElUi16CtSAI7PF25Uo/cFgY/c4VhVDfr8pXK5Vtwgr79EN7DkZq2sYJsV7I5SooqygV9vlmtV5rpRL6q1xgZAEagpaCOcgWIYJ/C2rAK9Y7ebt0BUsFgvR0vBRi2J+0oARJWs3ZbwSjDC1L4Ei9hd/WaHjIQDRbWMhgH5XVG9nAxvYHd+EJFkMFC/xatU/YuCKeX6JtUgKzs+vBqul2uJYBK7i94G6zdBSqk6H5BYRuvYJlpNhIuYEozUStFEo76jqOqXHeX29vbO71NurylqQ1XLO9V6tXaTJBUfeRsGLvGwEABVa1Q4gavqjb90e70J0sNmGPyjQDCAkACBSgU3NwPhCqhL0LV6/S7gVyNoIGa9IcYGHzXVqFG7CwR37sJhkJ/8MAxBTgBEQYI3Wu6AKcMXDm7ubAYClTKCS+hHJMifNK0ngMcDMTAdgUShZcckSBA6JZMVmEX9MHdCiEAzSgIhS+gfJXdsMiAlEQTiqWJFicDsDVygXG4kIholGnAG0ecOpVKE7YIoLjH7FHXYZEARtag01BoUXK1qYoHpowbV6zUAKWLU1NSGElATjhCcTjAnCUydiaqSUKNRclZ2IaN1NaFUG2pjtkuMrWURqR5R62iBDyhaK1enu8RiAJZBq0Axh4ylwZkLA259XAIGhJ3GYhIcM9yjG3wS4zIgIRyZPyxHux6rD/HFJVq2FvOzQlt6PhYtxe/Hv6Bjt76whDxuW+pwOycmx/pHj/9l8RyzxRIgjLJHOK9auqaRPj29bAjz2eWRMCzd75f9fYEJeciFyxdrbbACPTgnuceHsAKME18QnfvQ9PEnZptRLMDiQYDcR8aDfF34njPKA2nBceF8v3pUDLPGuprvqM1O6cueV1cmaQaGuQ4PH42WPvM+gWXWHOfZj4zh3kLmabAkQA551lr7f8T3GrNCv9BBAAAAAElFTkSuQmCC">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#offers">Hot Items</a></li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            
                            
                                @auth

                            
                               
                                @endauth

                                @guest
                                    
                                @endguest
                                </a>    </li>
                            <li class="scroll-to-section">
                                @if (Route::has('login'))
                                    
                                @auth
                            <li class="scroll-to-section">
                                <x-app-layout>
        
                                </x-app-layout>
                            </li>
                            @else
                            <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                            </li>
                            @if (Route::has('register'))
                            <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            </li> @endif
                            @endauth
                            @endif
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Royalson Cafe</h4>
                            <h6>Worst EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Book Your Table</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="https://d2tstdbs4necwd.cloudfront.net/images/305716_1.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="https://images.pexels.com/photos/261169/pexels-photo-261169.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="https://images.pexels.com/photos/5490908/pexels-photo-5490908.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave the worst Memory For You</h2>
                        </div>
                        <p>Royalson Cafe is the worst cafe. If you come here once you will not come again. The reason we are saying this is because have you ever tried our pizza? If not then please just dont because you will end up wasting your money. As we are a great administration we want the best for u. P.S you can try NFC they have good items. We have also attached aa video of royaslson hotel so that u can judge better. </p>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <img src="https://images.pexels.com/photos/6072095/pexels-photo-6072095.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="col-4">
                                <img src="https://images.pexels.com/photos/14686451/pexels-photo-14686451.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                            <div class="col-4">
                                <img src="https://images.pexels.com/photos/1624487/pexels-photo-1624487.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <br><br><br><br><br><br><br>
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                            <img src="https://lh5.googleusercontent.com/p/AF1QipMIZrcRzxKUsTNt0v5ECzQUnUsvuYGnYavD7Zpx=w253-h189-k-no" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    @include('food')
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Hot Items</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                        <li><a href='#tabs-1'><img src="https://cdn3.iconfinder.com/data/icons/food-set-3/91/Food_C203-64.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="https://cdn3.iconfinder.com/data/icons/street-food-and-food-trucker-1/64/hamburger-fast-food-patty-bread-64.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="https://cdn2.iconfinder.com/data/icons/a-collection-of-virtual-gifts/100/thanksgiving_dinner-64.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Fresh Chicken Salad to start the day.</p>
                                                            <div class="price">
                                                                <h6>799 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Orange Juice to start the day.</p>
                                                            <div class="price">
                                                                <h6>299 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Fruit Salad for light start of the day</p>
                                                            <div class="price">
                                                                <h6>499 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Fried Eggs</h4>
                                                            <p>Fried Egss with half cooked yolk</p>
                                                            <div class="price">
                                                                <h6>299 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Mix Daal</h4>
                                                            <p>Composition of differtent types od cereals.</p>
                                                            <div class="price">
                                                                <h6>249 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Eggs Omelete with cheese and olives</p>
                                                            <div class="price">
                                                                <h6>449 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                                <h4>Fried Eggs</h4>
                                                                <p>Fried Egss with half cooked yolk</p>
                                                                <div class="price">
                                                                    <h6>299 RS</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                                <h4>Mix Daal</h4>
                                                                <p>Composition of differtent types od cereals.</p>
                                                                <div class="price">
                                                                    <h6>249 RS</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Eggs Omelete with cheese and olives</p>
                                                            <div class="price">
                                                                <h6>449 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Fruit Salad for light start of the day</p>
                                                            <div class="price">
                                                                <h6>499 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Orange Juice to start the day.</p>
                                                            <div class="price">
                                                                <h6>299 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Fruit Salad for light start of the day</p>
                                                            <div class="price">
                                                                <h6>499 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Mix Daal</h4>
                                                                <p>Composition of differtent types od cereals.</p>
                                                                <div class="price">
                                                                    <h6>249 RS</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Fruit Salad for light start of the day</p>
                                                            <div class="price">
                                                                <h6>499 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Orange Juice to start the day.</p>
                                                            <div class="price">
                                                                <h6>299 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Fresh Chicken Salad to start the day.</p>
                                                            <div class="price">
                                                                <h6>799 RS</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Eggs Omelete with cheese and olives</p>
                                                            <div class="price">
                                                                <h6>449 RS</h6>
                                                            </div>
                                                        </div>  
                                      `              </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Fried Eggs</h4>
                                                                <p>Fried Egss with half cooked yolk</p>
                                                                <div class="price">
                                                                    <h6>299 RS</h6>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('reservation');

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <h2>Royalson cafe</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>Made by
                        
                        <br>Sameer Ahmed, Amir Khan</p>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>