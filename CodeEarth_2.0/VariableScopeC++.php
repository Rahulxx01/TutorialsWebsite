<!doctype html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" type="text/css" href="ContentDesign.css">
	<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
 </head>
 <body>
	<h1 align="center">Variable Scope in C++</h1>
	<hr />
	<p class="sansserif"align="center-left">A scope is a region of the program and broadly speaking there are three places, where variables can be declared:</p>
	<h2 align="center">Local Variables:</h2>
	<p class="sansserif"align="center-left">Variables that are declared inside a function or block are local variables. They can be used only by statements that are inside that function or block of code. Local variables are not known to functions outside their own. Following is the example using local variables:</p>
	<pre class="inset" align="center-left">		
		<span style="color:blue;font-weight:bold">#include</span> <span style="color:red;font-weight:bold">&ltiostream&gt</span>
		using namespace std;
 
		int main ()
		{
		<span style="color:green;font-weight:bold">// Local variable declaration:</span>
		int a, b;
		int c;
 
		<span style="color:green;font-weight:bold">// actual initialization</span>
		a = 10;
		b = 20;
		c = a + b;
 
		<span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold">&lt&lt c</span>;
 
		<span style="color:red;font-weight:bold">return</span> 0;
		}
		</pre>
<hr />
<h2 align="center">Global Variables:</h2>
<p class="sansserif"align="center-left">Global variables are defined outside of all the functions, usually on top of the program. The global variables will hold their value throughout the life-time of your program.<br /><br />
A global variable can be accessed by any function. That is, a global variable is available for use throughout your entire program after its declaration. Following is the example using global and local variables:</p>
<pre class="inset"align="center-left">		
		<span style="color:blue;font-weight:bold">#include</span> <span style="color:red;font-weight:bold">&ltiostream&gt</span>
		using namespace std;

		<span style="color:green;font-weight:bold">// Global variable declaration:</span>
		int g;
 
		int main ()
		{
		<span style="color:blue;font-weight:bold">// Local variable declaration:</span>
		int a, b;
 
		<span style="color:blue;font-weight:bold">// actual initialization</span>
		a = 10;
		b = 20;
		g = a + b;
 
		<span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold"><< g</span>;
 
		<span style="color:red;font-weight:bold">return</span> 0;
		}
		</pre>
<div>
<a href="VariableTypeC++.php" target="iframe_content" class="button">PREV</a>
<a href="ClassesObjects++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
		</body>
</html>
