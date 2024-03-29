<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Dashboard</title>
		<link type="text/css" rel="stylesheet" href="css/dashboard.css"/>
		<link type="text/css" rel="stylesheet" href="css/dialog.css"/>
		<!--<script type="text/javascript" src="js/dashboard.js"></script>-->
		<link type="image/x-icon" rel="icon" href="images/icons/my_header_icon.png"/>
	</head>

	<body>
		<!--The top navigation-->
		<nav>
			<div id="searchNav">
				<table>
					<tr>
						<td>
							<!-- Create a new post button -->
							<a href="#"><button id="newPostBtn" class="btnNewPost">New post</button></a> 
						</td>
						<td>
							<div id="searchContainer" class="searchContainerNoFocus">
								<!-- Search icon -->
								<button class="postActionBtn"><img id="searchBtn" src="images/icons/ic_search.png"  width="24px" height="24px"/></button>
								<!-- The search bar -->
								<input id="searchBar" type="text" placeholder="Search posts"/>
								<button class="postActionBtn"><img id="clearSearchBtn"src="images/icons/ic_clear.png" width="24px" height="24px"/></button>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div id="selectionNav">
				<table>
					<tr>
						<td>
							<div>
								<button class="postActionBtn"><img id="closeSelectionBtn"src="images/icons/ic_clear_white.png" width="24px" height="24px" title="clear selection"/></button> | <span id="numSelection">1 selected</span>
							</div>
						</td>
						<td>
							<div>
								<button class="postActionBtn"><img id="publishSelectedBtn" src="images/icons/ic_publish.png"  width="24px" height="24px" title="Publish"/></button>
								<button class="postActionBtn"><img id="unpublishSelectedBtn" src="images/icons/ic_unpublish.png"  width="24px" height="24px" title="Unpublish"/></button>
								<button class="postActionBtn"><img id="deleteSelectedBtn" src="images/icons/ic_delete.png"  width="24px" height="24px" title="Delete"/></button>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</nav>
		
		<section id="body">
			<table>
				<tr>
					<td>
						<select id="displayPostDropDown">
							<option id="allFilter" value="all">All (0)</option>
							<option id="publishedFilter" value="true">Published (0)</option>
							<option id="draftsFilter" value="false">Drafts (0)</option>
						</select>
					</td>
					<td>
						<input id="selectAllCheckbox" type="checkbox"/>
					</td>
				</tr>
			</table>
			<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "rabbitfarm";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}
           $sql="SELECT * from contactus";
           $result=$conn-> query($sql);
           $count=0;
           if ($result-> num_rows > 0){
               while ($row=$result-> fetch_assoc()) {
       
                   $count=$count+1;
               }
           }
           echo $count;
                     
                   ?>

<div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">MESSAGES</h4>
                    <h5 style="color:black;">
                    <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Name </th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">messages</th>
      </tr>
    </thead>
    <?php
     
$server = "localhost";
$user = "root";
$password = "";
$db = "rabbitfarm";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}
      $sql="SELECT * from contactus";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["fname"]?> <?=$row["lname"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["phone"]?></td>
      <td><?=$row["message"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?></table>

			<div id="postContainer">
				<!-- <table id="0" class="post">
					<tr>
						<td>
							<input class="postCheckbox" type="checkbox"/>
						</td>
						<td>
							<table>
								<tr>
									<td>How to implement Google play in app billing</td>
									<td>
										<span>
											<span class="menuItems">
												<button class="postActionBtn"><img class="publishBtn" src="images/icons/ic_publish.png"  width="24px" height="24px"/></button>
												<button class="postActionBtn"><img class="deleteBtn" src="images/icons/ic_delete.png"  width="24px" height="24px"/></button>
												<button class="postActionBtn"><img class="previewBtn" src="images/icons/ic_eye.png"  width="24px" height="24px"/></button>
											</span>
											<button class="postActionBtn menuIcon"><img class="ellipsesBtn" src="images/icons/ic_ellipses.png"  width="24px" height="24px"/></button>
										</span>
									</td>
								</tr>
								<tr>
									<td><span style="color:orange;">Draft</span> &#183; Sept 30</td>
									<td>
										<span>
											<button class="postActionBtnSmall" style="margin-right: 16px;"><img class="shareBtn" src="images/icons/ic_share.png"  width="18px" height="18px"/></button>
											<span>
												1248<button class="postActionBtnSmall"><img class="analyticsBtn" src="images/icons/ic_chart.png"  width="18px" height="18px"/></button>
											</span>
										</span>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table> -->		
			</div>
		</section>
		<!--The modal background-->
		<!--<div id="modalBackground">
			<div class="dialog" id="progressBarModal">
				<img id="progressBarImage" src="images/gifs/loading_bar.gif"/>
			</div>

			<div class="dialog" id="loginModal">
				<h1>Please Login to your dashboard</h1>
				<div>
					<input id="loginPasswordInput" type="Password" placeholder="Password"/>
				</div>
				<div class="inputError" id="loginPasswordInputError">
					<p></p>
				</div>
				<div>
					<button id="loginBtn">Login</button>
				</div>
			</div>-->
		</div>	
	</body>
</html>