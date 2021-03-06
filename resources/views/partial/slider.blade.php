<div class="container">
            <div class="d-flex flex-row bd-highlight mb-3 my-banner">
                <div class="p-2 bd-highlight my-banner__left">
                    <div class="my-banner__crop">

                        <img
                            src="http://localhost/CtyCPseed/{{$sliders->image_path}}"
                            alt=""
                        />
                    </div>
 
                    <div class="my-banner__thumbnail">
                        <p>cp seed company</p>
                    </div>
                </div>
                <div
                    class="p-2 bd-highlight d-flex flex-column justify-content-center align-items-start my-banner__right"
                >
                    <div>
                        <nav aria-label="breadcrumb my-banner__breadcrumb">
                            <ol class="breadcrumb">
                                @if(isset($breadcrumb))
                                @foreach($breadcrumb as $bread)
                                <li class="breadcrumb-item">
                                    <a href="{{ $bread->slug}}">{{ $bread->name}}</a>
                                </li>
                                @endforeach
                                @else
                                 <li class="breadcrumb-item">
                                    <a href=""></a>
                                </li>
                               @endif
                            </ol>
                        </nav>
                    </div>
 
                    <div>
                        <p class="my-banner__title">{{$sliders->name}}</p>
                    </div>
 
                    <div class="my-banner__des des-1">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Magni vero illum a laudantium quasi fugit
                            asperiores veritatis voluptas itaque, deserunt nihil
                            consequatur optio est doloribus laboriosam earum
                            dignissimos? Asperiores nihil quasi reiciendis,
                            numquam illo fugiat incidunt facere, sed at, quos
                            aliquam. Fugit voluptatem natus alias quia ducimus
                            sunt, cupiditate odio. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Magni vero illum a
                            laudantium quasi fugit asperiores veritatis voluptas
                            itaque, deserunt nihil consequatur optio est
                            doloribus laboriosam earum dignissimos? Asperiores
                            nihil quasi reiciendis, numquam illo fugiat incidunt
                            facere, sed at, quos aliquam. Fugit voluptatem natus
                            alias quia ducimus sunt, cupiditate odio.
                        </p>
                    </div>
 
                    <!-- Button trigger modal -->
                    <button
                        type="button"
                        class="btn btn-dark my-banner-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                    >
                        Đọc tiếp
                    </button>
 
                    <!-- Modal -->
                    <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                    >
                        <div
                            class="modal-dialog modal-dialog-scrollable my-banner-modal-dialog"
                        >
                            <div class="modal-content my-banner-modal-content">
                                <div class="modal-header">
                                    <h5
                                        class="modal-title title-1"
                                        id="exampleModalLabel"
                                    >
                                        Văn Hóa Công Ty
                                    </h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body des-1">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Omnis optio fugit
                                    assumenda iusto magni illum earum ipsum enim
                                    provident, dicta veniam doloribus! Iure
                                    aperiam, mollitia illum explicabo corporis
                                    eius nihil vero ea, dolores, earum omnis?
                                    Inventore odit beatae dolorem commodi nihil.
                                    Modi culpa, molestias placeat reprehenderit
                                    quam vitae. Dignissimos aperiam nobis quas!
                                    Accusamus explicabo eum facilis ex quas
                                    nesciunt, error neque est voluptates cum
                                    officiis quia autem dolores non quos fuga?
                                    Repudiandae eligendi aliquam beatae
                                    repellat? Veritatis temporibus deserunt
                                    laborum impedit laboriosam iusto? Nisi
                                    asperiores optio vitae rem nemo laudantium
                                    fuga eaque repellendus porro quaerat quod
                                    veniam vero soluta, ad delectus debitis.
                                    Earum quos ipsam nemo numquam tenetur fuga
                                    commodi! Natus impedit enim quia error ullam
                                    aspernatur nulla vero cupiditate veniam.
                                    Quaerat deserunt inventore similique in
                                    illum dolorem, neque ipsum, non pariatur
                                    amet laborum at soluta. Perferendis, atque
                                    explicabo illo eaque reprehenderit aliquid
                                    sapiente tempore ullam, accusamus repellat
                                    dolorum rem sit adipisci culpa in nemo sunt
                                    repudiandae ea porro a ut distinctio.
                                    Laboriosam nisi quasi incidunt beatae dolor
                                    rem, cum aspernatur aut illum, perferendis
                                    autem animi at velit ipsa inventore commodi
                                    iste placeat? Quisquam provident modi nemo
                                    tenetur voluptatibus, nisi dicta doloribus
                                    ex, eveniet perspiciatis vel fugiat ut
                                    beatae vero asperiores praesentium error
                                    vitae suscipit reiciendis expedita enim.
                                    Quae illum quasi rem quis sunt natus nemo,
                                    magnam incidunt repellendus, modi culpa in!
                                    Ipsa labore earum dolore! Laboriosam quia
                                    beatae a maxime sapiente deleniti laborum
                                    fugiat autem harum temporibus accusantium
                                    quos accusamus doloribus corporis, hic
                                    consequatur, aut aspernatur soluta nostrum!
                                    Harum quaerat distinctio esse deleniti natus
                                    minima quidem laboriosam cumque pariatur
                                    voluptatem. Sequi sed iusto itaque alias!
                                    Hic odit placeat, eos error sit assumenda
                                    vel quisquam neque porro molestias non
                                    voluptatibus perferendis et rerum inventore
                                    cumque dolorum libero mollitia debitis
                                    eligendi. Fugit maiores minima consequuntur
                                    quo laboriosam repudiandae minus, itaque
                                    sunt, quasi illo labore accusantium
                                    doloribus ea inventore et, ipsum esse!
                                    Nostrum nihil fugiat nemo repellat sunt
                                    dolorum repudiandae architecto temporibus
                                    rerum soluta neque dolores consequatur
                                    explicabo obcaecati, cupiditate quidem ea
                                    tenetur recusandae amet voluptates cumque,
                                    ad accusamus quisquam. Eius corporis aut
                                    dolor tenetur hic provident ex, suscipit
                                    itaque labore fugit iste commodi sed dicta
                                    eveniet inventore a, animi, neque aliquid
                                    vero officia consequatur libero voluptas
                                    temporibus nemo! Assumenda deserunt eligendi
                                    voluptatem vel nobis exercitationem officia
                                    eveniet consectetur harum quia. Eligendi
                                    quasi explicabo voluptates. Nostrum quis,
                                    corrupti numquam, laboriosam blanditiis fuga
                                    consequuntur soluta omnis quibusdam impedit
                                    quia! Delectus porro iste alias explicabo
                                    excepturi? Praesentium quae eum ex, eveniet
                                    error laudantium sequi illum in! Numquam
                                    nostrum eius odio labore consectetur cum in
                                    ab doloribus consequuntur, enim tenetur,
                                    voluptatem libero quae quisquam cumque a.
                                    Magnam dolorum sapiente illum nam autem sed
                                    neque natus facilis cumque dolorem possimus
                                    quis accusamus inventore non aspernatur,
                                    nobis ducimus fugit labore alias. Mollitia
                                    accusamus impedit quisquam incidunt corrupti
                                    quam aliquam magni repellat quidem porro?
                                    Cum possimus laudantium ipsam nobis, quidem
                                    veniam sunt provident culpa, voluptates
                                    totam et esse aperiam eveniet aut voluptatum
                                    animi! Placeat soluta mollitia pariatur
                                    error, voluptas impedit modi at quo dolorem
                                    laborum, praesentium ab voluptate sit quis
                                    aliquam eius quibusdam ex omnis. Nihil
                                    beatae doloremque illum voluptas optio
                                    itaque quod dolorum sunt ex quam tenetur
                                    reprehenderit sint excepturi doloribus nam
                                    natus ipsum nemo, cumque deleniti atque.
                                    Fugiat inventore, nisi sunt, vel assumenda,
                                    nemo necessitatibus cupiditate alias maiores
                                    beatae dolor sit blanditiis soluta
                                    consequuntur autem eaque molestiae rerum
                                    quam odio quos iste earum aperiam
                                    distinctio. Voluptate iusto dignissimos
                                    consequuntur soluta autem quas illum ratione
                                    corporis maxime cupiditate? Eligendi error
                                    veritatis dignissimos provident sunt vitae
                                    tempore fugit iure quod odit placeat nulla
                                    ex mollitia facere doloremque neque ab
                                    perspiciatis cupiditate, quisquam esse
                                    quaerat minus recusandae aliquam voluptatum.
                                    Sequi dicta alias nisi itaque ipsam aliquam
                                    quasi! Similique tempore fugit repellat vero
                                    perferendis soluta sunt corporis porro velit
                                    veritatis tempora laboriosam eius, modi
                                    quisquam molestias earum consectetur!
                                    Nesciunt exercitationem repellat voluptatum
                                    sed repudiandae fugiat quam perspiciatis
                                    soluta ducimus tempore vitae dolor autem at
                                    dicta expedita in laborum dolorem,
                                    consequuntur saepe? Eius quo facilis
                                    voluptate excepturi fugit, voluptatum
                                    necessitatibus ea recusandae sed explicabo
                                    rerum cupiditate accusantium distinctio eum
                                    similique. Atque laboriosam eum cum
                                    consequatur quis vero sapiente tenetur velit
                                    voluptates voluptatum accusantium aliquam
                                    voluptatem ducimus suscipit, dicta maiores
                                    necessitatibus? Cupiditate non voluptates
                                    laboriosam nemo dignissimos, est eos odit
                                    deleniti repudiandae in. Exercitationem
                                    animi sit quae architecto blanditiis ipsam
                                    doloremque illum voluptate corporis corrupti
                                    similique, sapiente provident officia iste
                                    iusto, optio repudiandae nemo commodi
                                    nostrum, impedit porro nihil! Dolores
                                    mollitia tempore eligendi molestiae
                                    consequuntur commodi perferendis eius,
                                    officiis modi quam hic quae provident odit,
                                    dolorem fugiat voluptates ipsum aliquam sed
                                    facilis, id sequi numquam est quo. Id
                                    possimus perferendis maiores placeat optio
                                    molestiae explicabo distinctio? Suscipit
                                    veritatis odio quo doloremque molestiae
                                    corrupti alias velit quasi. Nobis, eos
                                    consectetur dolorum atque quis possimus sed
                                    ad ut vitae quibusdam, molestias sapiente
                                    dicta vel aliquam ipsa. Rem similique dicta,
                                    dolor et quisquam obcaecati iusto
                                    cupiditate, totam blanditiis minima
                                    laboriosam non, expedita soluta! Hic iusto
                                    quaerat odio nostrum odit, at qui expedita
                                    deleniti sunt aut aliquam non dolores. Qui
                                    beatae voluptate perspiciatis placeat
                                    laboriosam impedit possimus libero nesciunt
                                    aspernatur nam consequuntur, aperiam
                                    deserunt esse reprehenderit maiores iure
                                    perferendis, ratione voluptates est quidem
                                    ex eius quisquam officia illo. Et ipsum
                                    similique fuga ipsam culpa iste fugiat
                                    nostrum, facere aliquid deleniti amet
                                    distinctio earum quidem a unde, nulla
                                    libero, autem voluptate in quisquam nisi
                                    magnam. Voluptatem blanditiis ipsum
                                    reiciendis, maiores ipsa dolore mollitia,
                                    hic laboriosam necessitatibus exercitationem
                                    voluptatum autem sed modi aut veritatis,
                                    eius consequuntur? Esse minima facilis
                                    excepturi, consequatur quia, omnis
                                    repellendus dolores quo aliquam soluta at ea
                                    ab non nostrum, nesciunt a iusto aperiam
                                    delectus! Sequi saepe vitae exercitationem
                                    numquam voluptates inventore eaque atque
                                    culpa possimus, recusandae, assumenda,
                                    quisquam et odit beatae eum. Nesciunt nobis
                                    nam, eum quibusdam porro voluptatibus quasi
                                    ratione blanditiis eaque distinctio
                                    voluptate nemo minima! Maxime blanditiis,
                                    doloribus sint corporis illum saepe amet
                                    eligendi omnis error quis harum quo fuga ad
                                    a qui vitae ab quod officiis consequatur?
                                    Quibusdam dolores eligendi debitis voluptas
                                    delectus pariatur quis nisi quaerat deleniti
                                    ab officia, reiciendis voluptatum rerum
                                    sapiente, doloribus quos assumenda, minima
                                    repudiandae aperiam eius.
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                        data-bs-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>