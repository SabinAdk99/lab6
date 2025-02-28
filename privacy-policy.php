<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Terms Of Use | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here">
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="../css/styles.css" />
	</head>
	<body id="section6">
		<!-- Page-level header -->
		<header>
			<img src="../images/html-logo.svg" height="75" width="75" alt="HTML" />
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
			<!-- Global site navigation -->
			<nav>
				<ul>
<!-- STEP 9a: Notice how none of the below links work - this is because the path to the pages is not correct - from here, we need to navigate UP out of the 'about' folder in the file system -->
					<li><a href="../index.php" title="Go to the Home page">Home</a></li>
					<li><a href="../red.php" title="Learn about red blocks">Red Blocks</a></li>
					<li><a href="../blue.php" title="Learn about blue blocks">Blue Blocks</a></li>
					<li><a href="../yellow.php" title="Learn about yellow blocks">Yellow Blocks</a></li>
					<li><a href="../green.php" title="Learn about green blocks">Green Blocks</a></li>
					<li><a href="../about.php" title="Learn more about us">About Us</a></li>
<!-- STEP 9b: Fix each of the above href paths to point up out of the current directory with "../" - for example, to go up and back to the index.php (Home page), href="../index.php" would do the trick -->
				</ul>
			</nav>
		</header>
		<!-- Page-level main content -->
		<main>
			<section>
				<h3>Privacy Policy</h3>
				<p>Eget egestas purus viverra accumsan in. Tempor id eu nisl nunc mi ipsum. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Ipsum a arcu cursus vitae. Eu tincidunt tortor aliquam nulla facilisi cras. Ultrices vitae auctor eu augue ut lectus arcu bibendum. Ultricies integer quis auctor elit sed vulputate. Sit amet nisl suscipit adipiscing bibendum est. In nibh mauris cursus mattis molestie a iaculis. In fermentum posuere urna nec tincidunt praesent semper. Morbi blandit cursus risus at ultrices mi tempus imperdiet.</p>

				<p>Risus ultricies tristique nulla aliquet enim. Adipiscing elit duis tristique sollicitudin nibh sit amet. Vel fringilla est ullamcorper eget nulla. In mollis nunc sed id semper risus. Arcu dictum varius duis at consectetur lorem donec massa. Mattis molestie a iaculis at erat. Odio tempor orci dapibus ultrices in iaculis nunc sed augue. Molestie nunc non blandit massa enim nec dui nunc mattis. Sed arcu non odio euismod lacinia at. Pulvinar mattis nunc sed blandit libero.</p>

				<p>Enim praesent elementum facilisis leo vel fringilla est ullamcorper. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Aliquam ultrices sagittis orci a scelerisque purus semper. Aliquam ut porttitor leo a diam sollicitudin tempor. Mi eget mauris pharetra et ultrices neque. Magna ac placerat vestibulum lectus mauris ultrices eros. Maecenas accumsan lacus vel facilisis. Volutpat blandit aliquam etiam erat velit scelerisque in. Euismod elementum nisi quis eleifend quam adipiscing. Nulla porttitor massa id neque aliquam vestibulum morbi.</p>

				<h3 id="personal-information">Use of Personal Information</h3>

				<p>Praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. Arcu risus quis varius quam quisque id. Adipiscing elit pellentesque habitant morbi tristique senectus. Tellus pellentesque eu tincidunt tortor. Integer vitae justo eget magna fermentum iaculis eu non. Aenean vel elit scelerisque mauris pellentesque pulvinar. Cras sed felis eget velit. Vel eros donec ac odio tempor orci. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt.</p>

				<p>Elit eget gravida cum sociis natoque penatibus et magnis. Porttitor massa id neque aliquam. Aliquam sem et tortor consequat id porta. A scelerisque purus semper eget duis at tellus. Pellentesque sit amet porttitor eget. Aliquam ultrices sagittis orci a scelerisque purus semper eget duis. Dictum fusce ut placerat orci nulla pellentesque dignissim. Rhoncus mattis rhoncus urna neque viverra. Id semper risus in hendrerit gravida rutrum quisque non tellus. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis.</p>

				<p>Lorem mollis aliquam ut porttitor leo a diam. Elementum eu facilisis sed odio morbi quis commodo. Suspendisse interdum consectetur libero id faucibus nisl. Tempus urna et pharetra pharetra. Vitae justo eget magna fermentum iaculis eu non diam phasellus. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Sed faucibus turpis in eu mi bibendum. Sollicitudin aliquam ultrices sagittis orci.</p>

				<p>Nunc sed blandit libero volutpat sed cras. Varius quam quisque id diam vel. Facilisis magna etiam tempor orci eu lobortis elementum nibh tellus. Neque convallis a cras semper auctor neque vitae. Ac felis donec et odio pellentesque diam volutpat commodo sed. Metus dictum at tempor commodo ullamcorper a lacus vestibulum sed. Non enim praesent elementum facilisis. Arcu felis bibendum ut tristique et egestas quis ipsum. Commodo nulla facilisi nullam vehicula ipsum a. Id venenatis a condimentum vitae sapien. Libero nunc consequat interdum varius sit amet mattis. Est ante in nibh mauris cursus mattis molestie. Lorem mollis aliquam ut porttitor leo a diam. Blandit cursus risus at ultrices mi tempus.</p>
			</section>
		</main>
		<!-- Page-level footer -->
		<footer>
			<nav>
<!-- STEP 9c: The below links don't work for the same reasons as the NAV in the HEADER - the href paths are wrong - we are ALREADY inside the 'about' folder, so the "about/" is not needed - remove it from the below two links, then try it out in a browser -->
				<a href="privacy-policy.php" title="Read our Privacy Policy">Privacy Policy</a> | <a href="privacy-policy.php#personal-information" title="Learn about how we treat your personal information">Use of Personal Information</a>
				<a href="terms-of-use.php" title="Read our Terms of Use">Terms of Use</a> | <a href="terms-of-use.php#limitation-liability" title="Read about Limitation of Liability">Limitation of Liability</a>

				<!-- STEP 10: Ensure ALL of the NAV element links in both the HEADER and FOOTER of all of the pages are working properly - well done! -->
			</nav>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>
