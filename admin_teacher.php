<?php
include 'dbcon.php';
$sql = "SELECT tbl_userinfo.user_id, tbl_userinfo.firstname, tbl_userinfo.lastname, tbl_userinfo.grade, tbl_userinfo.strand, tbl_userinfo.lrn, tbl_user_level.level, tbl_contactinfo.contact_num
FROM tbl_userinfo
JOIN tbl_user_level ON tbl_user_level.user_level_id = tbl_userinfo.user_id
JOIN tbl_contactinfo ON tbl_contactinfo.contact_id = tbl_userinfo.user_id
WHERE tbl_user_level.level = 'TEACHER'";

$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Admin dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/logo.jpg" class="img-fluid"/><br>Banisil National High School</br></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="admin_dashboard.php" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Dashboard</span></a>
                </li>
		
                <li class="">
                    <a href="admin_student.php"><i class="fas fa-user"></i><span>Student</span></a>
                </li>

                <li class="">
                    <a href="admin_teacher.php"><i class="fas fa-user"></i><span>Teachers</span></a>
                </li>
                
                <li class="">
                    <a href="admin_pending.php"><i class="fas fa-user"></i><span>Pending Enroll Student</span></a>
                </li>
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">school</i> Program/Strand
                    </a>
                    
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="admin_ABM.php">ABM</a>
                        </li>
                        <li>
                            <a href="admin_STEM.php">STEM</a>
                        </li>
                        <li>
                            <a href="admin_HUMMS.php">HUMMS</a>
                        </li>
                        <li>
                            <a href="admin_EIM.php">EIM</a>
                        </li>
                        <li>
                            <a href="admin_FBS.php">FBS</a>
                        </li>
                        <li>
                            <a href="admin_SMAW.php">SMAW</a>
                        </li>
                    </ul>
                </li>


                    </ul>
                </li>
               
            
               
               
            </ul>

           
        </nav>
		
		
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" 
								  placeholder="Search">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon2">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                           
                            </li>
                            <li class="nav-item">
                     
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
								<img src="img/admin.png" style="width:40px; border-radius:50%;"/>
								<span class="xp-user-live"></span>
								</a>
								<ul class="dropdown-menu small-menu">
                                    <li>
                                        <a href="#">
										  <span class="material-icons">
person_outline
</span>Profile

										</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
settings
</span>Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
logout</span>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
               
            </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
		   
			
		   </div>
		   
		   
		   
		   <!--------main-content------------->
		   
		   <div class="main-content">
			  <div class="row">
			    
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">Manage Teachers</h2>
        </div>
        <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
		  <i class="material-icons">&#xE147;</i> <span>Add New Teacher</span></a>
          
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Grade Handle</th>
          <th>Program/Strand Handle</th>
          <th>Contact Number</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      <tr>
          <?php
            while($row = mysqli_fetch_assoc($result))
              {
                ?>
                <td><?php echo 'ID' . ' ' . $row['user_id'] ?></td>
                <td><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></td>
                <td><?php echo $row['grade']; ?></td>
                <td><?php echo $row['strand']; ?></td>
                <td><?php echo $row['contact_num'] ?></td>
                <td>
                <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                <a href="#viewEmployeeModal" class="view" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="View">&#xE8F4;</i>
                </a>
                </td>
        </tr>
            <?php
                }
                  ?>  
      </tbody>
    </table>
    <div class="clearfix">
      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
      <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
      </ul>
    </div>
  </div>
</div>

<?php 
include 'dbcon.php';
if(isset($_POST['btnAdd'])){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cfpassword =$_POST['password'];
  $encrypted = password_hash($password, PASSWORD_DEFAULT);
  $contact = $_POST['contact'];
  $gender = $_POST['gender'];
  $birthday = $_POST['birthday'];
  $age = $_POST['age'];
  $grade = $_POST['grade'];
  $strand = $_POST['strand'];
  $street = $_POST['street'];
  $barangay = $_POST['barangay'];
  $city = $_POST['city'];

  $sql = "INSERT INTO tbl_userinfo (firstname, lastname, gender, birthday, age, grade, strand, lrn) VALUES ('$firstname', '$lastname', '$gender', '$birthday', '$age', '$grade', '$strand', '')";

  if($conn->query($sql) === TRUE){
    $userinfo_id = $conn->insert_id;
    $sql = "INSERT INTO tbl_usercredentials (userinfo_id, username, password) VALUES ('$userinfo_id', '$username', '$encrypted')";

    if($conn->query($sql) === TRUE){
      $sql = "INSERT INTO tbl_contactinfo (userinfo_id, contact_num, city, barangay, street) VALUES ('$userinfo_id', '$contact', '$city', '$barangay', '$street')";

      if($conn->query($sql) === TRUE){
        $sql = "INSERT INTO tbl_user_level (userinfo_id, level) VALUES ('$userinfo_id', 'TEACHER')";

        if($conn->query($sql) === TRUE){
          $sql = "INSERT INTO tbl_user_status (userinfo_id, status) VALUES ('$userinfo_id', 1)";

          $conn->query($sql) === TRUE;
        }
      }
    }
  }
}
?>
<!-- Modal -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="#" method="POST">
          <div class="modal-header">
            <h5 class="modal-title">Add Teacher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div class="error" id="error" style="display: none;"></div>
            <div>
            <label style="margin-bottom: 20px;">User Credentials</label>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" name="firstname" id="firstname">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="lastname" id="lastname">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" id="username">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="cfpassword" id="cfpassword">
                </div>
              </div>
              <div class="col-6">
              <div class="mb-3">
                <label class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="contact" id="contact">
              </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Age</label>
                  <input type="number" class="form-control" name="age" id="age">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Birthday</label>
                  <input type="date" class="form-control" name="birthday" id="birthday">
                </div>
              </div>
              <div class="col-6">
              <div class="mb-3">
                <label class="form-label">Gender</label>
                <select class="form-select" name="gender">
                <option value="" disabled selected>Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="not-specified">Prefer not to say</option>
                </select>
              </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Grade Handle</label>
                  <select class="form-select" name="grade">
                  <option value="" disabled selected>Select Grade</option>
                  <option value="grade11">Grade 11</option>
                  <option value="grade12">Grade 12</option>
                  <option value="transferee">Transferee</option>
                  </select>
                </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <label class="form-label">Strand Handle</label>
                    <select class="form-select" name="strand">
                    <option value="" disabled selected>Select Strand</option>
                    <option value="abm">ABM</option>
                    <option value="stem">STEM</option>
                    <option value="humms">HUMMS</option>
                    <option value="eim">EIM</option>
                    <option value="fbs">FBS</option>
                    <option value="smaw">SMAW</option>
                   
                    </select>
                  </div>
                  </div>  
                  <div class="col-6">
                    <div class="mb-3">
                      <label class="form-label">Street</label>
                      <input type="text" class="form-control" name="street" id="street">
                    </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <label class="form-label">Barangay</label>
                    <input type="text" class="form-control" name="barangay" id="barangay">
                  </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">City</label>
                  <input type="text" class="form-control" name="city" id="city">
                </div>
            </div>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  


<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Delete Employee</h4>
          <button type="button" class="close" data-dismiss="modal" 
		  aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
        </div>
      </form>
    </div>
	</div>
  </div>
				
		   
			  </div>
			 
			 
			 <!---footer---->
			 
			 
		</div>
		

</div>
</div>


<!----------html code compleate----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  
  



  </body>
  
  </html>


