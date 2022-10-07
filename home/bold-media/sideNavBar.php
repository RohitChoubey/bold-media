<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bold Media</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel='stylesheet'>
 
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
           <div>
			   <a href="dashboard.php" class="nav_logo"> 
		   			<i class='bx bx-layer nav_logo-icon'></i> 
		   			<span class="nav_logo-name">Bold Media</span> 
		   		</a>
			   <div class="nav_list"> 
			   		<a href="dashboard.php" class="nav_link active"> 
			   			<i class='bx bx-grid-alt nav_icon'></i> 
			   			<span class="nav_name">Dashboard</span> 
			   		</a> 
			   		<a href="addPost.php" class="nav_link"> 
			   			<i class='bx bx-edit nav_icon'></i> 
			   			<span class="nav_name">Post New News</span> 
			   		</a> 
			   		<a href="allPost.php" class="nav_link"> 
			   			<i class='bx bx-file nav_icon'></i> 
			   			<span class="nav_name">All News</span> 
			   		</a> 
			   		<a href="totalDeletePost.php" class="nav_link"> 
			   			<i class='bx bx-message-square-detail nav_icon'></i> 
			   			<span class="nav_name">Deleted News</span> 
			   		</a> 
			   		<a href="addUser.php" class="nav_link"> 
			   			<i class='bx bx-user nav_icon'></i> 
			   			<span class="nav_name">Add User</span> 
			   		</a> 
			   		<a href="#" class="nav_link"> 
			   			<i class='bx bx-folder nav_icon'></i> 
			   			<span class="nav_name">Files</span> 
			   		</a> 
			   		<a href="#" class="nav_link"> 
			   			<i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
			   			<span class="nav_name">Stats</span> 
			   		</a> 
			   	</div>
			</div>
             <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>

</body>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if(toggle && nav && bodypd && headerpd){
                    toggle.addEventListener('click', ()=>{
                        // show navbar
                        nav.classList.toggle('show1')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle','nav-bar','body-pd','header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink(){
                if(linkColor){
                    linkColor.forEach(l=> l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))
        });
</script>