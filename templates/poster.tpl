<section class="poster">
    <img src="./img/main_poster.jpg" class="poster-img">

    <picture class="poster-img">
        <source media="(min-width:650px)" srcset="./img/main_poster.jpg">
        <source media="(min-width:465px)" srcset="./img/main_poster_min.jpg">
       
    </picture>

    {include file='header.tpl'}

    <div class="poster-content central-box">
        <div class="wrapper">

            <h1 class="headline">Produkte lorem ipsum dolor sit amet</h1>
            <h4 class="sub-headline">Lorem ipsum dolor sit amet dolorem sit</h4>
            <a href="./../main.php" class="more-link">Mehl für zuhause</a>
        </div>


        <ul class="nav-list">
            <li class="nav-item">
                <div class="marker"></div>
                <a href="" class="link-text">Produktpalette</a>
            </li>
            <li class="nav-item">
                <div class="marker"></div>
                <a href="" class="link-text">Rezept der Woche</a>
            </li>
            <li class="nav-item">
                <div class="marker"></div>
                <a href="" class="link-text">Backhack</a>
            </li>
        </ul>
    </div>
</section>
<section class="mobile-menu">
    <button class="menu-button button">

        <p class="button-description">Menu</p>
    </button>
    <button class="shop-button button">
        <svg class="shop-icon">
            <use xlink:href="#black-shop "></use>
        </svg>
        <p class="button-description">ZUM SHOP</p>
    </button>

</section>