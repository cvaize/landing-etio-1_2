<div class="screen--3_1__bg">
    <div class="container screen--3_1">
        <div class="row no-gutters">
            <div class="col-12 col-xl-auto screen--3_1__wrap">
                <p class="fz-3_5 mb-4 lh-1">
                    Smart asset administration
                </p>
                <div class="block-line mb-4"></div>
                <p class="text-success font-weight-semibold fz-2_2 lh-1">
                    & fiduciary process
                </p>
            </div>
            <?php
            $arr1 = [
                [
                    "img" => "/img/screen2/family.png",
                    "alt" => "family",
                    "text" => "
                                For Family
                                    Offices
                                    "
                ],
                [
                    "img" => "/img/screen2/bank.png",
                    "alt" => "bank",
                    "text" => "
                                For
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
                                For
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
                                For Private
                                Use
                                    "
                ],
            ]
            ?>
            @foreach($arr1 as $item)
                <div class="col col-md-auto screen--3_1__wrap">
                    <div class="bg-white screen--3_1__box clip-path-top-right">
                        <div class="text-center mb-4">
                            <img height="40" src="{{$item["img"]??null}}" alt="{{$item["alt"]??null}}">
                        </div>
                        <div class="block-line mb-3"></div>
                        <p class="fz-1_5 lh-1_4">
                            {!! $item["text"]??null !!}
                        </p>
                    </div>
                </div>
            @endforeach

            <div class="col-12 screen--3_1__bg--2 screen--3_1__comment__wrap zi-1">
                <div class="m-3 p-5 screen--3_1__comment">
                    <p class="fz-1 fz-sm-1_3 lh-1_2 lh-sm-1_9 text-black mb-4">
                        The mission of ET is to revolutionize the centuries old fiduciary industry and make it secure,
                        autonomous, transparent, flexible, and affordable by creating the world's first fiduciary crypto
                        protocol. The inherent qualities of cryptocurrency-based solutions allow us to design
                        an innovative model of a Trust Fund which absolutely outperforms and outcompetes its traditional
                        predecessor.
                    </p>
                    <p class="font-weight-bold text-success mb-4 fz-1_2 fz-sm-1_5 lh-1_3 lh-sm-1_6">
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
                                    <p class="mb-2 fz-1_3 lh-1 font-weight-bold text-black">Kirill Silvestrov</p>
                                    <p class="mb-0 fz-1_2 lh-1 text-black">Founder of Eternal Trusts</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="screen--3_1__offset"></div>
</div>