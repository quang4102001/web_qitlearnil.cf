<div class="courses">
                <div class="course-details">
                    <div class="course-details__properties">
                        <div class="properties">
                            <div class="properties__heading">
                                <?php
                                $conn = OpenCon();
                                $sql = "SELECT * FROM courses WHERE course_id='" . $_GET['course_id'] . "'";
                                $query = $conn->query($sql);
                                if (mysqli_num_rows($query) == 0) {
                                    echo "Something wrong!!!!";
                                } else {
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo "
                                            <div class='properties__heading__img'><img src='".$row['course_img']."' class='cursor-pointer' alt='".$row['course_name']."'></div>
                                            <div class='properties__heading__name'>
                                                <h3 class='text-center'>".$row['course_name']."</h3>
                                        ";
                                    }
                                }
                                CloseCon($conn);
                                ?>
                                <p class="pd-right-16 pd-left-16">Khóa học này bao gồm: từ vựng, ngữ pháp, kĩ năng nghe, nói, đọc, ... Giúp bạn hoàn thiện kiến thức hơn.</p>
                            </div>
                        </div>
                        <a class="btn btn-primary">Lean</a>
                        <div class="properties__body">
                            <h2>Sau khóa học này bạn sẽ có những gì:</h2>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <br />
                            <h2>Yêu cầu</h2>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
                <div class="course-details__lesson pd-left-16">
                    <div class="list-lesson">
                        <h2 class="text-center">Lesson</h2>
                        <?php
                        $conn = OpenCon();
                        $sql = "SELECT * FROM lesson INNER JOIN sourseschitiet ON lesson.lesson_id = sourseschitiet.lesson_id WHERE sourseschitiet.course_id='" . $_GET['course_id'] . "'";
                        $query = $conn->query($sql);
                        if (mysqli_num_rows($query) == 0) {
                            echo "<br/>Chưa có bài học nào!!!";
                        } else {
                            while ($row = mysqli_fetch_array($query)) {
                                echo "
                                    <a href='?go=lesson&lesson_id=" . $row['lesson_id'] . "&course_id=".$_GET['course_id'] . "'  class='text-center color-black'>
                                    " . $row['lesson_name'] . "
                                    </a>
                                    ";
                            }
                        }
                        CloseCon($conn);
                        ?>
                    </div>
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