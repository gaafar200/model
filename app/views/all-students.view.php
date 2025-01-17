<?php $this->view("include/header",["pageName"=>$pageName]); ?>
<?php $this->view("include/sidebar"); ?>
<?php $this->view("include/upbar",["user"=>$user]); ?>

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-info.html">Courses Info</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list" style="margin-top: 10vh;">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func" method="POST">
                                                <input type="text" placeholder="Search..."
                                                    class="search-int form-control" name="search">
                                                <a><button type="submit" class="pro-5"><i class="fa fa-search"></i></button></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">All Students</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts-area mg-b-15">
            <!-- delete button -->
             <div id="id01" class="modal-delete">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close-delete" title="Close Modal">×</span>
                                <form class="modal-content" action="/action_page.php">
                                    <div class="container-delete">
                                    <h1>Delete Account</h1>
                                    <p>Are you sure you want to delete account?</p>
                                    
                                    <div class="clearfix">
                                        <button class="btn-delete cancelbtn" type="button" onclick="document.getElementById('id01').style.display='none'" >Cancel</button>
                                        <a href="#">
                                             <button class="btn-delete deletebtn" type="button" onclick="document.getElementById('id01').style.display='none'">Delete</button>
                                        </a>
                                       
                                    </div>
                                    </div>
                                </form>
                </div>
                 <!-- delete button -->

            <div class="container-fluid">
                <div class="row">
                    <?php if(is_array($students) && !empty($students)):  ?>
                        <?php foreach ($students as $student): ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="student-inner-std res-mg-b-30 contact-panel contact-panel-cs pro-1">
                                    <div class="student-img pro-2">
                                        <img src="<?= $student->photo ?>" alt=""  class="pro-3 img-rounded "/>
                                        <h4><?= $student->f_name ?> <?= $student->l_name ?></h4>
                                        <div>
                                           <a href="<?= ROOT ?>Student/profile/<?= $student->username ?>"> <button type="button" class="btn btn-custon-rounded-four btn-primary">Profile</button></a>
                                           <a href="<?= ROOT ?>Student/delete/<?= $student->username ?>"><button type="button" class="btn btn-custon-rounded-four btn-danger">Delete</button></a>
                                           <a href="<?= ROOT ?>Student/edit/<?= $student->username ?>"><button type="button" class="btn btn-custon-rounded-four btn-success">Edit</button></a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="container-fluid">
                            <h3 style="margin-left: auto">No Students To display</h3>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php $this->view("include/footer"); ?>

