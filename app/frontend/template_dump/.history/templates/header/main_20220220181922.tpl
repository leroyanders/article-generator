<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 d-flex">
                <a href="/" class="site-logo">
                    {$app_name}
                </a>
                <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span>
                </a>
            </div>
            <div class="col-12 col-lg-6 ml-auto d-flex">
                <div class="ml-md-auto top-social d-none d-lg-inline-block">
                    <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                </div>
                <form method="post" action="/search" class="search-form d-inline-block">
                    <div class="d-flex">
                        <input type="text" class="form-control" placeholder="Найти статью..." name="q">
                        <button type="submit" class="btn btn-secondary">
                            <span class="icon-search"></span>
                        </button>
                        <select data-placeholder="Choose a Language..." class="language-toggle">
                            <option value="EN" selected>EN</option>
                            <option value="RU">RU</option>
                            <option value="DE">DE</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-6 d-block d-lg-none text-right"></div>
        </div>
    </div>


    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
        <div class="container">
            <div class="d-flex align-items-center" style="width: fit-content; margin: auto;">
                <div class="mr-auto" style="width: 100%">
                    <nav class="site-navigation position-relative text-right d-flex" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            {foreach from=$navtabs item=arr}
                                <li>
                                    <a href="/category/{$arr['id']}" class="nav-link text-left">
                                        {translate}{$arr['unique_name']}{/translate}
                                    </a>
                                </li>
                            {/foreach}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>