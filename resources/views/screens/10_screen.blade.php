<div class="screen--10__bg">
    <div class="container-fluid container-max-width screen--10">
        <div class="row">
            <div class="col-xl-7 screen--10__col-xl-7 py-xl-5">
                <div class="screen--10__content">
                    <p class="h1 screen--10__display-4 text-white mb-5">
                        Revolutionize the fiduciary <br>
                        with ET Protocol
                        <span class="block-line bg-primary"></span>
                    </p>
                    <p class="h3 screen--10__desc font-weight-normal text-white mb-xl-5 pb-xl-4">
                        The ET Protocol is destined to spawn many trusted
                        fiduciary dApps that will discover and dominate new
                        fiduciary market opportunites, making their founders wealthy. Do not miss out and integrate the ET Protocol today to become the most secure, flexible, cutting edge fiduciary service!
                    </p>
                </div>
            </div>
            <div class="col pt-5 mt-3">
                {!! Form::open(['url' => 'foo/bar', "class"=>"screen--10__form d-block"]) !!}
                    <p class="text-blue h2 font-weight-semibold screen--10__form__title mb-5 text-center text-xl-left">
                        Fill out this form, and we will
                        contact you to help you set up your own fiduciary dApp
                    </p>
                    <div class="screen--10__form__box">
                        <div class="">
                            <div class="form-inline d-block d-sm-flex">

                                @include("forms._input", [
                                "name"=>1,
                                "placeholder"=>"Your name",
                                "class"=>"w-100",
                                "formGroupClass"=>"mr-sm-3 mb-3 flex-grow-1"
                                ])
                                @include("forms._input", [
                                "name"=>2,
                                "placeholder"=>"Your e-mail*",
                                "class"=>"w-100",
                                "formGroupClass"=>"mb-3 flex-grow-1"
                                ])
                            </div>
                            <div class="form-inline d-block d-sm-flex">

                                @include("forms._input", [
                                "name"=>3,
                                "placeholder"=>"Link to you linkedin",
                                "class"=>"w-100",
                                "formGroupClass"=>"mr-sm-3 mb-3 flex-grow-1"
                                ])
                                @include("forms._input", [
                                "name"=>4,
                                "placeholder"=>"Name of your company",
                                "class"=>"w-100",
                                "formGroupClass"=>"mb-3 flex-grow-1"
                                ])
                            </div>
                        </div>
                        <hr>
                        <div class="">
                            <div class="form-inline ">

                                <p class="mb-0 h4 lh-1">
                                    Company category
                                </p>
                                @include("forms._select", [
                                "name"=>5,
                                "placeholder"=>"Private crypto fund",
                                "class"=>"js-selectric",
                                "classWrap"=>"ml-3 mb-3 mt-3 mt-lg-0 mt-xl-3 flex-grow-1",
                                "list"=>[
                                1=>"Private crypto fund"
                                ]
                                ])
                            </div>
                            <div class="my-3">
                                @include("forms._checkbox", [
                                "name"=>6,
                                "class"=>"",
                                "label"=>'I have read and accepted your <a class="screen--10__form__link" href="#">Privacy Policy</a> and <a class="screen--10__form__link" href="#">Terms of Use</a>',
                                ])
                            </div>
                        </div>
                    </div>
                <a href="#" class="btn btn-primary btn-block mt-5">
                    sign up
                </a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="screen--10__bg--2">
    <div class="container-fluid container-max-width pt-4">
        <div class="row">
            <div class="col-xl-7 screen--10__col-xl-7">
                <div class="screen--10__content">
                    <p class="h1 screen--10__display-4 mt-5 mb-3">
                        About us
                        <span class="block-line bg-primary"></span>
                    </p>
                    <p class="font-weight-bold screen--2__content h3 text-blue p-line-height">
                        The team that can make it happen
                    </p>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
</div>





