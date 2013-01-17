<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<nav>
	<a href="#content" title="Skip to content" class="screen-reader-text">Skip to content</a>
    <ul class="nav site-nav" role="navigation">
    	<li<?php if ($page == 'index.php') echo " class=\"selected\""; ?>><a href="index.php">Home</a></li>
    	<li<?php if ($page == 'about.php') echo " class=\"selected\""; ?>><a href="about.php">About</a></li>
    	<li<?php if ($page == 'page.php') echo " class=\"selected\""; ?>><a href="page.php">Page</a></li>
		<li<?php if ($page == 'contact.php') echo " class=\"selected\""; ?>><a href="contact.php">Contact</a></li>
    </ul>
</nav>