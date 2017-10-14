<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" type="text/css" href="ContentDesign.css">
	<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
<head>
<body>
	<h2 align="center">Variable type</h2>
	<hr />
	<p class="sansserif"align="center-left">A variable provides us with named storage that our programs can manipulate. Each variable in C++ has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.
											The name of a variable can be composed of letters, digits, and the underscore character. It must begin with either a letter or an underscore. Upper and lowercase letters are distinct because C++ is case-sensitive:</p>
	<table border="1" align="center" width="500" height="400">
		<tr>
			<th>Type</th>
			<th>Discription</th>
		</tr>
		<tr>
			<td width="200">bool</td>
			<td>Stores either value true or false.</td>
		</tr>
		<tr>
			<td>char</td>
			<td>Typically a single octet(one byte). This is an integer type.</td>
		</tr>
		<tr>
			<td>int</td>
			<td>The most natural size of integer for the machine.</td>
		</tr>
		<tr>
			<td>float</td>
			<td>A single-precision floating point value.</td>
		</tr>
		<tr>
			<td>double</td>
			<td>A double-precision floating point value.</td>
		</tr>
		<tr>
			<td>void</td>
			<td>Represents the absence of type.</td>
		</tr>
		<tr>
			<td>wchar_t</td>
			<td>A wide character type.</td>
		</tr>
	</table>
	<hr />
	<p class="sansserif"align="center-left">C++ also allows to define various other types of variables, which we will cover in subsequent chapters like Enumeration, Pointer, Array, Reference, Data structures, and Classes.</p>
	<h2 align="center">Variable Definition in C++</h2>
	<hr />
	<p class="sansserif"align="center-left">A variable definition means to tell the compiler where and how much to create the storage for the variable. A variable definition specifies a data type, and contains a list of one or more variables of that type as follows</p>
	<pre class="inset" align="center-left">
	
 type variable_list;
	</pre>
	<p class="sansserif"align="center-left">Here, type must be a valid C++ data type including char, w_char, int, float, double, bool or any user-defined object, etc., and variable_list may consist of one or more identifier names separated by commas. Some valid declarations are shown here:</p>
	<pre class="inset" align="center-left">
	
 int    i, j, k;
 char   c, ch;
 float  f, salary;
 double d;
 
</pre>
	<p class="sansserif"align="center-left">The line int i, j, k; both declares and defines the variables i, j and k; which instructs the compiler to create variables named i, j and k of type int.<br />
											Variables can be initialized (assigned an initial value) in their declaration. The initializer consists of an equal sign followed by a constant expression as follows:</p>	
	<pre class="inset" align="center-left">
	
	type variable_name = value;
	
	</pre>
	<p class="sansserif"align="center-left">Some examples are:</p>
	<pre class="inset" align="center-left">
	
 extern int d = <span style="color:blue;font-weight:bold">3</span>, f = <span style="color:blue;font-weight:bold">5</span>;   <span style="color:green;font-weight:bold"> // declaration of d and f.</span> 
 int d = <span style="color:blue;font-weight:bold">3</span>, f = <span style="color:blue;font-weight:bold">5</span>;           <span style="color:green;font-weight:bold">// definition and initializing d and f.</span> 
 byte z = <span style="color:blue;font-weight:bold">22</span>;               <span style="color:green;font-weight:bold"> // definition and initializes z.</span>
 char x = <span style="color:red;font-weight:bold">'x'</span>;
<span style="color:green;font-weight:bold"> // the variable x has the value 'x'.</span>

</pre>
	<p class="sansserif"align="center-left">For definition without an initializer: variables with static storage duration are implicitly initialized with NULL (all bytes have the value 0); the initial value of all other variables is undefined.</p>
	<p class="sansserif"align="center-left">A variable declaration provides assurance to the compiler that there is one variable existing with the given type and name so that compiler proceed for further compilation without needing complete detail about the variable. A variable declaration has its meaning at the time of compilation only, compiler needs actual variable definition at the time of linking of the program.
											A variable declaration is useful when you are using multiple files and you define your variable in one of the files which will be available at the time of linking of the program. You will use extern keyword to declare a variable at any place. Though you can declare a variable multiple times in your C++ program, but it can be defined only once in a file, a function or a block of code.</p>
	<pre class="inset" align="center-left">	
<span style="color:red;font-weight:bold">
 #include</span> <span style="color:green;font-weight:bold">&ltiostream&gt</span>
 using namespace std;

 <span style="color:green;font-weight:bold">// Variable declaration</span>
 extern int a, b;
 extern int c;
 extern float f;
  
 int <span style="color:red;font-weight:bold">main</span> ()
 {
   <span style="color:green;font-weight:bold">// Variable definition</span>
   int a, b;
   int c;
   float f;
 
   <span style="color:green;font-weight:bold">// actual initialization</span>
   a = 10;
   b = 20;
   c = a + b;
 
   <span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold">&lt&lt c &lt&lt endl</span> ;

   f = 70.0/3.0;
   <span style="color:red;font-weight:bold">cout</span><span style="color:green;font-weight:bold">&lt&lt f &lt&lt endl</span> ;
 
   <span style="color:red;font-weight:bold">return</span> <span style="color:blue;font-weight:bold">0</span>;
 }

</pre>
	
<div>
<a href="DataTypeC++.php" target="iframe_content" class="button">PREV</a>
<a href="VariableScopeC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>	
</body>
</html>
