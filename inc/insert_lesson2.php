<div class="insert">
                <h2 class="heading-text">Insert or Update Lesson</h2>
                <form method="POST" class="form-group">
                    <div class="insert_id">
                        <label for="insert_id">Lesson ID:</label>
                        <input type="text" name="insert_id" id="insertn_id" class="form-control" placeholder="lesson ID" required>
                    </div>
                    <div class="insert_name">
                        <label for="insert_name">Lesson Name:</label>
                        <input type="text" name="insert_name" id="insert_name" class="form-control" placeholder="lesson Name" required>
                    </div>
                    <div class="insert_img">
                        <label for="insert_img">Lesson Link IMG:</label>
                        <textarea name="insert_img" id="insert_img" class="form-control" placeholder="lesson Link IMG" cols="30" rows="5" required></textarea>
                    </div>
                    <div class="insert_course_id">
                        <label for="insert_course_id">Course ID:</label>
                        <input type="text" name="insert_course_id" id="insert_course_id" class="form-control" placeholder="Course ID" required>
                    </div>
                    <div class="insert_stt">
                        <label for="insert_stt">Lesson Name:</label>
                        <input type="text" name="insert_stt" id="insert_stt" class="form-control" placeholder="STT" required>
                    </div>
                    <?php
                    $conn=openCon();
                    if(isset($_POST['insert'])){
                        $id=$name=$img=$course_id=$stt="";
                        $id=$_POST['insert_id'];
                        $name=$_POST['insert_name'];
                        $img=$_POST['insert_img'];
                        $course_id=$_POST['insert_course_id'];
                        $stt=$_POST['insert_stt'];
                        $sql="INSERT INTO lesson (lesson_id, lesson_name, lesson_img) VALUES ('$id','$name','$img')";
                        $sqli="INSERT INTO sourseschitiet(course_id, stt, lesson_id) VALUES ('$course_id','$stt','$id')";
                        if(mysqli_query($conn,$sql)){
                            if(mysqli_query($conn, $sqli)){
                            echo"<h3 class='text-center' style='color:red;'>New record created successfully !</h3>";
                            }else{
                                echo"<h3 class='text-center' style='color:red;'>Error:".$sql.".<br/>".mysqli_error($conn).".</h3>";
                            }
                        }
                    }
                    if(isset($_POST['update'])){
                        $id=$name=$img=$course_id=$stt="";
                        $id=$_POST['insert_id'];
                        $name=$_POST['insert_name'];
                        $img=$_POST['insert_img'];
                        $course_id=$_POST['insert_course_id'];
                        $stt=$_POST['insert_stt'];
                        $sql="UPDATE lesson SET lesson_name='$name',lesson_img='$img' WHERE lesson_id='$id'";
                        $sqli="UPDATE sourseschitiet SET course_id='$course_id',stt='$stt' WHERE lesson_id='$id'";
                        if(mysqli_query($conn,$sql)){
                            if(mysqli_query($conn, $sqli)){
                            echo"<h3 class='text-center' style='color:red;'>New record updated successfully !</h3>";
                            }else{
                                echo"<h3 class='text-center' style='color:red;'>Error:".$sql.".<br/>".mysqli_error($conn).".</h3>";
                            }
                        }
                    }
                    $id=$name=$img=$course_id=$stt="";
                    CloseCon($conn);
                    ?>
                <div class="div__btn">
                <button name="insert" class="btn btn-primary">Insert</button>
                <button name="update" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
            <div class="insert">
                <h2 class="heading-text">Delele Lesson</h2>
                <form method="post" class="form-group">
                    <div>
                    <label for="insert_id">Lesson ID:</label>
                    <input type="text" name="insert_id" id="insert_id" class="form-control" placeholder="Lessons ID" required>
                    </div>
                    <?php
                    $conn=openCon();
                    $id="";
                    if(isset($_POST['delete'])){
                        $id=$_POST['insert_id'];
                        $sqli="DELETE FROM sourseschitiet WHERE lesson_id='$id'";
                        $sql="DELETE FROM lesson WHERE lesson_id='$id'";
                        if(mysqli_query($conn,$sqli)){
                            if(mysqli_query($conn,$sql)){
                                echo"<h3 class='text-center' style='color:red;'>Delete record successfully !</h3>";
                            }
                            else{
                                echo"<h3 class='text-center' style='color:red;'>Error:<br/>".$sql.".<br/>".mysqli_error($conn).".</h3>";
                            }
                        }
                    }
                    $id="";
                    CloseCon($conn);
                    ?>
                    <div class="div__btn">
                    <button name="delete" class="btn btn-primary">Delete</button>
                    </div>
                </form>
            </div>
            <div class="lesson">
                <div class="courses__heading-text">
                    <h2>Lesson</h2>
                </div>
                <div class="courses__list">
                    <?php
                    $conn = OpenCon();
                    $sql = "SELECT * FROM lesson as ls INNER JOIN sourseschitiet as sct ON ls.lesson_id = sct.lesson_id  inner join courses as c on c.course_id=sct.course_id" ; 
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) == 0) {
                        echo "Chua co du lieu";
                    } else {
                        while ($row = mysqli_fetch_array($query)) {
                            echo "
                            <div class='courses-item'>
                                <a href='?go=lesson&lesson_id=".$row['lesson_id']."&course_id=".$row['course_id']."' class='color-black'>
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