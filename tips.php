<?
require("shared.inc");
commonHeader("Cool PHP Tips");

function tipTitle($title,$author='',$date='') {
	echo "<FONT SIZE=+1><B>" . $title . "</B></FONT><BR>\n";
	if ($author || $date) {
		echo "<SMALL>\n";
		if ($author) {
			echo "Submitted by " . $author . "<BR>\n";
		}
		if ($date) {
			echo $date . "<BR>\n";
		}
		echo "</SMALL>\n";
	}
	echo "<BR>\n";
}

?>

<h3>Cool PHP Tips and Tricks</h3>

<P>
This page is going to contain a collection of "neat" tips and tricks 
related to PHP.  They aren't necessarily be related to actually coding in PHP 
(as our first example shows), but they are, in our opinion, pretty cool.
</P>

<P>
Send your suggestions for tips to <A HREF="mailto:webmaster@php.net">webmaster@php.net</A>.
</P>

<HR NOSHADE SIZE=1>

<? tipTitle('Adding the Quick Reference to Internet Explorer 5', 'Colin Viebrock', '28-Jul-2000'); ?>

<OL>

<LI>If you don't already have the IE5 Tools package, download and install it from
<A HREF="http://www.microsoft.com/Windows/IE/WebAccess/ie5tools.asp" TARGET="_blank"
>www.microsoft.com/Windows/IE/WebAccess/ie5tools.asp</A>

<LI>Launch the QuickSearch utility (you'll find it on your Links bar)

<LI>Add a new search shortcut by clicking on "New" and use the following settings:
<UL>
<LI>Shortcut: <B>php</B>
<LI>Search: <B>Custom URL</B>
<LI>URL: <B>http://www.php.net/manual-lookup.php?function=%s</B>
</UL>
... or substitute your favorite mirror site instead of <B>www.php.net</B><BR>
<CENTER>
<IMG SRC="gifs/tips-quickref.gif" BORDER=0><BR>
</CENTER>

<LI>Click "Ok", then click "Save" to keep your new settings

<LI>That's it!  Try it by typing "php strlen" in the IE Address bar.  You should
jump right to the manual entry for strlen.  And because the QuickRef code on the
PHP site is smart, you can use it to do general searches of the PHP site.  For
example, try typing "php file upload" in your browser.

</OL>

<HR NOSHADE SIZE=1>

<? tipTitle('Adding the Quick Reference to Netscape on Linux', 'David Rose', '28-Jul-2000'); ?>

<P>
Further to the example above for Windows/IE users, here's something Linux folk can do:
</P>

<OL>

<LI>Create a file called <B>phpfind</B> somewhere on an executable path

<LI>In that file, write the following code (substituting the path to Netscape,
if necessary):

<PRE>
#!/bin/sh
/usr/bin/netscape http://www.php.net/manual-lookup.php?funtion=$1
</PRE>

<LI>Save it and type <B>chmod +x phpfind</B> to make it executable

<LI>That's it.  When you type "phpfind funcionname" on your command line, 
Netscape will open the proper URL for you.

</OL>

<?
commonFooter();
?>
