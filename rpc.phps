<?php
  $content = $_POST['content'];

  switch($content) {
    case 1:
      echo 'This is the content for the FIRST case statement!';
      break;
    case 2:
      echo 'Congratulations, you have loaded the second bit of content!';
      break;
	case 3:
		echo 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Quisque dolor. Aenean accumsan. Ut ligula. Donec facilisis lectus facilisis risus. Praesent quis sem. Aenean enim purus, mollis at, faucibus ac, ultricies id, lacus. Nam convallis mi non dolor. Proin viverra. Duis orci. Pellentesque at diam. Vestibulum fermentum dui et purus. Fusce vitae sem eget dui hendrerit venenatis. Nullam velit ante, rutrum non, elementum nec, rhoncus sit amet, augue. Proin auctor, nisl mollis rhoncus pretium, leo purus porta dolor, quis convallis enim nisi vitae ligula. Proin sit amet justo. Integer ut diam accumsan arcu gravida cursus. Phasellus at est quis magna tincidunt suscipit. Nulla facilisis velit sodales erat. Suspendisse pellentesque nibh eu elit vehicula porttitor. Proin at felis.
		<br><br>
		Vestibulum in augue nec felis dapibus blandit. Sed at neque sed ipsum viverra consectetuer. Duis lacus arcu, fermentum eu, porttitor vitae, scelerisque vel, odio. Suspendisse potenti. Etiam ornare felis eget ante. Etiam hendrerit, est a hendrerit cursus, tellus elit pulvinar diam, vitae ullamcorper lorem pede non dui. Morbi ultrices cursus justo. Curabitur nec lorem. Sed urna risus, ullamcorper vel, feugiat vitae, viverra id, lacus. Vivamus dictum est aliquet est. Cras mollis, metus ut sollicitudin elementum, leo libero semper mi, malesuada tristique augue pede at lorem. Ut ante sapien, volutpat id, posuere sed, faucibus lobortis, pede. Cras aliquam bibendum justo. Donec pellentesque libero sed erat.
		<br><br>
		Suspendisse euismod, lorem in viverra vulputate, mi diam viverra ligula, vel hendrerit nulla erat ut dui. Pellentesque ut sem at ante consequat pharetra. Nam luctus leo non tortor. Suspendisse potenti. Nulla ipsum magna, sagittis et, sagittis sed, elementum eu, orci. Fusce aliquet libero non ante. Vestibulum sollicitudin dolor eget nisi. Suspendisse laoreet, leo quis tincidunt cursus, magna lacus pellentesque magna, eu varius felis enim id libero. Sed eleifend. Integer ultrices dui euismod odio. Proin elementum. Sed consectetuer, lacus id aliquam bibendum, lacus lorem tincidunt erat, et sollicitudin quam tortor quis lacus. Duis blandit diam a erat.';
		break;

    default:
      echo 'Whoops, there was a problem in the switch. You passed: <i>'. $content .'</i> to the switch statement in rpc.php.';
  }
?>