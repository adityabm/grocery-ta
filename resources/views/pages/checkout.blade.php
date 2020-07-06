@extends('layouts.app')

@section('content')
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span
                    class="mdi mdi-chevron-right"></span> <a href="#">Checkout</a>
            </div>
        </div>
    </div>
</section>
<section class="checkout-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="checkout-step">
                    <div class="accordion" id="accordionExample">
                        <div class="card checkout-step-two">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="number">1</span> Delivery Address
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">First Name <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control" value=""
                                                        placeholder="First Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control" value=""
                                                        placeholder="Last Name" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Phone <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control" value=""
                                                        placeholder="123 456 7890" type="number">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email Address <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control " value=""
                                                        placeholder="Your Email" disabled="" type="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">City <span
                                                            class="required">*</span></label>
                                                    <select class="select2 form-control border-form-control">
                                                        <option value="">Select City</option>
                                                        <option value="AF">Alaska</option>
                                                        <option value="AX">New Hampshire</option>
                                                        <option value="AL">Oregon</option>
                                                        <option value="DZ">Toronto</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Zip Code <span
                                                            class="required">*</span></label>
                                                    <input class="form-control border-form-control" value=""
                                                        placeholder="123456" type="number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">State <span
                                                            class="required">*</span></label>
                                                    <select class="select2 form-control border-form-control">
                                                        <option value="">Select State</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Shipping Address <span
                                                            class="required">*</span></label>
                                                    <textarea class="form-control border-form-control"></textarea>
                                                    <small class="text-danger">Please provide the number and
                                                        street.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree"
                                            class="btn btn-secondary mb-2 btn-lg">NEXT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span class="number">2</span> Payment
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <form class="col-lg-8 col-md-8 mx-auto">
                                        <div class="paymentWrap">
                                            <div class="paymentBtnGroup" data-toggle="buttons">
                                                <label class="btn paymentMethod active">
                                                    <div class="method visa"></div>
                                                    <input type="radio" name="options" checked> 
                                                </label>
                                                <label class="btn paymentMethod">
                                                    <div class="method master-card"></div>
                                                    <input type="radio" name="options"> 
                                                </label>
                                            </div>        
                                        </div>
                                        <button type="button" type="button" data-toggle="collapse"
                                            data-target="#collapsefour" aria-expanded="false"
                                            aria-controls="collapsefour"
                                            class="btn btn-secondary mb-2 btn-lg">NEXT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <span class="number">3</span> Order Complete
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="col-lg-10 col-md-10 mx-auto order-done">
                                            <i class="mdi mdi-check-circle-outline text-secondary"></i>
                                            <h4 class="text-success">Congrats! Your Order has been Accepted..</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod
                                                ornare elementum. Sed ex est, Sed ex est, consectetur eget consectetur,
                                                Lorem ipsum dolor sit amet...
                                            </p>
                                        </div>
                                        <div class="text-center">
                                            <a href="{{url('/')}}l"><button type="submit"
                                                    class="btn btn-secondary mb-2 btn-lg">Return to store</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">My Cart <span class="text-secondary float-right">(1 item)</span></h5>
                    <div class="card-body pt-0 pr-0 pl-0 pb-0">
                        <div class="cart-list-product">
                            <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
                            <img class="img-fluid" src="{{asset('asset/img/item/11.jpg')}}" alt="">
                            <h5><a href="#">Product Title Here</a></h5>
                            <h6><strong><span class="mdi mdi-approval"></span> Tersedia</strong> - 500 gm</h6>
                            <p class="offer-price mb-0">Rp 10,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-truck-fast"></i>
                    <h6>Free & Next Day Delivery</h6>
                    <p>Lorem ipsum dolor sit amet, cons...</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-basket"></i>
                    <h6>100% Satisfaction Guarantee</h6>
                    <p>Rorem Ipsum Dolor sit amet, cons...</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-tag-heart"></i>
                    <h6>Great Daily Deals Discount</h6>
                    <p>Sorem Ipsum Dolor sit amet, Cons...</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
