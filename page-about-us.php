<?php get_header(); ?>

<main id="about-us" class="about-us">
    <section class="section-1 mt-6 d-flex align-items-center">
        <img width="233" class="position-absolute start-0" style="transform:rotate(180deg)" src="<?= get_template_directory_uri() ?>/assets/images/arc-right.svg" alt="">
        <div class="container">
            <div class="text-center">
                <h1 class="fs-3 primary-color">Our culinary journey</h1>
                <div class="svgs text-center d-flex align-items-center justify-content-center py-4">
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/burger.svg" alt="">
                    </div>
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/pasta.svg" alt="">
                    </div>
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/pizza.svg" alt="">
                    </div>
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/juice.svg" alt="">
                    </div>
                    <div class="m-2 mx-lg-3">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/hotdog.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section class="section-2 mt-9">
        <div class="container">
            <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/about-us-banner.jpg" alt="">
        </div>
    </section>

    <section class="section-3 mt-9">

        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 mt-3 mt-lg-0 d-flex justify-content-center">
                    <img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/pasta.svg" alt="">
                </div>
                <div class="col-lg-6">
                    <h2 class="fs-6 primary-color fw-light mb-3">Our story</h2>
                    <p class="white-color mb-3">At Monty’s Café, we believe that a memorable dining experience is about more than just great food. It's about creating a warm and inviting atmosphere where every guest feels like family. Established in 2023, our restaurant has been serving delicious meals and creating lasting memories in the heart of Beirut.</p>
                </div>

            </div>
            <div class="row align-items-center mt-6 mt-lg-9">
                <div class="col-lg-6">
                    <h2 class="primary-color  mb-3 fs-6 fw-light">Our philosophy</h2>
                    <p class="white-color">Our culinary philosophy is simple: fresh, local, and made with love. We source the finest ingredients from local farmers and suppliers to ensure that every dish is bursting with flavor and crafted with care. From our kitchen to your plate, we strive to deliver an exceptional dining experience.</p>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0 d-flex align-items-center justify-content-center">
                    <img class="w-50" src="<?= get_template_directory_uri() ?>/assets/images/pizza.svg" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="section-4 mt-9">
        <div class="container">
            <div class="text-center">
                <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/chef2.png" alt="">
                <h2 class="primary-color mt-5  fs-6 fw-light">Meet the Chef - Chadi Nassif</h2>
                <p class="white-color mt-4 px-0 px-lg-9">Behind every mouthwatering dish is a team of passionate individuals dedicated to making your dining experience exceptional. From our talented chefs who bring creativity and expertise to every recipe, to our friendly servers who ensure your visit is nothing short of delightful, each member of our team plays a crucial role in your dining pleasure.</p>

                <div class="d-flex align-items-center justify-content-center social-icons mt-5">
                    <a href="#" class="mx-2 rounded-pill primary-bg d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <path d="M11.2675 6.72455C8.50205 6.72455 6.21069 8.9764 6.21069 11.7813C6.21069 14.5863 8.46255 16.8381 11.2675 16.8381C14.0724 16.8381 16.3243 14.5468 16.3243 11.7813C16.3243 9.01591 14.0329 6.72455 11.2675 6.72455ZM11.2675 15.0208C9.48971 15.0208 8.02798 13.5591 8.02798 11.7813C8.02798 10.0036 9.48971 8.54183 11.2675 8.54183C13.0453 8.54183 14.507 10.0036 14.507 11.7813C14.507 13.5591 13.0453 15.0208 11.2675 15.0208Z" fill="black" />
                            <path d="M16.5224 7.75156C17.1551 7.75156 17.6681 7.23863 17.6681 6.60588C17.6681 5.97314 17.1551 5.46021 16.5224 5.46021C15.8896 5.46021 15.3767 5.97314 15.3767 6.60588C15.3767 7.23863 15.8896 7.75156 16.5224 7.75156Z" fill="black" />
                            <path d="M19.4853 3.64295C18.4581 2.57628 16.9964 2.02319 15.3371 2.02319H7.19885C3.76182 2.02319 1.47046 4.31455 1.47046 7.75159V15.8504C1.47046 17.5491 2.02355 19.0108 3.12972 20.0775C4.19638 21.1047 5.61861 21.6183 7.23836 21.6183H15.2976C16.9964 21.6183 18.4186 21.0652 19.4458 20.0775C20.5124 19.0504 21.0655 17.5886 21.0655 15.8899V7.75159C21.0655 6.09233 20.5124 4.67011 19.4853 3.64295ZM19.3272 15.8899C19.3272 17.1146 18.8927 18.1022 18.1816 18.7738C17.4705 19.4454 16.4828 19.801 15.2976 19.801H7.23836C6.05317 19.801 5.06552 19.4454 4.35441 18.7738C3.6433 18.0627 3.28774 17.075 3.28774 15.8504V7.75159C3.28774 6.5664 3.6433 5.57875 4.35441 4.86764C5.02601 4.19603 6.05317 3.84048 7.23836 3.84048H15.3766C16.5618 3.84048 17.5495 4.19603 18.2606 4.90714C18.9322 5.61826 19.3272 6.60591 19.3272 7.75159V15.8899Z" fill="black" />
                        </svg>
                    </a>
                    <a href="#" class="mx-2 rounded-pill primary-bg d-flex align-items-center justify-content-center">
                        <svg xmlnsd-flex align-items-center justify-content-centerttp://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                            <path d="M13.3425 3.0376C12.1977 3.0376 11.0997 3.49239 10.2902 4.30192C9.48067 5.11145 9.02586 6.20941 9.02586 7.35426V9.7576H6.71586C6.59988 9.7576 6.50586 9.85158 6.50586 9.9676V13.1409C6.50586 13.2569 6.59988 13.3509 6.71586 13.3509H9.02586V19.8609C9.02586 19.9769 9.11988 20.0709 9.23586 20.0709H12.4092C12.5252 20.0709 12.6192 19.9769 12.6192 19.8609V13.3509H14.9496C15.046 13.3509 15.13 13.2853 15.1534 13.1919L15.9467 10.0186C15.9798 9.88602 15.8796 9.7576 15.743 9.7576H12.6192V7.35426C12.6192 7.16243 12.6954 6.97844 12.8311 6.84279C12.9667 6.70714 13.1507 6.63093 13.3425 6.63093H15.7692C15.8852 6.63093 15.9792 6.53691 15.9792 6.42093V3.2476C15.9792 3.13162 15.8852 3.0376 15.7692 3.0376H13.3425Z" fill="black" />
                        </svg>
                    </a>
                    <a href="#" class="mx-2 rounded-pill primary-bg d-flex align-items-center justify-content-center">
                        <svg xmlnsd-flex align-items-center justify-content-centerttp://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M13.9551 10.4287L21.5999 1.73334H19.7886L13.1476 9.28184L7.84732 1.73334H1.73267L9.74952 13.149L1.73267 22.2667H3.544L10.5527 14.2933L16.1513 22.2667H22.266L13.9551 10.4287ZM11.4734 13.2492L10.6599 12.1118L4.19721 3.06951H6.9798L12.1969 10.3696L13.007 11.5071L19.7877 20.9956H17.0052L11.4734 13.2492Z" fill="black" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>