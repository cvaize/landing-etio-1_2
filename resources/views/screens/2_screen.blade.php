<div class="screen--1__bg">
    <div class="container-fluid container-max-width screen--2__bg">
        <div class="row" style="background: #0163D7;">
            <div class="col-lg-8 py-5 pr-md-5">
                <div class="pr-md-5 mr-md-5">
                    <p class="h1 screen--2__title mb-4 pb-2 mt-5 pt-3">
                        ET is the world's first fiduciary crypto protocol for creating decentralized apps that securely
                        administer crypto assets through collective decision-making
                        <span class="block-line"></span>
                    </p>
                    <p class="h3 mb-4 pb-2 screen--2__content p-line-height">
                        Eternal Trusts Protocol replicates the traditional "purpose trust" framework with crypto
                        technologies, making it flexible, transparent, and affordable for the end user. The ET Protocol is
                        open to any business owner, financial service provider, trustee, or family office interested in
                        accepting cryptocurrencies, integrating blockchain into its business processes, and offering a brand
                        new model of trusted asset administration to their clients.
                    </p>
                    <p class="font-weight-bold screen--2__content h3 text-success mb-5 pr-md-5 p-line-height mr-md-4">
                        Integration is done easily by ordering a ready-made, white labeled
                        decentralized app (dApp) from Eternal Trusts.
                    </p>
                </div>
            </div>
            <div class="col-12 position-relative zi-2">
                <div class="row">
                    <div class="col-xl-5 pl-5">
                        <div class="pl-md-5 ml-lg-5">
                            <p class="h1 screen--2__display-4">
                                Smart asset <span class="block-line"></span><br>
                                administration
                            </p>
                            <p class="font-weight-bold screen--2__content h3 text-success p-line-height">
                                & fiduciary process
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="d-flex flex-wrap p-3">
                            <?php
                            $arr1 = [
                                [
                                    "img" => "/img/screen2/family.png",
                                    "alt" => "family",
                                    "text" => "
                                For Family <br>
                                    Offices
                                    "
                                ],
                                [
                                    "img" => "/img/screen2/bank.png",
                                    "alt" => "bank",
                                    "text" => "
                                For <br>
                                Banks
                                    "
                                ],
                                [
                                    "img" => "/img/screen2/shield.png",
                                    "alt" => "shield",
                                    "text" => "
                                For Trustees <br>
                                & Fiduciaries
                                    "
                                ],
                                [
                                    "img" => "/img/screen2/donation.png",
                                    "alt" => "donation",
                                    "text" => "
                                For <br>
                                Charities
                                    "
                                ],
                                [
                                    "img" => "/img/screen2/test-tube.png",
                                    "alt" => "test-tube",
                                    "text" => "
                                For Biomaterial <br>
                                Storage Companies
                                    "
                                ],
                                [
                                    "img" => "/img/screen2/folder.png",
                                    "alt" => "folder",
                                    "text" => "
                                For Private <br>
                                Use
                                    "
                                ],
                            ]
                            ?>
                            @foreach($arr1 as $item)
                                <div class="col-sm-6 col-lg-4">
                                    <div class="screen--2__box clip-path-top-right">
                                        <img height="60" src="{{$item["img"] ?? null}}" alt="{{$item["alt"] ?? null}}">
                                        <p class="screen--2__box__text h3 text-nowrap">
                                            {!! $item["text"] ?? null !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 screen--2__bg--2 screen--2__comment__wrap zi-1">
                <div class="m-3 p-5 screen--2__comment">
                    <p class="h3 screen--2__title--2">
                        The mission of ET is to revolutionize the centuries old fiduciary industry and make it secure,
                        autonomous, transparent, flexible, and affordable by creating the world's first fiduciary crypto
                        protocol. The inherent qualities of cryptocurrency-based solutions allow us to design
                        an innovative model of a Trust Fund which absolutely outperforms and outcompetes its traditional
                        predecessor.
                    </p>
                    <p class="font-weight-bold screen--2__content--2 h3 text-success p-line-height py-3">
                        Take a leap into the decentralized future of financial industry with Eternal Trusts!
                        <span class="block-line"></span>
                    </p>
                    <div class="d-flex">
                        <div class="row no-gutters">
                            <div class="col-auto pr-3">
                                <img style="height: 5rem" class="img-thumbnail rounded-circle border-0" src="/img/default.png" alt="default">
                            </div>
                            <div class="col d-flex align-items-center justify-content-start">
                                <div>
                                    <p class="mb-2 h4 lh-1">Kirill Silvestrov</p>
                                    <p class="mb-0 h5 lh-1">Founder of Eternal Trusts</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>