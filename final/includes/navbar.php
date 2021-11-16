
<div id="navbar">
        <header class="header-fixed">
	       <div class="header-limiter">
		      <nav class="navbar">
                <h1>
                    <a style="cursor: default" href="#">Online<span>Movies</span></a>
                </h1>
			     <div class="dropdown">
                     <button class="dropbtn">
                         <a href="index.php"><i class="fas fa-home"></i> Home</a>
                     </button>
                 </div>
			     <div class="dropdown">
                     <button class="dropbtn">
                         <a style="cursor: default" href="#"><i style="cursor: default" class="fas fa-align-justify"></i> Genre</a>
                     </button>
                 <div class="dropdown-content">
                    <a href="action.php">Action</a>
                    <a href="horror.php">Horror</a>
                    <a href="comedy.php">Comedy</a>
                    <a href="drama.php">Drama</a>
                    <a href="chrime.php">Chrime</a>
                    <a href="mister.php">Mister</a>
                    <a href="thriller.php">Thriller</a>
                    <a href="biography.php">Biography</a>
			     </div>
                </div>
			<div class="dropdown">
                <button class="dropbtn">
                    <a href="serial.php"><i class="fas fa-film"></i> Serial</a>
                </button>
            </div>
                  
			<div class="dropdown">
                <button class="dropbtn">
                    <a href="../team/team.php"><i class="fas fa-users"></i> Team</a>
                </button>
            </div>
            <form action="search.php" method="post">
                <div class="dropdown">
                    <input class="moviesearch" name="search" type="text" placeholder="Search Movie" required>
                    <button type="submit" class="search_button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <div class="dropdown">
                <button class="dropbtn">
                    <a href="contact.php"><i class="fas fa-fw fa-envelope"></i> Contact</a>
                </button>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    <a style="cursor: default" href="index.php"><i style="cursor: default" class="fas fa-user"></i> Welcome: <?php echo $_SESSION["email"]; ?>
                </a>
                </button>
                <div class="dropdown-content">
                    <a href="profile.php">Profile <i class="fas fa-user-circle"></i></a>
                    <a  href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
		</nav>
	</div>
</header>
</div>