<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>

<h1 align="center">Java - Environment Setup</h1>
<hr>

<h2>Local Environment Setup</h2>

<p>If you are still willing to set up your environment for Java programming language, 
then this section guides you on how to download and set up Java on your machine. 
Please follow the following steps to set up the environment.
</p>

<p>Java SE is freely available from the link 
<a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html" target="_blank">Download Java.</a> 
So you download a version based on your operating system.
</p>

<p>Follow the instructions to download java and run the .exe to install Java on your machine. 
Once you installed Java on your machine, you would need to set environment variables to point to correct installation directories:
</p>

<h2>Setting up the path for windows:</h2>
<p>Assuming you have installed Java in c:\Program Files\java\jdk directory:</p>
<ul>
	<li>Right-click on 'My Computer' and select 'Properties'.</li>
	<br>
	<li>Click on the 'Environment variables' button under the 'Advanced' tab.</li>
	<br>
	<li>Now, alter the 'Path' variable so that it also contains the path to the Java executable. 
	Example, if the path is currently set to 'C:\WINDOWS\SYSTEM32', 
	then change your path to read 'C:\WINDOWS\SYSTEM32;c:\Program Files\java\jdk\bin'.</li>
</ul>	

<h2>Setting up the path for Linux, UNIX, Solaris, FreeBSD:</h2>

<p>Environment variable PATH should be set to point to where the Java binaries have been installed. 
Refer to your shell documentation if you have trouble doing this.
</p>

<p>Example, if you use bash as your shell, then you would add the following line to 
the end of your '.bashrc: export PATH=/path/to/java:$PATH'
</p>

<h2>Popular Java Editors:</h2>
<p>To write your Java programs, you will need a text editor. There are even more sophisticated 
IDEs available in the market. But for now, you can consider one of the following:
</p>

<ul>
	<li>Notepad: On Windows machine you can use any simple text editor like Notepad (Recommended for this tutorial), TextPad.</li>
	<li>Netbeans: is a Java IDE that is open-source and free which can be downloaded from <a href="https://netbeans.org/index.html" target="_blank">http://www.netbeans.org/index.html.</a></li>
	<li>Eclipse: is also a Java IDE developed by the eclipse open-source community and can be downloaded from <a href="http://www.eclipse.org/" target="_blank">http://www.eclipse.org/.</a></li>
</ul>
<div>
<a href="Java-Overview.php" target="iframe_content" class="button">PREV</a>
<a href="Java-BasicSyntax.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>



</html>