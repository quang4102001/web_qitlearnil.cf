<div class="lesson">
                <div class="lesson__video">
                    <?php
                        $conn=OpenCon();
                        $sql = "SELECT * FROM lesson where lesson_id='".$_GET['lesson_id']."'";
                        $query = $conn->query($sql);
                        if(mysqli_num_rows($query)==0){
                            echo"Some thing wrong!!!";
                        }else{
                            while($row=mysqli_fetch_array($query)){
                               echo"
                    <img class='cursor-pointer' src='".$row['lesson_img']."' alt='".$row['lesson_name']."'>
                    <i class='far fa-play-circle cursor-pointer'></i>
                </div>
                <div class='lesson__heading-text'>
                    <p class='heading-text'>".$row['lesson_name']."</p>
                               ";
                            }
                        }
                    CloseCon($conn);
                    ?>
                </div>
                <div class="lesson__text pd-left-32">
                    <div>
                    <h2>Câu 1:</h2>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consequuntur tenetur nemo molestiae corrupti fugiat ad minima officiis itaque! Repellendus.</p>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nam et illo ducimus veritatis doloribus.</p>
                    </div>
                    <div>
                    <h2>Câu 2:</h2>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti quas quam iste eligendi ipsam voluptatibus, reiciendis magnam exercitationem voluptates fugiat amet eos nobis aut?.</p>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti quas quam iste eligendi ipsam voluptatibus, reiciendis magnam exercitationem voluptates fugiat amet eos nobis aut?.</p>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti quas quam iste eligendi ipsam voluptatibus, reiciendis magnam exercitationem voluptates fugiat amet eos nobis aut?.</p>
                    </div>
                    <div>
                    <h2>Câu 3:</h2>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti quas quam iste eligendi ipsam voluptatibus, reiciendis magnam exercitationem voluptates fugiat amet eos nobis aut?.</p>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti quas quam iste eligendi ipsam voluptatibus, reiciendis magnam exercitationem voluptates fugiat amet eos nobis aut?.</p>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti quas quam iste eligendi ipsam voluptatibus, reiciendis magnam exercitationem voluptates fugiat amet eos nobis aut?.</p>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti quas quam iste eligendi ipsam voluptatibus, reiciendis magnam exercitationem voluptates fugiat amet eos nobis aut?.</p>
                    <p><i class="fas fa-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti quas quam iste eligendi ipsam voluptatibus, reiciendis magnam exercitationem voluptates fugiat amet eos nobis aut?.</p>
                    </div>
                </div>
            </div>
            <div class="lesson">
                <div class="courses__heading-text">
                    <h2>Lesson</h2>
                </div>
                <div class="courses__list">
                    <?php
                    $conn = OpenCon();
                    $sql = "SELECT * FROM lesson as ls INNER JOIN sourseschitiet as sct ON ls.lesson_id = sct.lesson_id  inner join courses as c on c.course_id=sct.course_id where c.course_id ='".$_GET['course_id']."' and ls.lesson_id!='".$_GET['lesson_id']."'" ; 
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) == 0) {
                        echo "Chua co du lieu";
                    } else {
                        while ($row = mysqli_fetch_array($query)) {
                            echo "
                            <div class='courses-item'>
                                <a href='?go=lesson&lesson_id=".$row['lesson_id']." & course_id=".$row['course_id']."' class='color-black'>
                                    <div class='courses-item__img' title=''>
                                        <img src='" . $row['lesson_img'] . "' alt='" . $row['lesson_id'] . "'>
                                        <div class='courses-item__img__title'>
                                        <h3>" . $row['lesson_name'] . "</h3>
                                        <h4>Thuộc course: " . $row['course_name'] . "</h4></div>
                                    </div>
                                </a>
                                <div>
                                <h3>" . $row['lesson_name'] . "</h3>
                                <h4>Thuộc course: " . $row['course_name'] . "</h4></div>
                            </div>
                            ";
                        }
                    }
                    CloseCon($conn);
                    ?>
                </div>
            </div>