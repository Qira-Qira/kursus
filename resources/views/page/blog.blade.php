@extends('layouts.master')

@section('content')
<section id="test" class="test bg-grey roomy-60 fix">
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="main_test fix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="head_title text-center fix">
                        <h2 class="text-uppercase">What Teacher Say</h2>
                        <h5>Clean and Modern course is our best specialist</h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="test_item fix">
                        <div class="item_img">
                            <img
                                class="img-circle"
                                src="assets/images/test-img1.jpg"
                                alt="" />
                            <i class="fa fa-quote-left"></i>
                        </div>

                        <div class="item_text">
                            <h5>Sarah Smith</h5>
                            <h6>envato.com</h6>

                            <p>
                                Natus voluptatum enim quod necessitatibus quis expedita
                                harum provident eos obcaecati id culpa corporis molestias.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="test_item fix sm-m-top-30">
                        <div class="item_img">
                            <img
                                class="img-circle"
                                src="assets/images/test-img2.jpg"
                                alt="" />
                            <i class="fa fa-quote-left"></i>
                        </div>

                        <div class="item_text">
                            <h5>Sarah Smith</h5>
                            <h6>envato.com</h6>

                            <p>
                                Natus voluptatum enim quod necessitatibus quis expedita
                                harum provident eos obcaecati id culpa corporis molestias.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection