<div class="slider" id="slider">
                <div class="slider__content">
                    <input type="radio" name="r" id="radio_1" checked>
                    <input type="radio" name="r" id="radio_2">
                    <input type="radio" name="r" id="radio_3">
                    <input type="radio" name="r" id="radio_4">
                    <div class="slider__img slider__img__1 first">
                        <img src="./img/slider1.jpg" alt="slider 1">
                    </div>
                    <div class="slider__img slider__img__2">
                        <img src="./img/slider5.jpg" alt="slider 2">
                    </div>
                    <div class="slider__img slider__img__3">
                        <img src="./img/slider3.jpg" alt="slider 3">
                    </div>
                    <div class="slider__img slider__img__4">
                        <img src="./img/slider4.jpg" alt="slider 4">
                    </div>
                    <div class="slider__fake__nav">
                        <div class="fake--nav radio-1"></div>
                        <div class="fake--nav radio-2"></div>
                        <div class="fake--nav radio-3"></div>
                        <div class="fake--nav radio-4"></div>
                    </div>
                </div>
                <div class="slider__nav">
                    <label class="slider__nav__1" for="radio_1"></label>
                    <label class="slider__nav__2" for="radio_2"></label>
                    <label class="slider__nav__3" for="radio_3"></label>
                    <label class="slider__nav__4" for="radio_4"></label>
                </div>
            </div>
            <script>
                var counter = 1;
                setInterval(function() {
                    document.getElementById('radio_' + counter).checked = true;
                    counter++;
                    if (counter > 4) {
                        counter = 1;
                    }
                }, 5000);
            </script>
            <div class="courses">
                <div class="courses__heading-text">
                    <h2>Highlights courses</h2>
                    <a href="?go=courses">See more...</a>
                </div>
                <div class="courses__list">
                    <?php
                    $conn = OpenCon();
                    $sql = "select * from courses where id =1";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) == 0) {
                        echo "Chua co du lieu";
                    } else {
                        while ($row = mysqli_fetch_array($query)) {
                            echo "
                            <div class='courses-item'>
                                <a href='?go=course&course_id=" . $row['course_id'] . "' class='color-black'>
                                    <div class='courses-item__img' title=''>
                                        <img src='" . $row['course_img'] . "' alt='" . $row['course_id'] . "'>
                                        <div class='courses-item__img__title'>
                                            <h3>" . $row['course_name'] . "</h3>
                                            <div class='pd-left-32'>Price : " . $row['course_price'] . " VN??</div>
                                        </div>
                                    </div>
                                </a>
                                <div>
                                    <h3>" . $row['course_name'] . "</h3>
                                    <div class='courses__price pd-left-32'>Price : " . $row['course_price'] . " VN??</div>
                                </div>
                            </div>
                            ";
                        }
                    }
                    CloseCon($conn);
                    ?>
                </div>
            </div>
            <div class="blog courses">
                <div class="blog__heading-text courses__heading-text">
                    <h2>Highlights blog</h2>
                    <a href="?go=blog">See more...</a>
                </div>
                <div class="blog__list courses__list">
                    <?php
                    $conn = OpenCon();
                    $sql = "select * from blog where stt=1";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) == 0) {
                        echo "Chua co du lieu";
                    } else {
                        while ($row = mysqli_fetch_array($query)) {
                            echo "
                            <div class='blog-item courses-item'>
                            <a href='?go=blog_chitiet&blog_id=" . $row['blog_id'] . "' class='color-black'>
                                <div class='blog-item__img courses-item__img' title=''>
                                    <img src='" . $row['blog_img'] . "' alt='" . $row['blog_name'] . "'>
                                    <div class='courses-item__img__title'>
                                        <h3>" . $row['blog_name'] . "</h3>
                                        <div class='courses__price pd-left-32'>By :  " . $row['tacgia'] . "</div>
                                    </div>
                                </div>      
                            </a>
                            <div>
                                <h3>" . $row['blog_name'] . "</h3>
                                <div class='blog__tacgia courses__price pd-left-32'>By :  " . $row['tacgia'] . "</div>
                            </div>
                            </div>
                            ";
                        }
                    }
                    CloseCon($conn);
                    ?>
                </div>
            </div>
            <div class="about section" id="about">
                <p class="about__heading-text heading-text">About us</p>
                <div>
                    <div class="about__text">
                        <h2>KHAI PH??NG <br>S???C M???NH TI???M N??NG</h2>
                        <p>QIT lu??n ???????c bi???t ?????n l?? t??? ch???c gi??o d???c uy t??n ??em l???i s??? c???i thi???n r?? r???t trong k?? n??ng h???c thu???t v?? ??i???m s??? t??? c??c b??i thi qu???c t??? c???a h???c vi??n. Nh???ng ti???n b??? v?????t tr???i c???a h??n 100,000 h???c vi??n YOLA ???? ????o t???o v?? h??ng lo???t ??i???m thi cao h??ng ?????u Vi???t Nam IELTS 8.5/9.0, TOEFL 119/120, SAT 1570/1600 c??ng nh?? t???ng gi?? tr??? h???c b???ng h??n 220 t??? ?????ng t??? top 100 c??c tr?????ng ?????i h???c h??ng ?????u th??? gi???i d??nh ri??ng c???p cho h???c sinh c???a YOLA ch??nh l?? minh ch???ng cho ????? hi???u qu??? c???a l??? tr??nh h???c thu???t m?? YOLA t??m huy???t.</p>
                    </div>
                    <div class="about__img">
                        <img src="./img/about__img.jpg" alt="about__img">
                    </div>
                </div>
            </div>
            <div class="testimonials" id="testimonials">
                <div class="section">
                    <p class="about__heading-text heading-text">Testimonials</p>
                    <div>
                        <div class="testimonials__show">
                            <div>
                                <h3>Dinh Van Quang:</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi deserunt illo consequatur! Hic, doloribus quisquam vel modi iste provident sequi neque mollitia quod sint corporis a asperiores nulla? Nihil, debitis!</p>
                            </div>
                        </div>
                        <form class="testimonials__input">
                            <input type="text" name="fname" required id="fname" placeholder="Fullname">
                            <textarea name="comment" required id="comment" cols="30" rows="3" placeholder="Comment"></textarea>
                            <button class="btn btn--login">Comment</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact section" id="contact">
                <p class="heading-text">Contact</p>
                <div>
                    <div class="contact__infor">
                        <ul>
                            <li><i class="fas fa-map-marker-alt pd-right-16" aria-hidden="true"></i>Ha Noi, Viet Nam</li>
                            <li><i class="fas fa-phone-alt pd-right-16" aria-hidden="true"></i>Phone: <a href="tel:0961701540">0961701540</a></li>
                            <li><i class="fas fa-envelope pd-right-16" aria-hidden="true"></i>Email: <a href="mailto:quang4102k1@gmail.com">quang4102k1@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="contact__form">
                        <form>
                            <div>
                                <input type="text" name="fullname" required id="fullname" placeholder="Fullname">
                                <input type="email" name="email" required id="email" placeholder="Email">
                            </div>
                            <textarea name="message" id="message" required cols="30" rows="3" placeholder="Message"></textarea>
                            <button class="btn btn--login">Send</button>
                        </form>
                    </div>
                </div>
            </div>