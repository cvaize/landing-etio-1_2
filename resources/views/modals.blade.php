<div class="modal fade" id="modal--contactUs" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-info border-0">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-3 pb-3 px-sm-5 pb-sm-5">
                {!! Form::open(['url' => 'https://eternaltrusts.com/api/wh', "class"=>"screen--10__form d-block"]) !!}
                <p class="text-blue fz-1_6 fz-sm-2 lh-1_4 font-weight-semibold screen--10__form__title mb-5 text-center text-xl-left">
                    Fill out this form, and we will
                    contact you to help you set up your own fiduciary dApp
                </p>
                @include("forms._input", [
                    "name"=>"landing-v1-email",
                    "label"=>"Your e-mail*",
                    "class"=>"w-100",
                    "required"=>true,
                    "formGroupClass"=>"w-100"
                ])
                @include("forms._input", [
                    "label"=>"Your name",
                    "name"=>"landing-v1-name",
                    "class"=>"w-100",
                    "formGroupClass"=>"w-100"
                ])

                @include("forms._input", [
                    "name"=>"landing-v1-urlLinkedIn",
                    "label"=>"Link to you linkedin",
                    "class"=>"w-100",
                    "formGroupClass"=>"w-100"
                ])

                @include("forms._textarea", [
                    "name"=>"landing-v1-comments",
                    "label"=>"Comment",
                    "class"=>"w-100",
                    "attributes"=>[
                    "rows"=>4,
                    ],
                    "formGroupClass"=>"w-100"
                ])
                @include("forms._input", [
                    "label"=>"Name of your company",
                    "name"=>"landing-v1-company",
                    "class"=>"w-100",
                    "formGroupClass"=>"w-100"
                ])
                @include("forms._select", [
                    "label"=>"Company category",
                    "name"=>"landing-v1-companyCategory",
                    "placeholder"=>"Private crypto fund",
                    "class"=>"js-selectric",
                    "classWrap"=>"w-100 mb-4",
                    "list"=>[
                        "Private crypto fund"=>"Private crypto fund",
                        "Trustee service"=>"Trustee service",
                        "Family office"=>"Family office",
                        "Charity"=>"Charity",
                        "Bank"=>"Bank",
                        "Asset Administration dApp"=>"Asset Administration dApp",
                        "Biomaterial storage facility"=>"Biomaterial storage facility",
                        "Pension funds"=>"Pension funds",
                        "Prediction networks &amp; AI providers"=>"Prediction networks &amp; AI providers",
                        "Other"=>"Other",
                    ]
                ])
                @include("forms._checkbox", [
                    "name"=>"accepted",
                    "class"=>"",
                    "required"=>true,
                    "label"=>'I have read and accepted your <a target="_blank" class="screen--10__form__link" href="https://eternaltrusts.io/docs/mw/privacy.pdf">Privacy Policy</a> and <a target="_blank" class="screen--10__form__link" href="https://eternaltrusts.io/docs/mw/terms.pdf">Terms of Use</a>',
                ])
                <button type="submit" class="btn btn-primary btn-block mt-5 text-uppercase">
                    contact us
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>