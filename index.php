<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        ?>
<p><a href="asciirocks/index.php">ASCII.ROCKS EDITOR</a></p>
<p><a href="asciiss/index.html">ASCIISS DEMO (HTML for ASCII)</a></p>
<p><a href="asciinibbles/index.html">Ascii Nibbles</a></p>
<p><a href="asciiss/bbsconfig.html">How to use HTML with Ascii for setup</a></p>
<p><a href="mobiledemo/index.html">Mobile test</a></p>
<?php
        break;
    case '/asciirocks/index.php':
    case '/asciirocks':
        require 'asciirocks/index.php';
        break;
    case '/asciiss/index.html':
    case '/asciiss':
        require 'asciiss/index.html';
	break;
    case '/asciinibbles/index.html':
    case '/asciinibbles':
        require 'asciinibbles/index.html';
	break;
    case '/asciiss/bbsconfig.html':
        require 'asciiss/bbsconfig.html';
	break;
    case '/mobiledemo/index.html':
        require 'mobiledemo/index.html';
	break;
    default:
        http_response_code(404);
        exit('Not Found');
}



