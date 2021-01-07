@extends('footer.footer')
@extends('layouts.apps')

@extends('navbar.navbar')



@section('content')

<section class="cover-sec">
    <img src="{{url('image/company-cover1.jpg')}}" alt="logo" height="400">
</section>

<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-sidebar">
                            <div class="left-user-profile">
                                <div class="left-profile-img">
                                    <img src="{{url('image/Facebook.png')}}" alt="logo" width="270" height="200">
                                </div>
                                <div class="left-user-status">
                                    <ul class="left-hr">
                                        <li><a href="#" title="" class="left"><i class="fa fa-plus"></i> Follow</a></li>
                                    </ul>
                                    <ul class="left-follow">
                                        <li>
                                            <span>Following</span>
                                            <b>50</b>
                                        </li>
                                        <li>
                                            <span>Followers</span>
                                            <b>200</b>
                                        </li>
                                    </ul>
                                    <!-- left-follow end -->
                                </div>
                                <ul class="social-btn">
                                    <li><a href="#" title=""><i class="fa fa-globe"></i> www.janataawaj.com</a></li>
                                    <li><a href="#" title=""><i class="fab fa-facebook"></i>
                                            Http://www.facebook.com/bpun...</a></li>
                                    <li><a href="#" title=""><i class="fab fa-twitter-square"></i>
                                            Http://www.Twitter.com/bpun...</a></li>
                                    <li><a href="#" title=""><i class="fab fa-google-plus-square"></i>
                                            Http://www.googleplus.com/bpun...</a></li>
                                    <li><a href="#" title=""><i class="fab fa-behance-square"></i>
                                            Http://www.behance.com/bpun...</a></li>
                                    <li><a href="#" title=""><i class="fab fa-pinterest"></i>
                                            Http://www.pinterest.com/bpun...</a></li>
                                    <li><a href="#" title=""><i class="fab fa-instagram"></i>
                                            Http://www.instagram.com/bpun...</a></li>
                                    <li><a href="#" title=""><i class="fab fa-youtube"></i>
                                            Http://www.youtube.com/bpun...</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="suggest left-part">
                            <div class="lf-title">
                                <h3>Suggestions</h3>
                                <i class="fal fa-ellipsis-v"></i>
                            </div>
                            <div class="suggest-list">
                                <div class="suggest-usd">
                                    <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="40" width="40">
                                    <div class="sgt-text">
                                        <h4>Rajesh Hamal</h4>
                                        <span>Human resources</span>
                                    </div>
                                    <span><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="suggest-usd">
                                    <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="40" width="40">
                                    <div class="sgt-text">
                                        <h4>Hari Lama</h4>
                                        <span>Building construction</span>
                                    </div>
                                    <span><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="suggest-usd">
                                    <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="40" width="40">
                                    <div class="sgt-text">
                                        <h4>Nirmala Thapa</h4>
                                        <span>Road infrastructure</span>
                                    </div>
                                    <span><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="suggest-usd">
                                    <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="40" width="40">
                                    <div class="sgt-text">
                                        <h4>Bill Gates</h4>
                                        <span>IT Professional</span>
                                    </div>
                                    <span><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="suggest-usd">
                                    <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="40" width="40">
                                    <div class="sgt-text">
                                        <h4>Mark Jukerberg</h4>
                                        <span>volunteer at NOS</span>
                                    </div>
                                    <span><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="suggest-usd">
                                    <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="40" width="40">
                                    <div class="sgt-text">
                                        <h4>K.P. Oli</h4>
                                        <span>Minister of Nepal</span>
                                    </div>
                                    <span><i class="fas fa-plus"></i></span>
                                </div>
                                <div class="view-btn">
                                    <a href="#" title="">View More</a>
                                </div>
                            </div>
                            <!-- </div> suggest left-part end -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="center-section">
                            <div class="user-profile-tab">
                                <h3>Facebook Inc.</h3>
                            </div>
                            <div class="company-star">
                                <span>Established Since 2009</span>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fas fa-star-half-alt"></i></li>
                                </ul>
                            </div>
                            <!-- company-star end -->
                            <div class="tab-btn">
                                <ul>
                                    <li data-tab="feed-aa" class="animated fadeIn active">
                                        <a href="#" title="">
                                            <img src="{{url('image/feed.png')}}" alt="logo" width="26" height="25">
                                            <span>Feed</span>
                                        </a>
                                    </li>
                                    <li data-tab="info-aa" class="animated fadeIn">
                                        <a href="#" title="">
                                            <img src="{{url('image/info.png')}}" alt="logo" width="26" height="25">
                                            <span>Info</span>
                                        </a>
                                    </li>
                                    <li data-tab="portfolio-aa" class="animated fadeIn">
                                        <a href="#" title="">
                                            <img src="{{url('image/portfolio.png')}}" alt="logo" width="26" height="25">
                                            <span>Portfolio</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- tab-btn end -->
                        </div>
                        <div class="product-post animated fadeIn current" id="feed-aa">
                            <div class=" post-bar">
                                <div class="post-user">
                                    <div class="post-top">
                                        <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="50" width="50">
                                        <div class="ct-name">
                                            <h3>B Pun</h3>
                                            <span><img src="{{url('image/clock.png')}}" alt="logo" height="12"
                                                    width="12">3
                                                min ago</span>
                                        </div>
                                    </div>
                                    <div class="post-ed">
                                        <a href="#" title class="ed-open">
                                            <i class="fal fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="post-option">
                                            <li><a href="#" title="">Edit Post</a></li>
                                            <li><a href="#" title="">Unsaved</a></li>
                                            <li><a href="#" title="">Unbid</a></li>
                                            <li><a href="#" title="">Close</a></li>
                                            <li><a href="#" title="">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="social-sec">
                                    <ul class="food-dis">
                                        <li><img src="{{url('image/house-keeper.jpg')}}" alt="logo" height="14"
                                                width="14"><span>House keeper</span></li>
                                        <li><img src="{{url('image/icon.png')}}" alt="logo" height="14"
                                                width="14"><span>India</span></li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#" title=""><i class="fas fa-bookmark"></i></a></li>
                                        <li><a href="#" title=""><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="food-item">
                                    <h3>I have food which can be used</h3>
                                    <ul class="food-menu">
                                        <li><a href="#" title="">Fress food</a></li>
                                        <li><span>Free </span></li>
                                    </ul>
                                    <p>Order food online from hundreds of popular restaurants in Kathmandu and
                                        Lalitpur through our website, mobile app or over the phone.<br>
                                        <a href="#">View more</a>
                                    </p>
                                    <ul class="food-tag">
                                        <li><a href="#" title="">food</a></li>
                                        <li><a href="#" title="">left over</a></li>
                                        <li><a href="#" title="">restaurant food</a></li>
                                        <li><a href="#" title="">house food</a></li>
                                        <li><a href="#" title="">fresh food</a></li>
                                    </ul>
                                </div>
                                <div class="social-activity">
                                    <ul class="like-btn">
                                        <li>
                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                            <!-- <img src="{{url('image/like.jpg')}}" alt="logo" height="40" width="32"> -->
                                            <span>25</span>
                                        </li>
                                        <li><a href="#"><i class="fas fa-comment-alt"></i> Comments
                                                30</a></li>
                                    </ul>
                                    <a href="#"><i class="fas fa-eye"></i>Views 100</a>
                                </div>
                            </div>
                            <div class="post-bar">
                                <div class="post-user">
                                    <div class="post-top">
                                        <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="50" width="50">
                                        <div class="ct-name">
                                            <h3>B Pun</h3>
                                            <span><img src="{{url('image/clock.png')}}" alt="logo" height="12"
                                                    width="12">3
                                                min ago</span>
                                        </div>
                                    </div>
                                    <div class="post-ed">
                                        <a href="#" title class="ed-open">
                                            <i class="fal fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="post-option">
                                            <li><a href="#" title="">Edit Post</a></li>
                                            <li><a href="#" title="">Unsaved</a></li>
                                            <li><a href="#" title="">Unbid</a></li>
                                            <li><a href="#" title="">Close</a></li>
                                            <li><a href="#" title="">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="social-sec">
                                    <ul class="food-dis">
                                        <li><img src="{{url('image/house-keeper.jpg')}}" alt="logo" height="14"
                                                width="14"><span>House keeper</span></li>
                                        <li><img src="{{url('image/icon.png')}}" alt="logo" height="14"
                                                width="14"><span>India</span></li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#" title=""><i class="fas fa-bookmark"></i></a></li>
                                        <li><a href="#" title=""><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="food-item">
                                    <h3>I have food which can be used</h3>
                                    <ul class="food-menu">
                                        <li><a href="#" title="">Fress food</a></li>
                                        <li><span>Free </span></li>
                                    </ul>
                                    <p>Order food online from hundreds of popular restaurants in Kathmandu and
                                        Lalitpur through our website, mobile app or over the phone.<br>
                                        <a href="#">View more</a>
                                    </p>
                                    <ul class="food-tag">
                                        <li><a href="#" title="">food</a></li>
                                        <li><a href="#" title="">left over</a></li>
                                        <li><a href="#" title="">restaurant food</a></li>
                                        <li><a href="#" title="">house food</a></li>
                                        <li><a href="#" title="">fresh food</a></li>
                                    </ul>
                                </div>
                                <div class="social-activity">
                                    <ul class="like-btn">
                                        <li>
                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                            <!-- <img src="{{url('image/like.jpg')}}" alt="logo" height="40" width="32"> -->
                                            <span>25</span>
                                        </li>
                                        <li><a href="#"><i class="fas fa-comment-alt"></i> Comments
                                                30</a></li>
                                    </ul>
                                    <a href="#"><i class="fas fa-eye"></i>Views 100</a>
                                </div>
                            </div>

                            <div class="post-bar">
                                <div class="post-user">
                                    <div class="post-top">
                                        <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="50" width="50">
                                        <div class="ct-name">
                                            <h3>B Pun</h3>
                                            <span><img src="{{url('image/clock.png')}}" alt="logo" height="12"
                                                    width="12">3
                                                min ago</span>
                                        </div>
                                    </div>
                                    <div class="post-ed">
                                        <a href="#" title class="ed-open">
                                            <i class="fal fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="post-option">
                                            <li><a href="#" title="">Edit Post</a></li>
                                            <li><a href="#" title="">Unsaved</a></li>
                                            <li><a href="#" title="">Unbid</a></li>
                                            <li><a href="#" title="">Close</a></li>
                                            <li><a href="#" title="">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="social-sec">
                                    <ul class="food-dis">
                                        <li><img src="{{url('image/house-keeper.jpg')}}" alt="logo" height="14"
                                                width="14"><span>House keeper</span></li>
                                        <li><img src="{{url('image/icon.png')}}" alt="logo" height="14"
                                                width="14"><span>India</span></li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#" title=""><i class="fas fa-bookmark"></i></a></li>
                                        <li><a href="#" title=""><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="food-item">
                                    <h3>I have food which can be used</h3>
                                    <ul class="food-menu">
                                        <li><a href="#" title="">Fress food</a></li>
                                        <li><span>Free </span></li>
                                    </ul>
                                    <p>Order food online from hundreds of popular restaurants in Kathmandu and
                                        Lalitpur through our website, mobile app or over the phone.<br>
                                        <a href="#">View more</a>
                                    </p>
                                    <ul class="food-tag">
                                        <li><a href="#" title="">food</a></li>
                                        <li><a href="#" title="">left over</a></li>
                                        <li><a href="#" title="">restaurant food</a></li>
                                        <li><a href="#" title="">house food</a></li>
                                        <li><a href="#" title="">fresh food</a></li>
                                    </ul>
                                </div>
                                <div class="social-activity">
                                    <ul class="like-btn">
                                        <li>
                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                            <!-- <img src="{{url('image/like.jpg')}}" alt="logo" height="40" width="32"> -->
                                            <span>25</span>
                                        </li>
                                        <li><a href="#"><i class="fas fa-comment-alt"></i> Comments
                                                30</a></li>
                                    </ul>
                                    <a href="#"><i class="fas fa-eye"></i>Views 100</a>
                                </div>
                            </div>

                            <div class="post-bar">
                                <div class="post-user">
                                    <div class="post-top">
                                        <img src="{{url('image/rajesh.jpg')}}" alt="logo" height="50" width="50">
                                        <div class="ct-name">
                                            <h3>B Pun</h3>
                                            <span><img src="{{url('image/clock.png')}}" alt="logo" height="12"
                                                    width="12">3
                                                min ago</span>
                                        </div>
                                    </div>
                                    <div class="post-ed">
                                        <a href="#" title class="ed-open">
                                            <i class="fal fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="post-option">
                                            <li><a href="#" title="">Edit Post</a></li>
                                            <li><a href="#" title="">Unsaved</a></li>
                                            <li><a href="#" title="">Unbid</a></li>
                                            <li><a href="#" title="">Close</a></li>
                                            <li><a href="#" title="">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="social-sec">
                                    <ul class="food-dis">
                                        <li><img src="{{url('image/house-keeper.jpg')}}" alt="logo" height="14"
                                                width="14"><span>House keeper</span></li>
                                        <li><img src="{{url('image/icon.png')}}" alt="logo" height="14"
                                                width="14"><span>India</span></li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#" title=""><i class="fas fa-bookmark"></i></a></li>
                                        <li><a href="#" title=""><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="food-item">
                                    <h3>I have food which can be used</h3>
                                    <ul class="food-menu">
                                        <li><a href="#" title="">Fress food</a></li>
                                        <li><span>Free </span></li>
                                    </ul>
                                    <p>Order food online from hundreds of popular restaurants in Kathmandu and
                                        Lalitpur through our website, mobile app or over the phone.<br>
                                        <a href="#">View more</a>
                                    </p>
                                    <ul class="food-tag">
                                        <li><a href="#" title="">food</a></li>
                                        <li><a href="#" title="">left over</a></li>
                                        <li><a href="#" title="">restaurant food</a></li>
                                        <li><a href="#" title="">house food</a></li>
                                        <li><a href="#" title="">fresh food</a></li>
                                    </ul>
                                </div>
                                <div class="social-activity">
                                    <ul class="like-btn">
                                        <li>
                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                            <!-- <img src="{{url('image/like.jpg')}}" alt="logo" height="40" width="32"> -->
                                            <span>25</span>
                                        </li>
                                        <li><a href="#"><i class="fas fa-comment-alt"></i> Comments
                                                30</a></li>
                                    </ul>
                                    <a href="#"><i class="fas fa-eye"></i>Views 100</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="right-sidebar">
                            <div class="message-btn">
                                <a href="#" title=""><i class="fa fa-envelope"></i> Message</a>
                            </div>
                            <div class="widget widget-portfolio">
                                <div class="wd-heady">
                                    <h3>Portfolio</h3>
                                    <img src="{{url('image/photo-icon.png')}}" alt="logo">
                                </div>
                                <div class="pf-gallery">
                                    <ul>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a>
                                        </li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a></li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a></li>
                                        <li><a href="#" title=""><img src="{{url('image/foodgood1.png')}}"
                                                    alt="logo"></a></li>
                                    </ul>
                                </div>
                                <!--pf-gallery end-->
                            </div>
                            <!--widget-portfolio end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endSection