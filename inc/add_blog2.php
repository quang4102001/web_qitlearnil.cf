<div class="insert">
                <h2 class="heading-text">Add or Edit Blog</h2>
                <form method="POST" class="form-group">
                    <div class="insert_id">
                        <label for="insert_id">Blog Name:</label>
                        <input type="text" name="insert_id" id="insert_id" class="form-control" placeholder="Blog ID"required>
                    </div>
                    <div class="insert_name">
                        <label for="insert_name">Blog Name:</label>
                        <input type="text" name="insert_name" id="insert_name" class="form-control" placeholder="Blog Name"required>
                    </div>
                    <div class="insert_content">
                        <label for="insert_content">Blog Content:</label>
                        <textarea name="insert_content" id="insert_content" class="form-control" cols="30" rows="5" placeholder="Blog Content (Nếu muốn xuống dòng thì nhập '<br/><br/>' vào nhé :) )"required></textarea>
                    </div>
                    
                    <div class="insert_img">
                        <label for="insert_img">Blog Link IMG:</label>
                        <textarea name="insert_img" id="insert_img" class="form-control" placeholder="Blog Link IMG"cols="30" rows="5"required></textarea>
                    </div>
                    <div class="insert_by">
                        <label for="insert_by">Blog By:</label>
                        <input type="text" name="insert_by" id="insert_by" class="form-control" placeholder="Blog By" required>
                    </div>
                    <?php
                        $conn=openCon();
                        $id=$name=$noidung=$img=$by="";
                        if(isset($_POST['insert'])){
                        $id=$_POST['insert_id'];
                        $name=$_POST['insert_name'];
                        $noidung=$_POST['insert_content'];
                        $img=$_POST['insert_img'];
                        $by=$_POST['insert_by'];
                        $sql=" INSERT INTO blog (blog_id,stt,blog_name,noidung,blog_img,tacgia) VALUES ('$id','0','$name','$noidung','$img','$by')";
                        if(mysqli_query($conn,$sql)){
                            echo"<h3 class='text-center' style='color:red;'>New record created successfully !</h3>";
                         }else{
                            echo"<h3 class='text-center' style='color:red;'>Error:".$sql."<br/>".mysqli_error($conn)."</h3>";
                        }
                        }
                        if(isset($_POST['update'])){
                        $id=$name=$noidung=$img=$by="";
                        $id=$_POST['insert_id'];
                        $name=$_POST['insert_name'];
                        $noidung=$_POST['insert_content'];
                        $img=$_POST['insert_img'];
                        $by=$_POST['insert_by'];
                        $sql="UPDATE blog SET blog_name='$name',noidung='$noidung',tacgia='$by',blog_img='$img' WHERE blog_id='$id'";
                        if(mysqli_query($conn,$sql)){
                            echo"<h3 class='text-center' style='color:red;'>New record created successfully !</h3>";
                        }else{
                            echo"<h3 class='text-center' style='color:red;'>Error:".$sql."<br/> ".mysqli_error($conn)."</h3>";
                        }
                        }
                        $id=$name=$noidung=$img=$by="";
                        CloseCon($conn);
                    ?>
                    <div class="div__btn">
                        <button name="insert" class="btn btn-primary">Insert</button>
                        <button name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <div class="insert">
                <h2 class="heading-text">Delele Blog</h2>
                <form method="POST" class="form-group">
                    <div>
                    <label for="insert_id">Blog ID:</label>
                    <input type="text" name="insert_id" id="insert_id" class="form-control" placeholder="Blog ID" required>
                    </div>
                    <?php
                    $conn=openCon();
                    $id="";
                    if(isset($_POST['delete'])){
                    $id=$_POST['insert_id'];
                    $sql="DELETE FROM blog WHERE blog_id='$id'";
                    if(mysqli_query($conn,$sql)){
                        echo"<h3 class='text-center' style='color:red;'>Delete record successfully !</h3>";
                    }
                     else{
                        echo"<h3 class='text-center' style='color:red;'>Error:<br/>".$sql.".<br/>".mysqli_error($conn).".</h3>";
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
            <div class="blog courses">
                <div class="blog__heading-text courses__heading-text">
                    <h2>Blog</h2>
                </div>
                <div class="blog__list courses__list">
                    <?php
                    $conn = OpenCon();
                    $sql = "select * from blog";
                    $query = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($query) == 0) {
                        echo "Chua co du lieu";
                    } else {
                        while ($row = mysqli_fetch_array($query)) {
                            echo "
                            <div class='blog-item courses-item'>
                            <a href='./blog_chitiet.php?blog_id=".$row['blog_id']."' class='color-black'>
                                <div class='blog-item__img courses-item__img' title=''>
                                    <img src='" . $row['blog_img'] . "' alt='" . $row['blog_name'] . "'>
                                    <div class='courses-item__img__title'>
                                    <h3>" . $row['blog_name'] . "</h3>
                                    <div class='blog__tacgia courses__price pd-left-32'>By :  " . $row['tacgia'] . "</div>
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