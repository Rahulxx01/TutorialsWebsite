<!doctype html>
<html> 
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="ContentDesign.css">
		<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
	</head>
	<body>
		<h1 align="center">Classes & Objects in C++</h1>
		<hr />
		<p class="sansserif"align="center-left">The main purpose of C++ programming is to add object orientation to the C programming language and classes are the central feature of C++ that supports object-oriented programming and are often called user-defined types.
												A class is used to specify the form of an object and it combines data representation and methods for manipulating that data into one neat package. The data and functions within a class are called members of the class.</p>
		<h2 align="center">Class Definition:</h2>
		<p class="sansserif"align="center-left">When you define a class, you define a blueprint for a data type. This doesn't actually define any data, but it does define what the class name means, that is, what an object of the class will consist of and what operations can be performed on such an object.
						A class definition starts with the keyword class followed by the class name; and the class body, enclosed by a pair of curly braces. A class definition must be followed either by a semicolon or a list of declarations. </p>	
		<p class="sansserif"align="center-left">For example, we defined the Box data type using the keyword class as follows:</p>
		<pre class="inset" align="center-left">		
		<span style="color:blue;font-weight:bold">class</span> <span style="color:red;font-weight:bold">Box</span>
		{
		<span style="color:blue;font-weight:bold">public:</span>
			double length;   <span style="color:green;font-weight:bold">// Length of a box</span>
			double breadth;  <span style="color:green;font-weight:bold">// Breadth of a box</span>
			double height;   <span style="color:green;font-weight:bold">// Height of a box</span>
		};
		</pre>
			<p class="sansserif"align="center-left">The keyword public determines the access attributes of the members of the class that follow it. A public member can be accessed from outside the class anywhere within the scope of the class object. You can also specify the members of a class as private or protected which we will discuss in a sub-section.</p>
			<h2 align="center">Class Objects Definition:</h2>
			<p class="sansserif"align="center-left">A class provides the blueprints for objects, so basically an object is created from a class. We declare objects of a class with exactly the same sort of declaration that we declare variables of basic types. Following statements declare two objects of class Box:</p>
			<pre class="inset" align="center-left">
			
		Box Box1;          // Declare Box1 of type Box
		Box Box2;          // Declare Box2 of type Box

		</pre>
			<h2 align="center">Accessing the Data Members:</h2>
			<p class="sansserif"align="center-left">The public data members of objects of a class can be accessed using the direct member access operator (.). Let us try the following example to make the things clear:</p>
			<pre class="inset" align="center-left">		
		<span style="color:blue;font-weight:bold">include</span> <span style="color:red;font-weight:bold">&ltiostream&gt</span>

		using namespace std;	

		<span style="color:blue;font-weight:bold">class</span> <span style="color:red;font-weight:bold">Box</span>
		{
		public:
			double length;   <span style="color:green;font-weight:bold">// Length of a box</span>
			double breadth;  <span style="color:green;font-weight:bold">// Breadth of a box</span>
			double height;   <span style="color:green;font-weight:bold">// Height of a box</span>
		};

		int <span style="color:red;font-weight:bold">main</span>( )
		{
		Box Box1;        <span style="color:green;font-weight:bold">// Declare Box1 of type Box</span>
		Box Box2;        <span style="color:green;font-weight:bold">Declare Box2 of type Box</span>
		double volume = 0.0; <span style="color:green;font-weight:bold">//Store the volume of a box</span>
 
		<span style="color:green;font-weight:bold">// box 1 specification</span>
		<span style="color:blue;font-weight:bold">Box1</span>.<span style="color:red;font-weight:bold">height</span> = 5.0; 
		<span style="color:blue;font-weight:bold">Box1</span>.<span style="color:red;font-weight:bold">length</span>= 6.0; 
		<span style="color:blue;font-weight:bold">Box1</span>.<span style="color:red;font-weight:bold">breadth</span>= 7.0;

		<span style="color:green;font-weight:bold">// box 2 specification</span>
		<span style="color:blue;font-weight:bold">Box2</span>.<span style="color:red;font-weight:bold">height</span> = 10.0;
		<span style="color:blue;font-weight:bold">Box2</span>.<span style="color:red;font-weight:bold">length</span> = 12.0;
		<span style="color:blue;font-weight:bold">Box2</span>.<span style="color:red;font-weight:bold">breadth</span> = 13.0;
		<span style="color:green;font-weight:bold">// volume of box 1</span>
		volume = Box1.height * Box1.length * Box1.breadth;
		<span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold"><< "Volume of Box1 : " << volume <<endl</span>;

		<span style="color:green;font-weight:bold">// volume of box 2</span>
		volume = Box2.height * Box2.length * Box2.breadth;
		<span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold"><< "Volume of Box2 : " << volume <<endl</span>;
		<span style="color:red;font-weight:bold">return</span> 0;
}
</pre>
		<p class="sansserif"align="center-left">When the above code is compiled and executed, it produces the following result:</p>		
		<pre class="inset" align="center-left">		
		Volume of Box1 : 210
		Volume of Box2 : 1560
	 </pre>
	 <div>
<a href="VariableScopeC++.php" target="iframe_content" class="button">PREV</a>
<a href="InheritanceC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
	</body>
</html>