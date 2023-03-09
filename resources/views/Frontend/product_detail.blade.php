@extends('Frontend.master_frontend');
@section('content')

    <main class="product-detail">

        <section class="review">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <div class="thumbnail">
                            <img src="{{url('uploads/image_frontend/thumb04.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="detail">
                            <div class="price-list">
                                <div class="price d-none">US 30.5</div>
                                <div class="regular-price"><strike> US 30.5</strike></div>
                                <div class="sale-price">US 23.6</div>
                            </div>
                            <h5 class="title">Plain T-shirt</h5>
                            <div class="group-size">
                                <span class="title">Color Available</span>
                                <div class="group">
                                    Red ,Yellow ,Green
                                </div>
                            </div>
                            <div class="group-size">
                                <span class="title">Size Available</span>
                                <div class="group">
                                    XS ,S ,M ,L ,XL ,XXL
                                </div>
                            </div>
                            <div class="group-size">
                                <span class="title">Description</span>
                                <div class="description">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            RELATED PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <figure>
                            <div class="thumbnail">
                                <a href="">
                                    <img src="{{url('uploads/image_frontend/thumb01.jpg')}}" alt="">
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
                    <div class="col-3">
                        <figure>
                            <div class="thumbnail">
                                <a href="">
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
                    <div class="col-3">
                        <figure>
                            <div class="thumbnail">
                                <a href="">
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
                    <div class="col-3">
                        <figure>
                            <div class="thumbnail">
                                <a href="">
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
                </div>
            </div>
        </section>

    </main>

@endsection
