<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="ContentDesign.css">
		<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
	</head>
	<body>
		<h1 align="center">Inheritance</h1>
		<hr />
		<p class="sansserif"align="center-left">One of the most important concepts in object-oriented programming is that of inheritance. Inheritance allows us to define a class in terms of another class, which makes it easier to create and maintain an application. This also provides an opportunity to reuse the code functionality and fast implementation time.
												When creating a class, instead of writing completely new data members and member functions, the programmer can designate that the new class should inherit the members of an existing class. This existing class is called the base class, and the new class is referred to as the derived class.</p>
		<h2 align="center">Base & Derived Classes:</h2>
		<p class="sansserif"align="center-left">A class can be derived from more than one classes, which means it can inherit data and functions from multiple base classes. To define a derived class, we use a class derivation list to specify the base class(es). A class derivation list names one or more base classes and has the form:<br />
												class derived-class: access-specifier base-class<br />
												Where access-specifier is one of public, protected, or private, and base-class is the name of a previously defined class. If the access-specifier is not used, then it is private by default.<br /><br />
												Consider a base class Shape and its derived class Rectangle as follows:</p>
		<pre class="inset" align="center=left">		
		<span style="color:red;font-weight:bold">#include</span> <span style="color:blue;font-weight:bold">&ltiostream&gt</span>
 
		using namespace std;

		<span style="color:green;font-weight:bold">// Base class</span>
		<span style="color:blue;font-weight:bold">class</span> <span style="color:red;font-weight:bold">Shape</span>
		{
		<span style="color:blue;font-weight:bold">public:</span>
			void <span style="color:red;font-weight:bold">setWidth</span>(int w)
			{
				width = w;
			}
			void <span style="color:red;font-weight:bold">setHeight</span>(int h)
			{
				height = h;
			}
		protected:
			int width;
			int height;
		};

		<span style="color:green;font-weight:bold">// Derived class</span>
		class Rectangle: public Shape
		{
		public:
			int <span style="color:blue;font-weight:bold">getArea</span>()
			{ 
				<span style="color:red;font-weight:bold">return</span> (width * height); 
			}
		};

		int main(void)
		{
		Rectangle Rect;
 
		<span style="color:blue;font-weight:bold">Rect</span>.<span style="color:red;font-weight:bold">setWidth</span>(5);
		<span style="color:blue;font-weight:bold">Rect</span>.<span style="color:red;font-weight:bold">setHeight</span>(7);

		<span style="color:green;font-weight:bold">// Print the area of the object.</span>
		<span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold"><< "Total area: " &lt&lt Rect.getArea() &lt&gt endl</span>;

		<span style="color:red;font-weight:bold">return</span> 0;
		}
		</pre>
<p class="sansserif"align="center-left">When the above code is compiled and executed, it produces the following result:</p><
<pre class="inset" align="center=left">

		<span style="color:green;font-weight:bold">Total area: 35</span>

</pre>										
	<h2 align="center">Access Control and Inheritance:</h2>
	<p class="sansserif"align="center-left">A derived class can access all the non-private members of its base class. Thus base-class members that should not be accessible to the member functions of derived classes should be declared private in the base class.
											We can summarize the different access types according to who can access them in the following way:</p>
	<table border="1" align="center" width="500" height="200">
		<tr>
			<th>Access</th>
			<th>Public</th>
			<th>Protected</th>
			<th>Private</th>
		</tr>
		<tr>
			<td>Same Class</td>
			<td>YES</td>
			<td>YES</td>
			<td>YES</td>
		</tr>
		<tr>
			<td>DERIVED class</td>
			<td>YES</td>
			<td>YES</td>
			<td>NO</td>
		</tr>
		<tr>
			<td>OUTSIDE CLASS</td>
			<td>YES</td>
			<td>NO</td>
			<td>NO</td>
		</tr>
		</table>
		<hr />
		<h2 align="center">Type of Inheritance:</h2>
		<p class="sansserif"align="center-left">1.Single Inheritance<br />2.Multilevel Inheritance<br />3.MulTiPle Inheritance<br />4.Hierarchical Inheritance</p>
	<div>
<a href="ClassesObjects++.php" target="iframe_content" class="button">PREV</a>
<a href="OverloadingC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
	</body>
</html>