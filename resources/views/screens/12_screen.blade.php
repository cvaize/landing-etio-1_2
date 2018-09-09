<div class="bg-primary">
    <div class="container screen--12">
        <div class="row">
            <div class="col-12">
                <div class="screen--4_1__ml">
                    <p class="mb-4 fz-3_5 lh-1_2 text-white">
                        Our Technical Roadmap
                    </p>
                    <div class="block-line bg-white mb-4"></div>
                </div>
            </div>
            <?php
            $arr13 = [
                [
                    "text"=>"Design of the global blockchain & smart contracts architecture finished",
                    "data"=>"April 2018"
                ],
                [
                    "text"=>"Public launch of an Ethereum-based data storage MVP application. The MVP contains personal profiles for clients and providers, mechanisms of purpose decomposition, and user registration logic",
                    "data"=>"May 2018"
                ],
                [
                    "text"=>"Distributed Oracles System added to the MVP",
                    "data"=>"June 2018"
                ],
                [
                    "text"=>"Integrations with other blockchains and autonomous file systems added",
                    "data"=>"July 2018"
                ],
                [
                    "text"=>"Decentralized Autonomous Organization (DAO) launched",
                    "data"=>"August 2018"
                ],
                [
                    "text"=>"More than a hundred experts registered as Oracles on the platform",
                    "data"=>"October 2018"
                ],
                [
                    "text"=>'Starting integration of AI as Oracles within the "Purpose Execution Flow" scope',
                    "data"=>"December 2018"
                ],
                [
                    "text"=>'Primary integration of AI into the distributed Oracle system within the "Purpose Execution Flow" completed',
                    "data"=>"February 2019"
                ],
                [
                    "text"=>'Starting the development of a token-based crowdfunding platform for R&D initiatives that can cover components from the "Provider waiting loop"',
                    "data"=>"April 2019"
                ],
                [
                    "text"=>'Primary integration of AI into the distributed Oracle system within the "Purpose Execution Flow" completed',
                    "data"=>"February 2019"
                ],

            ];
            ?>
        </div>
        <div class="row screen--12__box no-gutters justify-content-center justify-content-md-between">
            @foreach($arr13 as $key=>$item)
                @if($key === sizeof($arr13)/2)
                    <div class="screen--12__item--marker w-100 d-block d-xl-none"></div>
                    <div class="screen--12__item--marker w-100 d-block d-xl-none"></div>
                @endif
                <div class="col-12 col-lg-auto screen--12__item screen--12__item--marker">
                    <div class="screen--12__content font-weight-extrabold fz-1 lh-1 py-3 px-2">
                        <div class="screen--12__text font-weight-bold">
                            <div class="screen--12__up-dot">
                                <img src="/img/screen12/up-dot.png" alt="">
                            </div>
                            <div class="screen--12__down-dot">
                                <img src="/img/screen12/down-dot.png" alt="">
                            </div>
                            <div class="lh-1_3 fz-1">
                                {!! $item["text"] ?? null !!}
                            </div>
                        </div>
                        <p class="screen--12__data lh-1_3 fz-1">
                            {!! $item["data"] ?? null !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>