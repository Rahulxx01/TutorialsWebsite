<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="ContentDesign.css">
		<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
	</head>
	<body>
		<h1 align="center">Polymorphism in C++</h1>
		<hr />
		<p class="sansserif" align="center-left">The word polymorphism means having many forms. Typically, polymorphism occurs when there is a hierarchy of classes and they are related by inheritance.
												C++ polymorphism means that a call to a member function will cause a different function to be executed depending on the type of object that invokes the function.<br /><br />Consider the following example where a base class has been derived by other two classes:</p>
												
<pre class="inset" align="center-left"> <span style="color:red;font-weight:bold">include</span>  <span style="color:blue;font-weight:bold">&ltiostream&gt</span>
using namespace std;
 
 <span style="color:red;font-weight:bold">class</span>  <span style="color:blue;font-weight:bold">Shape</span> {
    <span style="color:blue;font-weight:bold">protected:</span>
      int width, height;
   <span style="color:blue;font-weight:bold"> public:</span>
       <span style="color:red;font-weight:bold">Shape</span>( int a=0, int b=0)
      {
         width = a;
         height = b;
      }
      int area()
      {
          <span style="color:red;font-weight:bold">cout</span>  <span style="color:green;font-weight:bold">&lt&lt "Parent class area :" &lt&ltendl</span>;
          <span style="color:red;font-weight:bold">return</span> 0;
      }
};
 <span style="color:blue;font-weight:bold">class</span>  <span style="color:red;font-weight:bold">Rectangle</span>:  <span style="color:blue;font-weight:bold">public</span>  <span style="color:red;font-weight:bold">Shape</span>{
    <span style="color:blue;font-weight:bold">public:</span>
      <span style="color:red;font-weight:bold"> Rectangle</span>( int a=0, int b=0):Shape(a, b) { }
      int area ()
      { 
          <span style="color:red;font-weight:bold">cout</span>  <span style="color:green;font-weight:bold">&lt&lt "Rectangle class area :" &lt&ltendl</span>;
          <span style="color:blue;font-weight:bold">return</span> (width * height); 
      }
};
 <span style="color:blue;font-weight:bold">class</span>  <span style="color:red;font-weight:bold">Triangle</span>:  <span style="color:blue;font-weight:bold">public</span>  <span style="color:red;font-weight:bold">Shape</span>{
    <span style="color:blue;font-weight:bold">public:</span>
       <span style="color:red;font-weight:bold">Triangle</span>( int a=0, int b=0):Shape(a, b) { }
      int area ()
      { 
          <span style="color:red;font-weight:bold">cout</span>  <span style="color:green;font-weight:bold">&lt&lt "Triangle class area :" &lt&ltendl</span>;
          <span style="color:blue;font-weight:bold">return</span> (width * height / 2); 
      }
};
 <span style="color:green;font-weight:bold">// Main function for the program</span>
int main( )
{
   Shape *shape;
   Rectangle rec(10,7);
   Triangle  tri(10,5);

   <span style="color:green;font-weight:bold"> // store the address of Rectangle</span>
   shape = &rec;
    <span style="color:green;font-weight:bold">// call rectangle area.</span>
   shape-&gtarea();

    <span style="color:green;font-weight:bold">// store the address of Triangle</span>
   shape = &tri;
    <span style="color:green;font-weight:bold">// call triangle area.</span>
   shape-&gtarea();
   
    <span style="color:blue;font-weight:bold">return</span> 0;
}
</pre>		
<p class="sansserif" align="center-left">When the above code is compiled and executed, it produces the following result:<br /></p>
<pre class="inset" align="center-left">		
  <span style="color:green;font-weight:bold">Parent class area
 Parent class area</span>
		</pre>
		<p class="sansserif" align="center-left">The reason for the incorrect output is that the call of the function area() is being set once by the compiler as the version defined in the base class. This is called static resolution of the function call, or static linkage - the function call is fixed before the program is executed. This is also sometimes called early binding because the area() function is set during the compilation of the program.<br />But now, let's make a slight modification in our program and precede the declaration of area() in the Shape class with the keyword virtual so that it looks like this:<br /></p>
		<pre class="inset" align="center-left"> <span style="color:blue;font-weight:bold">class</span>  <span style="color:red;font-weight:bold">Shape</span> {
    <span style="color:blue;font-weight:bold">protected:</span>
      int width, height;
    <span style="color:blue;font-weight:bold">public:</span>
       <span style="color:blue;font-weight:bold">Shape</span>( int a=0, int b=0)
      {
         width = a;
         height = b;
      }
      virtual int area()
      {
          <span style="color:red;font-weight:bold">cout</span>  <span style="color:green;font-weight:bold">&lt&lt "Parent class area :" &lt&ltendl</span>;
          <span style="color:red;font-weight:bold">return</span> 0;
      }
};</pre>
<p class="sansserif" align="center-left">After this slight modification, when the previous example code is compiled and executed, it produces the following result:<br /></p>
<pre class="inset" align="center-left">

  <span style="color:green;font-weight:bold">Rectangle class area
 Triangle class area</span>
 </pre>
<p class="sansserif" align="center-left">This time, the compiler looks at the contents of the pointer instead of it's type. Hence, since addresses of objects of tri and rec classes are stored in *shape the respective area() function is called.<br />
As you can see, each of the child classes has a separate implementation for the function area(). This is how polymorphism is generally used. You have different classes with a function of the same name, and even the same parameters, but with different implementations.</p>
<h2 align="center">Virtual Function:</h2>
<p class="sansserif" align="center-left">A <b>virtual</b> function is a function in a base class that is declared using the keyword <b>virtual</b>. Defining in a base class a virtual function, with another version in a derived class, signals to the compiler that we don't want static linkage for this function.<br /><br />
What we do want is the selection of the function to be called at any given point in the program to be based on the kind of object for which it is called. This sort of operation is referred to as <b>dynamic linkage</b>, or <b>late binding.</b></p>
<h2 align="center">Pure Virtual Functions:</h2>
<p class="sansserif" align="center-left">It's possible that you'd want to include a virtual function in a base class so that it may be redefined in a derived class to suit the objects of that class, but that there is no meaningful definition you could give for the function in the base class.<br /><br />We can change the virtual function area() in the base class to the following:</p>
<pre class="inset" align="center-left"> <span style="color:blue;font-weight:bold">class</span>  <span style="color:red;font-weight:bold">Shape</span> {
   <span style="color:blue;font-weight:bold"> protected:</span>
      int width, height;
    <span style="color:blue;font-weight:bold">public:</span>
      Shape( int a=0, int b=0)
      {
         width = a;
         height = b;
      }
       <span style="color:green;font-weight:bold">// pure virtual function</span>
      virtual int area() = 0;
};</pre>
<p class="sansserif" align="center-left">The = 0 tells the compiler that the function has no body and above virtual function will be called <b>pure virtual function.</b></p>
	<div>
<a href="OverloadingC++.php" target="iframe_content" class="button">PREV</a>
<a href="AbstractionC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
	</body>
</html>