@extends('layouts.app')

@section('content')
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> <a href="#">Cart</a>
        </div>
    </div>
    </div>
</section>
<section class="cart-page section-padding">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body cart-table">
                <div class="table-responsive">
                <table class="table cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th class="action"><i class="mdi mdi-delete-forever"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cart_product"><a href="#"><img class="img-fluid" src="{{asset('asset/img/item/11.jpg')}}" alt=""></a></td>
                            <td class="cart_description">
                            <h5 class="product-name"><a href="#">Ipsums Dolors Untra </a></h5>
                            <h6><strong><span class="mdi mdi-approval"></span> Tersedia</strong> - 500 gm</h6>
                            </td>
                            <td class="availability in-stock"><span class="badge badge-success">In stock</span></td>
                            <td class="price"><span>Rp 10,000</span></td>
                            <td class="qty">
                            <div class="input-group">
                                <span class="input-group-btn"><button disabled="disabled" class="btn btn-theme-round btn-number" type="button">-</button></span>
                                <input type="text" max="10" min="1" value="1" class="form-control border-form-control form-control-sm input-number" name="quant[1]">
                                <span class="input-group-btn"><button class="btn btn-theme-round btn-number" type="button">+</button>
                                </span>
                            </div>
                            </td>
                            <td class="price"><span>Rp 10,000</span></td>
                            <td class="action">
                            <a class="btn btn-sm btn-danger" data-original-title="Remove" href="#" title="" data-placement="top" data-toggle="tooltip"><i class="mdi mdi-close-circle-outline"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="1"></td>
                            <td colspan="4">
                            <form class="form-inline float-right">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter discount code" class="form-control border-form-control form-control-sm">
                                </div>
                                &nbsp;
                                <button class="btn btn-success float-left btn-sm" type="submit">Apply</button>
                            </form>
                            </td>
                            <td colspan="2">Discount : Rp 0 </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td class="text-right"  colspan="3">Total products (tax incl.)</td>
                            <td colspan="2">Rp 10,000 </td>
                        </tr>
                        <tr>
                            <td class="text-right" colspan="5"><strong>Total</strong></td>
                            <td class="text-danger" colspan="2"><strong>Rp 15,000 </strong></td>
                        </tr>
                    </tfoot>
                </table>
                </div>
                <a href="{{url('checkout')}}"><button class="btn btn-secondary btn-lg btn-block text-left" type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout </span><span class="float-right"><strong>Rp 15,000</strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
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