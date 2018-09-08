<div class="bg-info">
    <div class="container-fluid container-max-width screen--3">
        <div class="row">
            <div class="col-12">
                <p class="h1 screen--3__display-4">
                    Value of ET Protocol for You as <br>
                    an Asset Administrator
                    <span class="block-line bg-primary"></span>
                </p>
            </div>
            <?php
            $arr2 = [
                [
                    "title"=>"Perspective for new markets <br>
& services",
                    "desc"=>"
Open the markets of crypto enthusiasts, the low/mid
income and developing markets, or solve a wider range
of purposes for your current target audience
                    "
                ],
                [
                    "title"=>"Earn more on managing assets <br>
through tokenization",
                    "desc"=>"
Crypto assets can be distributed among a variety of
asset classes via tokenized ETFs, equities, FI, REIT,
etc. to provide reasonable risk/returns ratio
                    "
                ],
                [
                    "title"=>"Safety
 <br>
of assets",
                    "desc"=>"
Assets are protected from all legal claims and
are impossible to withdraw without the whole platform
agreeing to the solution
                    "
                ],
                [
                    "title"=>"Flexible  <br>
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
                    "title"=>"Smarter decision  <br>
making",
                    "desc"=>"
Integrate expert networks and AI to solve any
fiduciary purpose of the client
                    "
                ],
                [
                    "title"=>"Faster  <br>
operations",
                    "desc"=>"
Decisions can be made remotely and are only limited
by the speed of the blockchains used
                    "
                ],
            ]
            ?>
            @foreach($arr2 as $item)
                <div class="col-md-6 col-lg-4 my-5">
                    <div class="d-flex align-items-center mb-5">
                        <div class="rounded-circle screen--3__circle">
                        </div>
                        <hr class="screen--3__hr">
                    </div>
                    <p class="h1 lh-1_4 mb-3 font-weight-semibold">{!! $item["title"]??null !!}</p>
                    <p class="text-muted h4 font-weight-normal">{!! $item["desc"]??null !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>