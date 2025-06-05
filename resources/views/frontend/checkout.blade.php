@extends('includes.app')
@section('content')
<div class="breadcrumb-area shadow dark bg-fixed text-light about_banner" style="background-image: url(public/assets/img/checkout_bg.jpg);">
<div class="container">
    <div class="row align-center">
        <div class="col-lg-12">
            <h1>Checkout Royal Squad</h1>
            <h4>Royal Squad is a trusted technology solutions provider offering top-tier IT support, cybersecurity, and innovative digital solutions. Our expert team ensures seamless technology integration, security, and efficiency for businesses and individuals.
            </h4>
        </div>
    </div>
</div>
</div>
<div class="checkout default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="checkout_info">
                    <h2>Customer Information</h2>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="first_name" name="name" placeholder="First Name" type="text" required>
                                            @error('name')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="last_name" name="name" placeholder="Last Name" type="text" required>
                                            @error('name')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                            @error('email')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="number" name="number" placeholder="Enter Phone Number" type="text" required>
                                            @error('number')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary check_b btn-standard button_effect checkout_btn">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
                <h2></h2>
            </div>
            <div class="col-lg-5">
                <div class="summary">
                    <div class="order">
                        <h3>Order Summary</h3>
                    </div>
                    <div class="item_cart">
                        <ul>
                            <li class="cart_i">
                            <i class="fa-solid fa-cart-shopping"></i>
                                1 item(s) in Cart
                            </li>
                            <li class="cart_details">
                                Details
                            </li>
                        </ul>
                    </div>
                    <div class="total">
                        <div class="order_total">
                            <h4>
                                Package Name
                            </h4>
                        </div>
                        <div class="order_price">
                            <h4>
                                $34.99
                            </h4>
                        </div>
                    </div>
                    <div class="total">
                        <div class="sub">
                            <h5>
                                Subtotal
                            </h5>
                        </div>
                        <div class="sub_p">
                            <h5>
                                $34.99
                            </h5>
                        </div>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary check_b">
                                       Pay Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection