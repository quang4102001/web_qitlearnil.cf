<a class="back-page-link" href="#" onclick="history.go(-1)">Go Back</a>
<div class="blog_chitiet">
                <?php
                $conn=OpenCon();
                $sql="Select * from blog where blog_id='".$_GET['blog_id']."'";
                $query=$conn->query($sql);
                if(mysqli_num_rows($query)==0){
                    echo"<center>Wrong</center>";
                }else{
                    while($row=mysqli_fetch_array($query)){
                        echo"
                <p class='heading-text'>".$row['blog_name']."</p>
                <h3>By ".$row['tacgia']."</h3>
                <img src='".$row['blog_img']."' alt='".$row['blog_name']."'>
                <p>".$row['noidung']."</p>        
                        ";
                    }
                }
                CloseCon($conn);
                ?>
</div>     
            <div class="blog courses">
                <div class="blog__heading-text courses__heading-text">
                    <h2>Blog</h2>
                </div>
                <div class="blog__list courses__list">
                    <?php
                    $conn = OpenCon();
                    $sql = "select * from blog where blog_id !='".$_GET['blog_id']."'";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) == 0) {
                        echo "Chua co du lieu";
                    } else {
                        while ($row = mysqli_fetch_array($query)) {
                            echo "
                            <div class='blog-item courses-item'>
                            <a href='?go=blog_chitiet&blog_id=".$row['blog_id']."' class='color-black'>
                                <div class='blog-item__img courses-item__img' title=''>
                                    <img src='" . $row['blog_img'] . "' alt='" . $row['blog_name'] . "'>
                                    <div class='courses-item__img__title'>
                                    <h3>" . $row['blog_name'] . "</h3>
                                    <div class='blog__tacgia courses__price pd-left-32'>By :  " . $row['tacgia'] . "</div></div>
                                </div>      
                            </a>
                            <div>
                            <h3>" . $row['blog_name'] . "</h3>
                            <div class='blog__tacgia courses__price pd-left-32'>By :  " . $row['tacgia'] . "</div></div>
                            </div>
                            ";
                        }
                    }
                    CloseCon($conn);
                    ?>
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