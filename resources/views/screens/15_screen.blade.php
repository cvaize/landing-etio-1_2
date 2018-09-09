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
            @foreach(range(1, 8) as $item)
                <div class="col-12 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <a href="#">
                        <div class="border">
                            <div class="embed-responsive embed-responsive-21by9">
                                <div class="embed-responsive-item">
                                    <div class="p-4 w-100 h-100">
                                        <div class="screen--15__img w-100 h-100" style="background-image: url(/img/screen13/{{$item}}.png);"></div>
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



