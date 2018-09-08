<div class="bg-primary">
    <div class="container-max-width screen--6 text-white">
        <div class="d-flex flex-wrap">
            <div class="col-12">
                <p class="h1 screen--6__display-4">
                    How the ET crypto trust <br>
                    works for the end user
                    <span class="block-line bg-success"></span>
                </p>
            </div>
        </div>
        <div class="d-flex flex-wrap screen--6__wrapper">
            <?php
            $arr2 = [
                [
                    "title"=>"1. Remote onboarding",
                    "desc"=>"A remote onboarding procedure through a convenient, customizable decentralized
application."
                ],
                [
                    "title"=>"2. Determining the end goal of the crypto trust",
                    "desc"=>"Creating a record in the private blockchain, including the end goal for asset spending,
the beneficiaries, and potential external triggers. "
                ],
                [
                    "title"=>"3. Assigning roles for Oracles",
                    "desc"=>"With the dApp founder's help, the client assigns roles for oracles (a network
of trusted decision makers tha will collectively administer assets). "
                ],
                [
                    "title"=>"4. Transfer the assets",
                    "desc"=>"Smart contracts are deployed. The client can transfer the assets under management
of the crypto trust.
"
                ],
                [
                    "title"=>"5. Managing assets",
                    "desc"=>"The chosen asset management providers or the trustee manage the client's assets
according to traditional strategies adjusted for the crypto world. The oracles vote
for the most optimal solutions for the client given the initial purposes."
                ],
                [
                    "title"=>"6. Solving the trust purpose",
                    "desc"=>"When the conditions of the client's purpose are met, Oracles release the client's assets
through a multisignature. All necessary payments and rewards are made automatically.
"
                ],
            ]
            ?>
            @foreach($arr2 as $item)
                <div class="col-md-6 my-3 my-sm-5 px-0 screen--6__item">
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex align-items-center screen--6__circle__wrap">
                            <hr class="screen--6__hr--pre">
                            <div class="rounded-circle screen--6__circle">
                            </div>
                        </div>
                        <hr class="screen--6__hr">
                    </div>
                    <p class="h1 lh-1_4 mb-3 font-weight-semibold px-5">{!! $item["title"]??null !!}</p>
                    <p class="h4 font-weight-normal px-5">{!! $item["desc"]??null !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>