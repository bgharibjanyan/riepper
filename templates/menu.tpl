{assign var=headline value="Besonders lecker "}
{assign var=sHeadline value="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
invidunt."}

{assign var=img1 value="./img/menu1-min.jpg"}
{assign var=img2 value="./img/menu2-min.jpg"}
{assign var=img3 value="./img/menu3-min.jpg"}
{assign var=img4 value="./img/menu4-min.jpg"}


{assign var=name1 value="Tortellini"}
{assign var=name2 value="Kartoffelnocken"}
{assign var=name3 value="Griesspudding"}
{assign var=name4 value="Tortellini"}

{assign var=desc1 value="Der italienische Klassiker zum selber machen."}
{assign var=desc2 value="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy."}
{assign var=desc3 value="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy."}
{assign var=desc4 value="Der italienische Klassiker zum selber machen."}


{block name=poster}




<section class="menu-section">
    <div class="bg-seeds">
        <svg class="seed-svg">
            <use xlink:href="#seeds "></use>
        </svg>
    </div>
    <div class="wrapper central-box">
        <h2 class="headline">
            {$headline}
        </h2>
        <p class="sub-headline">{$sHeadline}</p>
    </div>
    <div class="menu-cataloge">
        <div class="item">
            <div class="img-box">
                <img src={$img1} class="item-img">
            </div>
            <div class="text-box">

                <h5 class="headline">{$name1}</h5>
                <p class="description">{$desc1}</p>
                <div class="rate">
                    <p class="pre-headline">Vorspeise | 20 min | </p>
                    <div class="star-box">
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                    </div>
                </div>
                <button class="add-button">
                    <svg class="add">
                        <use xlink:href="#add "></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="item honest">
            <div class="img-box">
                <img src="{$img2}" class="item-img">
            </div>
            <div class="text-box">

                <h5 class="headline">{$name2}</h5>
                <p class="description">{$desc2}</p>
                <div class="rate">
                    <p class="pre-headline">Haupspeiße | 50 min | </p>
                    <div class="star-box">
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                    </div>
                </div>
                <button class="add-button">
                    <svg class="add">
                        <use xlink:href="#add "></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src={$img3} class="item-img">
            </div>
            <div class="text-box">

                <h5 class="headline">{$name3}</h5>
                <p class="description">{$desc3}</p>
                <div class="rate">
                    <p class="pre-headline">Nachspeiße | 10 min | </p>
                    <div class="star-box">
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                    </div>
                </div>
                <button class="add-button">
                    <svg class="add">
                        <use xlink:href="#add "></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="item honest">
            <div class="img-box">
                <img src={$img4} class="item-img">
            </div>
            <div class="text-box">

                <h5 class="headline">{$name4}</h5>
                <p class="description">{$desc4}</p>
                <div class="rate">
                    <p class="pre-headline">Vorspeise | 20 min | </p>
                    <div class="star-box">
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                        <svg class="star">
                            <use xlink:href="#star "></use>
                        </svg>
                    </div>
                </div>
                <button class="add-button">
                    <svg class="add">
                        <use xlink:href="#add "></use>
                    </svg>
                </button>
            </div>
        </div>

    </div>
    <div class="dots-box">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>


    </div>
    <a href="" class="simple-link">Alle Rezepte</a>
</section>
{/block}