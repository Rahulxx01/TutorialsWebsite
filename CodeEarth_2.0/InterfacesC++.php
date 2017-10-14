<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="ContentDesign.css">
		<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
	</head>
	<body>
		<h1 align="center">Interfaces in C++ (Abstract Classes)</h1>
		<hr />
	<p class="sansserif" align="center-left">An interface describes the behavior or capabilities of a C++ class without committing to a particular implementation of that class.
	<br /><br />The C++ interfaces are implemented using <b>abstract</b> classes and these abstract classes should not be confused with data abstraction which is a concept of keeping implementation details separate from associated data.
	<br /><br />A class is made abstract by declaring at least one of its functions as <b>pure virtual</b> function. A pure virtual function is specified by placing "= 0" in its declaration as follows:
class Box</p>
<pre class="inset" align="center-left">

 <span style="color:red;font-weight:bold">class</span>  <span style="color:blue;font-weight:bold">Box</span>
{
    <span style="color:blue;font-weight:bold">public:</span>
       <span style="color:green;font-weight:bold">// pure virtual function</span>
      virtual double  <span style="color:blue;font-weight:bold">getVolume() = 0;</span>
    <span style="color:blue;font-weight:bold">private:</span>
      double  length;      <span style="color:green;font-weight:bold"> // Length of a box</span>
      double breadth;     <span style="color:blue;font-weight:bold"> // Breadth of a box</span>
      double height;       <span style="color:blue;font-weight:bold">// Height of a box</span>
};

</pre>
<p class="sansserif" align="center-left">The purpose of an <em>abstract</em> class (often referred to as an ABC) is to provide an appropriate base class from which other classes can inherit. Abstract classes cannot be used to instantiate objects and serves only as an interface. Attempting to instantiate an object of an abstract class causes a compilation error.<br />
Thus, if a subclass of an ABC needs to be instantiated, it has to implement each of the virtual functions, which means that it supports the interface declared by the ABC. Failure to override a pure virtual function in a derived class, then attempting to instantiate objects of that class, is a compilation error.
<br /><br />Classes that can be used to instantiate objects are called <strong>concrete classes.</strong></p>
<h2 align="center">Abstract Class Example:</h2>
<p class="sansserif" align="center-left">Consider the following example where parent class provides an interface to the base class to implement a function called <b>getArea():</b></p>
<pre class="inset" align="center-left">

 <span style="color:blue;font-weight:bold">#include</span>  <span style="color:red;font-weight:bold">&ltiostream&gt</span>
 
using namespace std;
 
 <span style="color:green;font-weight:bold">// Base class</span>
 <span style="color:blue;font-weight:bold">class</span>  <span style="color:red;font-weight:bold">Shape</span> 
{
 <span style="color:blue;font-weight:bold">public:</span>
    <span style="color:green;font-weight:bold">// pure virtual function providing interface framework.</span>
    <span style="color:red;font-weight:bold">virtual</span> int  <span style="color:blue;font-weight:bold">getArea()</span> =  <span style="color:green;font-weight:bold">0</span>;
   <span style="color:red;font-weight:bold"> void</span>  <span style="color:blue;font-weight:bold">setWidth</span>(int w)
   {
      width = w;
   }
   <span style="color:red;font-weight:bold"> void</span>  <span style="color:blue;font-weight:bold">setHeight</span>(int h)
   {
      height = h;
   }
 <span style="color:blue;font-weight:bold">protected:</span>
   int width;
   int height;
};
 
 <span style="color:green;font-weight:bold">// Derived classes</span>
 <span style="color:red;font-weight:bold">class</span>  <span style="color:blue;font-weight:bold">Rectangle</span>: public Shape
{
 <span style="color:red;font-weight:bold">public:</span>
   int  <span style="color:red;font-weight:bold">getArea</span>()
   { 
       <span style="color:blue;font-weight:bold">return</span> (width * height); 
   }
};
 <span style="color:red;font-weight:bold">class</span>  <span style="color:blue;font-weight:bold">Triangle:</span> public Shape
{
 <span style="color:red;font-weight:bold">public:</span>
   int  <span style="color:blue;font-weight:bold">getArea</span()
   { 
       <span style="color:red;font-weight:bold">return</span> (width * height)/2; 
   }
};
 
int main(void)
{
   Rectangle Rect;
   Triangle  Tri;
 
   <span style="color:red;font-weight:bold"> Rect</span>. <span style="color:blue;font-weight:bold">setWidth</span>(5);
    <span style="color:red;font-weight:bold">Rect</span>. <span style="color:blue;font-weight:bold">setHeight(7)</span>;
   <span style="color:green;font-weight:bold"> // Print the area of the object.</span>
    <span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold"> &lt&lt "Total Rectangle area: " &lt&lt Rect.getArea() &lt&lt endl</span>;

   <span style="color:red;font-weight:bold"> Tri</span>. <span style="color:blue;font-weight:bold">setWidth</span>(5);
    <span style="color:red;font-weight:bold">Tri</span>. <span style="color:blue;font-weight:bold">setHeight(7)</span>;
    <span style="color:green;font-weight:bold">// Print the area of the object.</span>
    <span style="color:red;font-weight:bold">cout </span> <span style="color:green;font-weight:bold">&lt&lt "Total Triangle area: " &lt&lt Tri.getArea() &lt&lt endl</span>; 

    <span style="color:red;font-weight:bold">return</span> 0;
}


</pre>
<p class="sansserif" align="center-left">When the above code is compiled and executed, it produces the following result:<br /><br /></p>
<pre class="inset" align="center-left">

 <span style="color:green;font-weight:bold">Total Rectangle area: 35
 Total Triangle area: 17</span>
 
</pre>
<p class="sansserif" align="center-left">You can see how an abstract class defined an interface in terms of getArea() and two other classes implemented same function but with different algorithm to calculate the area specific to the shape.</p>

<div>
<a href="EncapsuleC++.php" target="iframe_content" class="button">PREV</a>
<a href="ExceptionC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
	</body>
<html>