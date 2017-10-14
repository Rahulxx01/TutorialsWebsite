<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" type="text/css" href="ContentDesign.css">
	<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
</head>
<body>
	<h1 align="center">Data Encapsulation in C++</h1>
	<hr />
	<p class="sansserif" align="center-left">All C++ programs are composed of the following two fundamental elements:</p>
	<ul>
		<li><b>Program statements (code):</b> This is the part of a program that performs actions and they are called functions.</li>
		<li><b>Program data:</b> The data is the information of the program which affected by the program functions.</li>
	</ul>
	<p class="sansserif" align="center-left">Encapsulation is an Object Oriented Programming concept that binds together the data and functions that manipulate the data, and that keeps both safe from outside interference and misuse. Data encapsulation led to the important OOP concept of <b>data hiding.</b><br /><br /><b>Data encapsulation</b> is a mechanism of bundling the data, and the functions that use them and <b>data abstraction</b> is a mechanism of exposing only the interfaces and hiding the implementation details from the user.`<br /><br />C++ supports the properties of encapsulation and data hiding through the creation of user-defined types, called classes. We already have studied that a class can contain <b>private</b>, <b>protected</b> and <b>public</b> members.<br /><br />By default, all items defined in a class are private. For example:</p>
	<pre class="inset" align="center-left">
	 <span style="color:red;font-weight:bold">class</span>  <span style="color:blue;font-weight:bold">Box</span>
{
    <span style="color:red;font-weight:bold">public:</span>
      double  <span style="color:blue;font-weight:bold">getVolume</span>(void)
      {
          <span style="color:red;font-weight:bold">return</span> length * breadth * height;
      }
    <span style="color:red;font-weight:bold">private:</span>
      double length;       <span style="color:green;font-weight:bold">// Length of a box</span>
      double breadth;      <span style="color:green;font-weight:bold">// Breadth of a box</span>
      double height;       <span style="color:green;font-weight:bold">// Height of a box</span>
};
</pre>
<p class="sansserif" align="center-left">The variables length, breadth, and height are <b>private</b>. This means that they can be accessed only by other members of the Box class, and not by any other part of your program. This is one way encapsulation is achieved.<br /><br />
To make parts of a class <b>public</b> (i.e., accessible to other parts of your program), you must declare them after the <b>public</b> keyword. All variables or functions defined after the public specifier are accessible by all other functions in your program.<br /><br />
Making one class a friend of another exposes the implementation details and reduces encapsulation. The ideal is to keep as many of the details of each class hidden from all other classes as possible.</p>
<h2 align="center">Data Encapsulation Example</h2>	
<p class="sansserif" align="center-left">Any C++ program where you implement a class with public and private members is an example of data encapsulation and data abstraction. Consider the following example:</p>
<pre class="inset" align="center-left">

 <span style="color:red;font-weight:bold">#include</span>  <span style="color:blue;font-weight:bold">&ltiostream&gt</span>
using namespace std;

 <span style="color:red;font-weight:bold">class</span>  <span style="color:blue;font-weight:bold">Adder</span>{
    <span style="color:red;font-weight:bold">public:</span>
       <span style="color:green;font-weight:bold">// constructor</span>
       <span style="color:red;font-weight:bold">Adder</span>(int i = 0)
      {
        total = i;
      }
       <span style="color:green;font-weight:bold">// interface to outside world</span>
       <span style="color:red;font-weight:bold">void</span>  <span style="color:blue;font-weight:bold">addNum</span>(int number)
      {
          total += number;
      }
       <span style="color:green;font-weight:bold">// interface to outside world</span>
      int  <span style="color:blue;font-weight:bold">getTotal</span>()
      {
           <span style="color:red;font-weight:bold">return</span> total;
      };
    <span style="color:red;font-weight:bold">private:</span>
       <span style="color:green;font-weight:bold">// hidden data from outside world</span>
      int total;
};
 <span style="color:red;font-weight:bold">int</span>  <span style="color:blue;font-weight:bold">main</span>( )
{
   Adder a;
   
    <span style="color:red;font-weight:bold">a</span>. <span style="color:blue;font-weight:bold">addNum</span>(10);
    <span style="color:blue;font-weight:bold">a</span>. <span style="color:blue;font-weight:bold">addNum</span>(20);
    <span style="color:blue;font-weight:bold">a</span>. <span style="color:blue;font-weight:bold">addNum</span>(30);

    <span style="color:red;font-weight:bold">cout</span>  <span style="color:green;font-weight:bold">&lt&lt "Total " &lt&lt a.getTotal() &lt&ltendl</span>;
    <span style="color:red;font-weight:bold">return</span> 0;
}

</pre>
<p class="sansserif" align="center-left">When the above code is compiled and executed, it produces the following result:</p>
<pre class="inset" align="center-left">

 <span style="color:green;font-weight:bold">Total</span>  <span style="color:red;font-weight:bold">60</span>

</pre>
<p class="sansserif" align="center-left">Above class adds numbers together, and returns the sum. The public members <b>addNum</b> and <b>getTotal</b> are the interfaces to the outside world and a user needs to know them to use the class. The private member total is something that is hidden from the outside world, but is needed for the class to operate properly</p>
<div>
<a href="AbstractionC++.php" target="iframe_content" class="button">PREV</a>
<a href="InterfacesC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>

</html>