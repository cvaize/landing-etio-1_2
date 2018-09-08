<div class="bg-white">
    <div class="container screen--3 pt-0">
        <div class="row">
            <div class="col-12">
                <p class="h1 screen--3__display-4">
                    Value of ET Protocol for You as <br>
                    an Asset Administrator
                </p>
                <div class="block-line screen--3__display-4 my-3"></div>
                <div class="pb-5"></div>
            </div>
            <?php
            $arr2 = [
                [
                    "title"=>"Perspective for new markets
& services",
                    "desc"=>"
Open the markets of crypto enthusiasts, the low/mid
income and developing markets, or solve a wider range
of purposes for your current target audience
                    "
                ],
                [
                    "title"=>"Earn more on managing assets
through tokenization",
                    "desc"=>"
Crypto assets can be distributed among a variety of
asset classes via tokenized ETFs, equities, FI, REIT,
etc. to provide reasonable risk/returns ratio
                    "
                ],
                [
                    "title"=>"Safety
of assets",
                    "desc"=>"
Assets are protected from all legal claims and
are impossible to withdraw without the whole platform
agreeing to the solution
                    "
                ],
                [
                    "title"=>"Flexible
& Modular",
                    "desc"=>"
Integrate only what your company needs,
be it cryptocurrency payment gates or the full decision
making process. Varying levels of trust structure,
privacy, and voting rights highly configurable by you
as the dApp founder
                    "
                ],
                [
                    "title"=>"Smarter decision
making",
                    "desc"=>"
Integrate expert networks and AI to solve any
fiduciary purpose of the client
                    "
                ],
                [
                    "title"=>"Faster
operations",
                    "desc"=>"
Decisions can be made remotely and are only limited
by the speed of the blockchains used
                    "
                ],
            ]
            ?>
            @foreach($arr2 as $item)
                <div class="col-md-6 col-lg-4 my-3 my-lg-4">
                    <div class="d-flex align-items-center mb-5">
                        <div class="rounded-circle screen--3__circle">
                        </div>
                        <hr class="screen--3__hr">
                    </div>
                    <p class="fz-1_4 fz-sm-2 lh-1_3 mb-3 font-weight-semibold">{!! $item["title"]??null !!}</p>
                    <p class="text-muted fz-1 fz-sm-1_2 lh-1_4 lh-sm-2">{!! $item["desc"]??null !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>