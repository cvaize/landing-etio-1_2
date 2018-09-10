<div class="screen--16__bg--1 pt-md-5">
    <div class="container screen--16 pt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="screen--4_1__ml">
                    <p class="mb-3 fz-3_5 lh-1_2 text-white">
                        Eternal Trusts in Media
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="screen--16__bg--2">
    <div class="container screen--16 pb-5">
        <div class="row justify-content-center pb-md-5">
            <div class="col-12 mb-5 pb-5">
                <div class="screen--4_1__ml">
                    <div class="block-line bg-white mb-4 mt-2"></div>
                </div>
            </div>

            <?php
            $media = [
                [
                    "link"=>"https://www.coinspeaker.com/2018/04/20/interview-randal-koene-scientific-advisor-blockchain-based-platform-eternal-trusts/",
                    "img"=>"https://static.tildacdn.com/tild6430-3533-4130-b932-616530646337/2.png",
                    "title"=>"Interview with Randal Koene, Scientific Advisor at Blockchain-based Platform Eternal Trusts",
                    "desc"=>"Randal Koene, a Dutch neuroscientist and neuroengineer, talked to Coinspeaker about Eternal Trusts, the world's first blockchain project that promises to turn your dreams into reality."
                ],
                [
                    "link"=>"https://www.entrepreneur.com/article/312712",
                    "img"=>"https://static.tildacdn.com/tild6265-3363-4735-b030-363035633063/3.png",
                    "title"=>"Can Blockchain Technology Bring Dreams to Reality?",
                    "desc"=>"Just a week ago, we discovered a blockchain company which can make dreams come true. We got very excited about this amazing blockchain technology, so our CEO Paulius Stankevicius interviewed the CEO, Kirill Silvestrov, of Eternal Trusts to find out how technology can bring dreams to reality."
                ],
                [
                    "link"=>"http://cryptoconsulting.info/2018/news/most-interesting-ico-projects/?tg_rhash=010112b23fd66b",
                    "img"=>"https://static.tildacdn.com/tild3039-3666-4561-a336-336533336632/4.png",
                    "title"=>"Eternal Trusts: Investment Into Making the Dreams Come True ",
                    "desc"=>"Eternal Trusts is the world's first blockchain platform for deferred purchase of currently unavailable services. The platform allows you to program future transactions on smart contracts and perform them when it becomes available, legal and conforms to ethical standards."
                ],
                [
                    "link"=>"http://cryptoconsulting.info/2018/news/most-interesting-ico-projects/?tg_rhash=010112b23fd66b",
                    "img"=>"https://static.tildacdn.com/tild3837-3664-4338-a238-623862316464/12.png",
                    "title"=>"Mark Lea: Eternal Trusts has brought trusts to a new level",
                    "desc"=>"Eternal Trusts stakes the claim to be the world's first blockchain platform for the pending acquisition of goods or services that aren't yet available, including cloning or the restoration of the human neural network after cryonic preservation – whenever this becomes available both legally and ethically. To ensure that, ET creates discretionary purpose trusts for their clients, as well as legal structures protecting the clients' assets."
                ],
                [
                    "link"=>"http://cryptoconsulting.info/2018/news/most-interesting-ico-projects/?tg_rhash=010112b23fd66b",
                    "img"=>"https://static.tildacdn.com/tild6266-3334-4339-a562-656438313638/7.png",
                    "title"=>"Most interesting blockchain projects",
                    "desc"=>"Blockchain is not just a fancy new word, it's a technological breakthrough that has affected almost every part of the market. New ICO projects are being launched every day, so we decided to make a list of the most interesting ones in 2018. But first let's take a close look at blockchain itself."
                ],
                [
                    "link"=>"https://www.btc-echo.de/mark-lea-eternal-trusts-hat-trusts-auf-eine-neue-ebene-gebracht/",
                    "img"=>"https://static.tildacdn.com/tild6532-3030-4366-b663-383233623963/13.png",
                    "title"=>"Mark Lea: Eternal Trusts hat Trusts auf eine neue Ebene gebracht",
                    "desc"=>"Eternal Trusts stellt den Anspruch, die weltweit erste Blockchain-Plattform für die noch ausstehende Beschaffung von Waren oder Dienstleistungen zu sein, die noch nicht verfügbar sind, einschließlich des Klonens oder der Wiederherstellung des menschlichen neuronalen Netzwerks nach Kryokonservierung – wann immer dies sowohl rechtlich als auch ethisch möglich ist. Um dies zu gewährleisten, schafft ET Vermögensverwaltungsmandate für ihre Kunden sowie rechtliche Strukturen, die das Vermögen der Kunden schützen."
                ],
            ];
            ?>

            @foreach($media as $item)
                <div class="col-lg-5 mb-5">
                    <a class="link-un d-block h-100" href="{{$item["link"]??null}}">
                        <div class="bg-white h-100 p-4">
                            <div class="mb-4">
                                <div class="embed-responsive embed-responsive-21by9">
                                    <div class="embed-responsive-item">
                                        <div class="w-100 h-100 img-cover" style="height: 35px; background-image: url({{$item["img"]??null}});"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="lh-1_2 fz-1_7 font-weight-semibold">
                                {{$item["title"]??null}}
                            </p>
                            <p class="lh-1_7 fz-1_2 font-weight-semibold text-muted">
                                {{$item["desc"]??null}}
                            </p>

                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>



