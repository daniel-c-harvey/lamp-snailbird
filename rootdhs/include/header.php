<style>
	#header {
		width: 40%;
		margin-left: auto;
		margin-right: auto;
	}

	#login {
		float: right;
		font-size: 1.2em;
		color: #D4142B;
		text-decoration: none;
	}

	#banner {
		width: 100%;
		/*max-width: 80%;*/
		margin: 0;
		border: 0;
		padding: 0;
		padding-top: 5px;
		clear: both;
	}

	#navbar {
		margin: 0;
		padding-top: 1px;
		padding-bottom: 1px;
		position: relative;
		background: -webkit-linear-gradient(#A3D1FF, #7CA6CF); /* For Safari 5.1 to 6.0 */
		background: -o-linear-gradient(#A3D1FF, #7CA6CF); /* For Opera 11.1 to 12.0 */
		background: -moz-linear-gradient(#A3D1FF, #7CA6CF); /* For Firefox 3.6 to 15 */
		background: linear-gradient(#A3D1FF, #7CA6CF); /* Standard syntax (must be last) */
		text-align: center;

	}

	ul#menu li {
		display: inline;
		font-size: 1.2em;
		color: #666699;
		position: relative;
	}

	ul#menu li a {
		font-family: Quicksand;
		font-size: inherit;
		font-weight: 300;
		color: #D4142B;
		/*color: #664499;*/ /* trying new colors */
		text-decoration: none;
		margin: 0;
		margin-left: 3%;
		margin-right: 3%;
		transition: color 0.25s, text-shadow 0.25s;
		-webkit-transition: color 0.25s, text-shadow 0.25s;
	}

	ul#menu li a:hover {
		color: #BF1227;
		/*color: #662299;*/ /* trying new colors */
		text-shadow: 0 0 7px #E15B6B;
	}
	
	@font-face {
		font-family: Quicksand;
		src: url('../font/Quicksand-Regular.otf');
	}
</style>
<div id="header">
	<!--<a href="../index.php"><img id="banner" src="../images/logos/banner.png" title="Home Page" alt="banner" ></a>-->
</div>
<nav id="navbar">
	<ul id="menu">
		<li><a href="../index.php">Home</a></li>
	</ul>
</nav>