<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


      <!-- Icon -->
      <link rel="stylesheet" href="../assets/fonts/line-icons.css">


<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>


</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!--
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Admin</span> </a>
      <ul>
        <li><a href="add_admin.php">Add Admin</a></li>
        <li><a href="view_admin.php">View Admin</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>File System</span> </a>
    <ul>
        <li><a href="add_file.php">Add File/Directory</a></li>
        <li><a href="view_file.php">View Directory</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Features</span> </a>
      <ul>
        <li><a href="add_feature.php">Add Feature</a></li>
        <li><a href="view_feature.php">View Feature</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Services</span> </a>
      <ul>
        <li><a href="add_service.php">Add Service</a></li>
        <li><a href="view_service.php">View Service</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Team</span> </a>
      <ul>
        <li><a href="add_team.php">Add Team</a></li>
        <li><a href="view_team.php">View Team</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Plan</span> </a>
      <ul>
        <li><a href="add_plan.php">Add Plan</a></li>
        <li><a href="view_plan.php">View Plan</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Category</span> </a>
      <ul>
        <li><a href="add_category.php">Add Category</a></li>
        <li><a href="view_category.php">View Category</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Sub-Category</span> </a>
      <ul>
        <li><a href="add_subcategory.php">Add Sub-Category</a></li>
        <li><a href="view_subcategory.php">View Sub-Category</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Testimonial</span> </a>
      <ul>
        <li><a href="add_testimonial.php">Add Testimonial</a></li>
        <li><a href="view_testimonial.php">View Testimonial</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Blog</span> </a>
      <ul>
        <li><a href="add_blog.php">Add Blog</a></li>
        <li><a href="view_blog.php">View Blog</a></li>

      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Contact</span> </a>
      <ul>
        <li><a href="view_contact.php">View Contact</a></li>
      </ul>
    </li>



</div>
<!--sidebar-menu-->
