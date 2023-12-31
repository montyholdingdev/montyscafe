<header id="header" class="d-flex align-items-center my-3 my-lg-0">
    <div class="container">
        <div class="desktop d-none d-lg-block">
            <div class="d-flex justify-content-between align-items-center">
                <a href="<?= home_url() ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" alt="Monty's Cafe logo" width="201" height="68">
                </a>
                <nav class="nav">
                    <ul class="d-flex justify-content-between align-items-center">
                        <li>
                            <a href="<?= home_url() ?>/menu/a-great-start/">Menu</a>
                        </li>
                        <li class="ps-4">
                            <a href="<?= home_url() ?>/contact-us">Contact us</a>
                        </li>
                        <li class="ps-4">
                            <a href="<?= home_url() ?>/about-us">About us</a>
                        </li>
                        <li class="ps-4">
                            <a href="<?= home_url() ?>/private-events">Private events</a>
                        </li>
                        <li class="ps-4">
                            <a href="tel:+96103000000">
                                <button class="button-primary py-2 px-3 rounded-pill">Call us 03/000000</button>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="mobile d-block d-lg-none">
            <div class="d-flex justify-content-between">
                <a class="d-inline-flex align-items-center" href="<?= home_url() ?>">
                    <img clsas="h-100" src="<?= get_template_directory_uri() ?>/assets/images/logo-short.svg" alt="Monty's Cafe logo">
                </a>
                <div class="mobile-nav--list">
                    <a href="tel:+96103000000">
                        <button class="button-primary py-2 px-3 rounded-pill fs-9">Call us 03/000000</button>
                    </a>

                    <div class="menu-btn ms-3">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>

                    <div class="nav">
                        <div class="container">
                            <ul class="d-flex flex-column align-items-start justify-content-start text-start">
                                <li class="my-3"><a href="<?= home_url() ?>/menu/a-great-start/" class="item-link active">Menu</a></li>
                                <li class="my-3"><a href="<?= home_url() ?>/about-us/" class="item-link">About us</a></li>
                                <li class="my-3"><a href="<?= home_url() ?>/contact-us/" class="item-link">Contact us</a></li>
                                <li class="my-3"><a href="<?= home_url() ?>/private-events/" class="item-link">Private events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>