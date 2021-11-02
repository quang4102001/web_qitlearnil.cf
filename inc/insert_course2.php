<div class="insert">
                <h2 class="heading-text">Insert or Update Courses</h2>
                <form method="POST"  class="form-group">
                <div class="insert_id">
                    <label for="insert_id1">Course ID:</label>
                    <input type="text" name="insert_id" id="insert_id" class="form-control" placeholder="Course ID" required>
                </div>
                <div class="insert_name">
                    <label for="insert_name">Course Name:</label>
                    <input type="text" name="insert_name" id="insert_name" class="form-control" placeholder="Course Name"required>
                </div>
                <div class="insert_img">
                    <label for="insert_img">Course Link IMG:</label>
                    <textarea name="insert_img" id="insert_img" class="form-control" placeholder="Course Link IMG"cols="30" rows="5"required></textarea>
                </div>
                <div class="insert_price">
                    <label for="insert_price">Course Price:</label>
                    <input type="text" name="insert_price" id="insert_price" class="form-control" placeholder="Course Price"required>
                </div>
                <?php
                    $conn=openCon();
                    $id=$name=$img=$price="";
                    if(isset($_POST['insert'])){
                        $id=$_POST['insert_id'];
                        $name=$_POST['insert_name'];
                        $img=$_POST['insert_img'];
                        $price=$_POST['insert_price'];
                        $id= str_replace  ("'", "\'", $id);
                        $id= str_replace  ('"', '\"', $id);
                        $id= str_replace  (';', '\;', $id);
                        $name= str_replace  ("'", "\'", $name);
                        $name= str_replace  ('"', '\"', $name);
                        $name= str_replace  (';', '\;', $name);
                        $img= str_replace  ("'", "\'", $img);
                        $img= str_replace  ('"', '\"', $img);
                        $img= str_replace  (';', '\;', $img);
                        $price= str_replace  ("'", "\'", $price);
                        $price= str_replace  ('"', '\"', $price);
                        $price= str_replace  (';', '\;', $price);
                        $sql=" INSERT INTO courses(id, course_id, course_name, course_img, course_price) VALUES ('0','$id','$name','$img','$price')";
                        if(mysqli_query($conn,$sql)){
                            echo"<h3 class='text-center' style='color:red;'>New record created successfully !</h3>";
                        }else{
                            echo"<h3 class='text-center' style='color:red;'>Error:".$sql.".<br/>".mysqli_error($conn).".</h3>";
                        }
                    }
                    if(isset($_POST['update'])){
                        $id=$_POST['insert_id'];
                        $name=$_POST['insert_name'];
                        $img=$_POST['insert_img'];
                        $price=$_POST['insert_price'];
                        $id= str_replace  ("'", "\'", $id);
                        $id= str_replace  ('"', '\"', $id);
                        $id= str_replace  (';', '\;', $id);
                        $name= str_replace  ("'", "\'", $name);
                        $name= str_replace  ('"', '\"', $name);
                        $name= str_replace  (';', '\;', $name);
                        $img= str_replace  ("'", "\'", $img);
                        $img= str_replace  ('"', '\"', $img);
                        $img= str_replace  (';', '\;', $img);
                        $price= str_replace  ("'", "\'", $price);
                        $price= str_replace  ('"', '\"', $price);
                        $price= str_replace  (';', '\;', $price);
                        $sql=" UPDATE `courses` SET course_name='$name',course_img='$img',course_price='$price' WHERE course_id='$id'";
                        if(mysqli_query($conn,$sql)){
                            echo"<h3 class='text-center' style='color:red;'>Record update successfully !</h3>";
                        }else{
                            echo"<h3 class='text-center' style='color:red;'>Error:".$sql.".<br/>".mysqli_error($conn).".</h3>";
                        }
                    }
                    $id=$name=$img=$price="";
                    CloseCon($conn);
                    ?>
                <div class="div__btn">
                <button name="insert" class="btn btn-primary">Insert</button>
                <button name="update" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
            <div class="insert">
                <h2 class="heading-text">Delele Coourse</h2>
                <form method="post" class="form-group">
                    <div>
                    <label for="insert_id">Course ID:</label>
                    <input type="text" name="insert_id" id="insert_id" class="form-control" placeholder="Course ID" required>
                    </div>
                    <?php
                    $conn=openCon();
                    if(isset($_POST['delete'])){
                        $id="";
                        $id=$_POST['insert_id'];
                        $id= str_replace  ("'", "\'", $id);
                        $id= str_replace  ('"', '\"', $id);
                        $id= str_replace  (';', '\;', $id);
                        $sqli="DELETE FROM sourseschitiet WHERE course_id='$id'";
                        $sql="DELETE FROM courses WHERE course_id='$id'";
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
            <div class="courses">
                <div class="courses__heading-text">
                    <h2>Courses</h2>
                                   </div>
                <div class="courses__list">
                    <?php
                    $conn = OpenCon();
                    $sql = "select * from courses";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) == 0) {
                        echo "Chua co du lieu";
                    } else {
                        while ($row = mysqli_fetch_array($query)) {
                            echo "
                            <div class='courses-item'>
                                <a href='?go=course&course_id=".$row['course_id']."' class='color-black'>
                                    <div class='courses-item__img' title=''>
                                        <img src='" . $row['course_img'] . "' alt='" . $row['course_id'] . "'>
                                        <div class='courses-item__img__title'>
                                        <h3>" . $row['course_name'] . "</h3>
                                        <div class='courses__price pd-left-32'>Price : " . $row['course_price'] . " VNĐ</div></div>
                                    </div>
                                </a>
                                <div>
                                <h3>" . $row['course_name'] . "</h3>
                                <div class='courses__price pd-left-32'>Price : " . $row['course_price'] . " VNĐ</div></div>
                            </div>
                            ";
                        }
                    }
                    CloseCon($conn);
                    ?>
                </div>
            </div>