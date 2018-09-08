<div class="bg-primary">
    <div class="container screen--6 text-white">
        <div class="row">
            <div class="col-12">
                <p class="screen--4_1__ml fz-3_5 lh-1_2">
                    How the ET crypto trust <br class="d-none d-md-block">
                    works for the end user
                </p>
                <div class="screen--4_1__ml block-line bg-white mb-5"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $arr2 = [
                [
                    "title"=>"Remote onboarding",
                    "desc"=>"A remote onboarding procedure through a convenient, customizable decentralized
application."
                ],
                [
                    "title"=>"Determining the end goal of the crypto trust",
                    "desc"=>"Creating a record in the private blockchain, including the end goal for asset spending,
the beneficiaries, and potential external triggers. "
                ],
                [
                    "title"=>"Assigning roles for Oracles",
                    "desc"=>"With the dApp founder's help, the client assigns roles for oracles (a network
of trusted decision makers tha will collectively administer assets). "
                ],
                [
                    "title"=>"Transfer the assets",
                    "desc"=>"Smart contracts are deployed. The client can transfer the assets under management
of the crypto trust.
"
                ],
                [
                    "title"=>"Managing assets",
                    "desc"=>"The chosen asset management providers or the trustee manage the client's assets
according to traditional strategies adjusted for the crypto world. The oracles vote
for the most optimal solutions for the client given the initial purposes."
                ],
                [
                    "title"=>"Solving the trust purpose",
                    "desc"=>"When the conditions of the client's purpose are met, Oracles release the client's assets
through a multisignature. All necessary payments and rewards are made automatically.
"
                ],
            ]
            ?>
            @foreach($arr2 as $key=>$item)
                <div class="col-md-6 col-lg-4 my-3 my-sm-4 screen--6__item">
                    <div class="d-flex align-items-center mb-4 px-3">
                        <div class="d-flex align-items-center screen--6__circle__wrap">
                            <div class="rounded-circle screen--6__circle">
                                {{$key+1}}
                            </div>
                        </div>
                        <hr class="screen--6__hr">
                    </div>
                    <p class="fz-2 lh-1_4 mb-3 font-weight-semibold px-3">{!! $item["title"]??null !!}</p>
                    <p class="fz-1_2 font-weight-normal px-3">{!! $item["desc"]??null !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>