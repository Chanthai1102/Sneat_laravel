@extends('Frontend.master_frontend')
@section('content')

    <main class="shop">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-4">
                                <figure>
                                    <div class="thumbnail">
                                        <a href="/product_detail">
                                            <img src="{{url('uploads/image_frontend/thumb02.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <div class="price d-none">US 23.5</div>
                                            <div class="regular-price"><strike> US 23.5</strike></div>
                                            <div class="sale-price">US 20</div>
                                        </div>
                                        <h5 class="title">Plain T-shirt</h5>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <div class="thumbnail">
                                        <a href="/product_detail">
                                            <img src="{{url('uploads/image_frontend/thumb03.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <div class="price d-none">US 30.5</div>
                                            <div class="regular-price"><strike> US 30.5</strike></div>
                                            <div class="sale-price">US 23.6</div>
                                        </div>
                                        <h5 class="title">Plain T-shirt</h5>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <div class="thumbnail">
                                        <a href="/product_detail">
                                            <img src="{{url('uploads/image_frontend/thumb04.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <div class="price d-none">US 30.5</div>
                                            <div class="regular-price"><strike> US 30.5</strike></div>
                                            <div class="sale-price">US 23.6</div>
                                        </div>
                                        <h5 class="title">Plain T-shirt</h5>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <div class="thumbnail">
                                        <a href="/product_detail">
                                            <img src="{{url('uploads/image_frontend/thumb02.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <div class="price d-none">US 23.5</div>
                                            <div class="regular-price"><strike> US 23.5</strike></div>
                                            <div class="sale-price">US 20</div>
                                        </div>
                                        <h5 class="title">Plain T-shirt</h5>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <div class="thumbnail">
                                        <a href="/product_detail">
                                            <img src="{{url('uploads/image_frontend/thumb03.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <div class="price d-none">US 30.5</div>
                                            <div class="regular-price"><strike> US 30.5</strike></div>
                                            <div class="sale-price">US 23.6</div>
                                        </div>
                                        <h5 class="title">Plain T-shirt</h5>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <div class="thumbnail">
                                        <a href="/product_detail">
                                            <img src="{{url('uploads/image_frontend/thumb03.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <div class="price-list">
                                            <div class="price d-none">US 30.5</div>
                                            <div class="regular-price"><strike> US 30.5</strike></div>
                                            <div class="sale-price">US 23.6</div>
                                        </div>
                                        <h5 class="title">Plain T-shirt</h5>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-12">
                                <ul class="pagination">
                                    <li>
                                        <a href="">1</a>
                                    </li>
                                    <li>
                                        <a href="">2</a>
                                    </li>
                                    <li>
                                        <a href="">3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 filter">
                        <h4 class="title">Category</h4>
                        <ul>
                            <li>
                                <a href="">ALL</a>
                            </li>
                            <li>
                                <a href="">Shirts</a>
                            </li>
                            <li>
                                <a href="">Polo Shirts</a>
                            </li>
                            <li>
                                <a href="">Linen</a>
                            </li>
                            <li>
                                <a href="">T-Shirts</a>
                            </li>
                            <li>
                                <a href="">Jackets</a>
                            </li>
                            <li>
                                <a href="">Hoodies & Sweatshirts</a>
                            </li>
                            <li>
                                <a href="">Cardigans</a>
                            </li>
                            <li>
                                <a href="">Trousers</a>
                            </li>
                            <li>
                                <a href="">Jeans</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
