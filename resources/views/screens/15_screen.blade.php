<div class="bg-white">
    <div class="container screen--15">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 mb-5 pb-5">
                <div class="screen--4_1__ml">
                    <p class="mb-4 fz-3_5 lh-1_2">
                        Our partners
                    </p>
                    <div class="block-line bg-success mb-4"></div>
                </div>
            </div>
            <?php
            $parners = [
                [
                    "img"=>"https://static.tildacdn.com/tild6365-3735-4962-b165-646564666561/eea-logo-new.png",
                    "link"=>"https://entethalliance.org/"
                ],
                [
                    "img"=>"https://static.tildacdn.com/tild3733-3431-4538-a563-346162306464/download.png",
                    "link"=>"https://carboncopies.org"
                ],
                [
                    "img"=>"https://static.tildacdn.com/tild3765-3731-4535-b939-393162396162/b3a94846-848c-4df6-9.png",
                    "link"=>"https://ventuary.com/"
                ],
                [
                    "img"=>"https://static.tildacdn.com/tild6437-6663-4535-b761-613430633436/logo-h_1.svg",
                    "link"=>"https://dehedge.com/set-language/En"
                ],
                [
                    "img"=>"https://static.tildacdn.com/tild3536-3336-4938-b064-623037643330/Screenshot_at_Jun_26.png",
                    "link"=>"https://www.techracers.com/"
                ],
                [
                    "img"=>"https://static.tildacdn.com/tild6336-6665-4730-b464-326334636632/logo-black.png",
                    "link"=>"https://forseti.im/"
                ],
                [
                    "img"=>"https://static.tildacdn.com/tild3339-6361-4163-a162-656238336330/Screenshot_at_Jun_26.png",
                    "link"=>"https://www.belhard.com/en/"
                ],
                [
                    "img"=>"https://static.tildacdn.com/tild3733-3536-4237-b665-383662663732/MiRAK-LOGO.png",
                    "link"=>"https://mirak.no/"
                ],
                [
                    "img"=>"https://static.tildacdn.com/tild3837-3736-4766-a661-313262646461/logo3.png",
                    "link"=>"",
                    "style"=>"background-size: 90%;"
                ],
            ];
            ?>
            @foreach($parners as $item)
                <div class="col-12 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <a href="{{$item["link"] ?? null}}">
                        <div class="border">
                            <div class="embed-responsive embed-responsive-21by9">
                                <div class="embed-responsive-item">
                                    <div class="p-4 w-100 h-100">
                                        <div class="screen--15__img w-100 h-100" style="background-image: url({{$item["img"] ?? null}});{{$item["style"] ?? null}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>



