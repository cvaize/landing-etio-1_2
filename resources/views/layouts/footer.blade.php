<footer class="footer bg-info pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-lg-2 d-flex d-sm-block flex-column align-items-center justify-content-center">
                <div class="mb-4">
                    <a href="#">
                        <img style="height: 100px" src="/img/et-black.png" alt="et-black">
                    </a>
                </div>
                <p class="fz-0_8333 mb-4">
                    @ 2018 Eternal Trusts, Inc
                </p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 d-flex align-items-start justify-content-center">
                <ul class="list-unstyled small font-weight-black text-uppercase my-5">
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            ET Protocol
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            ET dApp
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            Documentation
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            About us
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            Technical Paper
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 d-flex align-items-start justify-content-center">
                <ul class="list-unstyled small font-weight-black text-uppercase my-5">
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            Terms of Use
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            Token Sale Agreement
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            Privacy Policy
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="text-black">
                            KYC AML Policy
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-xl-5 offset-xl-1 d-flex align-items-end flex-column">
                <div class="d-flex align-items-center mb-5">
                    <a class="d-block text-black link-hover--success fz-1_3 mr-5" href="#">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a class="d-block text-black link-hover--success fz-1_3 mr-5" href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="d-block text-black link-hover--success fz-1_3 mr-5" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="d-block text-black link-hover--success fz-1_3 mr-5" href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="d-block text-black link-hover--success fz-1_3 mr-5" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                {{ Form::open(["url"=>"/", "class"=>"d-block w-100 w-lg-auto"]) }}

                <div class="input-group">
                    @include("forms._input", [
                    "name"=>123,
                    "class"=>"footer__form-control",
                    "formGroupClass"=>"mb-5 mb-sm-0 h-100 pr-4 flex-grow-1",
                    "placeholder"=>"Your E-mail"
                    ])
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success">
                            Subsrcibe
                        </button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
            <div class="col-12 my-5">
                <p class=" font-weight-light fz-0_8333" style="color: #212121;">
                    disclaimer: purchase of ett tokens involves high-risk, and purchasers should be able to bear the loss of their entire purchase. all purchasers should make their own determination of whether or not to make any purchase, based on their own independent evaluation and analysis.do not purchase ett tokens if you are not an expert in dealing with cryptographic tokens and blockchain-based software systems. prior to purchase of ett tokens, you should carefully consider the terms and conditions of ett tokens sale agreement and, to the extent necessary, consult an appropriate lawyer, accountant, or tax professional. if any of terms are unacceptable to you, you should not purchase ett tokens. please note that eternal trusts is in the process of undertaking a legal and regulatory analysis of the functionality of ett tokens. following the conclusion of this analysis, company may decide to amend the intended functionality of ett token in order to ensure compliance with any legal or regulatory requirements to which company is subject. we shall publish a notice on our website of any changes that we decide to make modifications to the functionality of ett tokens and it is your responsibility to regularly check our website for any such notices. on the conclusion of this analysis, we will decide whether or not to change the functionality of eternal trusts platform and ett tokens. eternal trusts does not accept any users from the countries or territories where its activity shall be especially lisenced, accreditated or regulated by other ways. you shall check your applicable law and be fully responsible for any negative impact arisen from your residence country regulations. if you are travelling to any of these countries, you acknowledge that our services may be unavailable and/or blocked in such countries. eternal trusts reserves the right to impose additional requirements or conditions before accepting purchasers residing in or from specific countries in its sole discretion. citizens, residents and tax residents of the united states of america, singapore, south korea, north korea, taiwan, afghanistan, pakistan, iran, syria, yemen, somalia, sudan, south sudan, central african republic and countries or territories under the sanctions of the united nations, u.s. and the european union are not eligible and not allowed to participate in the ett tokens sale due to various taxation and regulatory issues. purchasers understand that eternal trusts does not act as a tax agent of user; purchasers and eternal trusts carry their tax obligations solely under the applicable laws of the country and location they reside in. eternal trusts is not a tax agent and therefore shall not provide users' financial information to any third parties. this information shall not be disclosed unless officially requested by government authorities. if you do not agree you must not access or use the website or purchase ett tokens via https://eternaltrusts.io/ website.
                </p>
            </div>
        </div>
    </div>

</footer>