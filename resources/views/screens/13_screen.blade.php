<div class="bg-white">
    <div class="container screen--13">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="screen--4_1__ml">
                    <p class="mb-4 fz-3_5 lh-1_2">
                        About us
                    </p>
                    <div class="block-line bg-primary mb-4"></div>
                    <p class="font-weight-normal text-blue fz-1_7 lh-1_5 mb-5">
                        The team that can make it happen
                    </p>
                </div>
            </div>

            <?php
            $aboutUs = [
                [
                    "avatar"=>"https://static.tildacdn.com/tild3966-6438-4263-a234-613633346163/881f1418-a483-470c-8.jpg",
                    "name"=>"KIRILL SILVESTROV",
                    "pos"=>"CEO",
                    "InLink"=>"https://www.linkedin.com/in/kirill-silvestrov-0753222/",
                    "text"=>"Investment banker with more than 15 years of experience on C-level positions. Portfolio investor in biotech companies. MBA from INSEAD business school."
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild6330-6265-4935-a462-633666333538/6b4a8bcb-8b13-4aa0-b.png",
                    "name"=>"MARK LEA",
                    "pos"=>"Head of Legal",
                    "InLink"=>"https://www.linkedin.com/in/mark-lea-a1a3b515b/",
                    "text"=>"Mark is an ex-adviser to the Government of Singapore on the establishment of trust legislation and the Trustees Act of Singapore. Under his leadership, changes and additions were made to the Hong Kong Trust Law. He is an adviser to the Malaysian government on the development of the Labuan legislation, including the Trust Law, the Associations Act, the Foundations Act. He is an international adviser to the Government of Samoa and is the creator of the new law on trusts Foundations Law & Trustee Companies Bill."
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3432-3536-4961-b661-343936663933/763478b0-2515-48e8-8.jpg",
                    "name"=>"BENOIT VULIC, CFA ",
                    "pos"=>"Chief Investment Officer, Asset Management ",
                    "InLink"=>"https://www.linkedin.com/in/benoit-vulic-59176451",
                    "text"=>'More than 10 years of asset management experience in leading global investment companies. Experience in managing "funds of funds" and active portfolio management. Developer of the Eternal Trusts investment strategy.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3531-3936-4639-a362-613564373166/8420cb59-89bd-4d51-8.jpg",
                    "name"=>"ARTEM ANANYAN ",
                    "pos"=>"Chief Financial Officer ",
                    "InLink"=>"https://www.linkedin.com/in/artem-ananyan-44245a",
                    "text"=>'Economic analysis and financial modelling professional with 15 years experience. Majors in capital markets for over 10 years. Has extensive skills in tailoring investment projects and deals in fields of stock market, mutual investments and securitisations. '
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild6364-6134-4338-b336-383531306165/b91471cb-509a-4c6b-8.jpg",
                    "name"=>"ILYA SAPRANIDI ",
                    "pos"=>"Chief Marketing Officer",
                    "InLink"=>"https://www.linkedin.com/in/sapranidi",
                    "text"=>'Researcher at Carboncopies on Neurotechnology. 8 years of R&D experience in Neurocomputing, 4 years in Innovation Management and Technology Entrepreneurship. Student of MIT Global Startup Labs 2017.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3262-3636-4137-a563-363236363339/1ed42744-143f-481a-9.jpg",
                    "name"=>"ALEXANDER GORSHENEV ",
                    "pos"=>"Lead Full-Stack Developer, Project Management",
                    "InLink"=>"https://www.linkedin.com/in/alexander-gorshenev-33469460",
                    "text"=>'Full stack developer with 10 years of experience, founder of VistaComputers, Loborato, Reflexit. Specializes in automation software, web solutions, ERPs, CRMs. More than 2 years of experience developing blockchain applications and smart contracts for ICO projects. Leading a team of 44 developers since 2008.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3763-6135-4666-a537-623230386332/6efcde90-b17c-4932-b.jpg",
                    "name"=>"EVGENY BATYUKOV",
                    "pos"=>"Chief Technology Officer",
                    "InLink"=>"http://www.linkedin.com/in/batyukov",
                    "text"=>'Senior web engineer with six years of experience developing commercial systems in the B2B segment. Founder of Batyukov Studio LLC. The main area of expertise: architecture design for web applications and e-commerce software development.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild6439-3462-4334-b265-373462373333/947b9a64-e515-4166-a.jpg",
                    "name"=>"VADIM PEREDOLSKY ",
                    "pos"=>"Art Director ",
                    "InLink"=>"https://www.linkedin.com/in/vadim-peredolskiy",
                    "text"=>'Creative marketing campaigns for international brands, author of various publications on marketing and branding.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild6261-3163-4832-b662-356566396563/75c59c7e-c1fa-444a-8.jpeg",
                    "name"=>"ELENA ABRAMOVA ",
                    "pos"=>"Artist, designer ",
                    "InLink"=>"https://www.linkedin.com/in/elena-abramova-pd/",
                    "text"=>'Brand creation, corporate identity, commercial campaigns.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3137-3435-4635-b963-613561393466/photo_2018-07-10_14-.jpg",
                    "name"=>"IVAN SHADRIN",
                    "pos"=>"Product Marketing Manager",
                    "InLink"=>"https://www.linkedin.com/in/ivan-shadrin-a50171162/",
                    "text"=>'Operations & Project Manager at Ventuary. Former Data Analyst at Cbonds. Graduated from Saint Petersburg Polytechnical University.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild6133-6337-4439-b130-623134343966/c51d3120-8e4e-467d-8.jpg",
                    "name"=>"CATHERINE LASLO",
                    "pos"=>"Marketer-analyst",
                    "InLink"=>"https://www.linkedin.com/in/catherine-laslo-ab41b0130/",
                    "text"=>'4 years in the biotech sphere as a marketer.
СMO at Medmetrics Inc, Assistant of the CBDO at Incart Inc.
Graduated from MIT Global Startup Labs 2017. '
                ],
            ]
            ?>

            @foreach($aboutUs as $item)
                <div class="col-lg-4 mb-5">
                    <div class="screen--13__box">
                        <div class="screen--13__avatar">
                            <a href="{!! $item["InLink"] ?? null !!}">
                                <div class="screen--13__icon rounded-circle">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                            </a>
                            <div class="position-relative screen--13__img img-thumbnail rounded-circle border-0" style="background-image: url({!! $item["avatar"] ?? "/img/default.png" !!});"></div>
                        </div>
                        <p class="position-relative fz-1_7 lh-1_4 font-weight-bold ">
                            {!! $item["name"] ?? null !!}
                        </p>
                        <p class="position-relative fz-1_3 lh-1_5 font-weight-semibold">
                            {!! $item["pos"] ?? null !!}
                        </p>
                        <p class="position-relative fz-1_1 lh-1_7 text-muted">
                            {!! $item["text"] ?? null !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <div class="screen--4_1__ml">
                    <p class="mb-4 fz-3_5 lh-1_2">
                        Our advisors
                    </p>
                    <div class="block-line bg-primary mb-4"></div>
                    <p class="font-weight-normal text-blue fz-1_7 lh-1_5 mb-5">
                        Top experts from fields of long-term purposes execution
                    </p>
                </div>
            </div>

            <?php
            $ourAdvisors = [
                [
                    "avatar"=>"https://static.tildacdn.com/tild3965-3864-4466-a166-383138316439/7e6ee559-6b35-4369-b.jpg",
                    "name"=>"RANDAL A. KOENE",
                    "pos"=>"Biomedicine",
                    "InLink"=>"https://www.linkedin.com/in/randalkoene",
                    "text"=>"Randal A. Koene, neuroscientist and neuroengineer, co-founder of carboncopies.org, the outreach and roadmapping organization for advancing Substrate-Independent Minds. Former Professor at the Center for Memory and Former of Boston University, co-founder of the Neural Engineering Corporation of Massachusetts. "
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3235-3532-4161-b861-336432353065/cff19570-92f2-431f-8.jpg",
                    "name"=>"ROBIN HANSON ",
                    "pos"=>"Finance",
                    "InLink"=>"https://www.linkedin.com/in/robin-hanson-5156b/",
                    "text"=>"Robin Hanson is associate professor of economics at George Mason University, and research associate at the Future of Humanity Institute of Oxford University. He has a doctorate in social science from California Institute of Technology, master's degrees in physics and philosophy from the University of Chicago, and nine years experience as a research programmer, at Lockheed and NASA."
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild6437-6361-4364-a239-393933613835/c7bd92d1-1708-4b37-b.jpg",
                    "name"=>"ALEKSEI PUPYSHEV",
                    "pos"=>"Smart Contracts & Product Architecture",
                    "InLink"=>"https://www.linkedin.com/in/aleksei-pupyshev-23a70954/",
                    "text"=>'Experienced Data Scientist and Artificial Intelligence Applications Consultant. Neuroscientist. Former Data Science & Engineering Group Manager at Wrike. Former Artificial Intelligence Expert at MailRu Group. Founder, Research & Strategy at Ventuary, an analytical platform of tokensale campaigns. Organizer of the Blockchain Analytics MeetUp.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3533-3562-4439-a332-666635623030/4db38786-fe43-44ef-9.jpeg",
                    "name"=>"DINESH ATOLIYA",
                    "pos"=>"Smart Contracts & Blockchain",
                    "InLink"=>"https://www.linkedin.com/in/dinesh-a-9a5b1133",
                    "text"=>'Dinesh is the CTO of Techracers, a large blockchain solutions provider and a partner of Eternal Trusts. He is an accomplished executive with more than 10 years of experience in bringing focus on innovation, revenue growth, and building teams. He is skilled in all phases of the project lifecycle, from the initial feasibility analysis to conceptual design through implementation and enhancement. '
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3734-3961-4534-b765-383665363431/74b871e4-d96a-402e-8.jpg",
                    "name"=>"JILLIAN GODSIL ",
                    "pos"=>"PR ",
                    "InLink"=>"https://www.linkedin.com/in/jilliangodsil/",
                    "text"=>"Jillian has held senior positions with global PR companies in Sydney, Singapore, London and Dublin. She was PRO of Iona Technologies (Ireland's first company to float on NASDAQ). She is a freelance journalist with CryptoCoin.News, The Irish Independent and The Irish Times. She has her own radio show on DublinCityFM. She is advisor to a number of ICOs, has been named a Crypto Queen by In Zero Conferences as well as listed in the 50 most influential women in blockchain rollcall. "
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild6633-3231-4931-a361-613237616534/daf3c313-eede-4ad5-a.jpeg",
                    "name"=>"SERGEY KISELEV ",
                    "pos"=>"Strategy",
                    "InLink"=>"https://www.linkedin.com/in/sergey-kiselev-6a8404",
                    "text"=>'Former partner of the consulting group Mckinsey in the CIS with more than ten years of experience in determining company development strategies and working with the regulation of various industries. He is engaged in the development of business in Europe in the innovative transport sector, including cloud and blockchain technologies.'
                ],
                [
                    "avatar"=>"https://static.tildacdn.com/tild3665-3465-4531-a462-366665326632/3bd0165a-7ceb-47f0-9.jpg",
                    "name"=>"IGOR KARAVAEV",
                    "pos"=>"Investor Relations ",
                    "InLink"=>"https://www.linkedin.com/in/igor-karavaev-80a0674",
                    "text"=>'Serial Advisor for Investor Relations projects, top-expert at ICOBench. Executive Director of Skolkovo Foundation, a leading high-tech incubator. Head of Strategy, Business Development, investments of the largest multinational companies.'
                ],
            ];
            ?>
            @foreach($ourAdvisors as $item)
                <div class="col-lg-4 mb-5">
                    <div class="screen--13__box">
                        <div class="screen--13__avatar">
                            <a href="#">
                                <div class="screen--13__icon rounded-circle">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                            </a>
                            <div class="position-relative screen--13__img img-thumbnail rounded-circle border-0" style="background-image: url({!! $item["avatar"] ?? "/img/default.png" !!});"></div>
                        </div>
                        <p class="position-relative fz-1_7 lh-1_4 font-weight-bold ">
                            {!! $item["name"] ?? null !!}
                        </p>
                        <p class="position-relative fz-1_3 lh-1_5 font-weight-semibold">
                            {!! $item["pos"] ?? null !!}
                        </p>
                        <p class="position-relative fz-1_1 lh-1_7 text-muted">
                            {!! $item["text"] ?? null !!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



