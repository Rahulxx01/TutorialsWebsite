<doctype! html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" type="text/css" href="ContentDesign.css">
	<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
<head>
<body>
	<h1 align="center">Data Abstraction in C++</h1>
	<hr />
	<p class="sansserif" align="center-left">Data abstraction refers to, providing only essential information to the outside world and hiding their background details, i.e., to represent the needed information in program without presenting the details.
Data abstraction is a programming (and design) technique that relies on the separation of interface and implementation.<br />
Let's take one real life example of a TV, which you can turn on and off, change the channel, adjust the volume, and add external components such as speakers, VCRs, and DVD players, BUT you do not know its internal details, that is, you do not know how it receives signals over the air or through a cable, how it translates them, and finally displays them on the screen.<br />
Thus, we can say a television clearly separates its internal implementation from its external interface and you can play with its interfaces like the power button, channel changer, and volume control without having zero knowledge of its internals.
Now, if we talk in terms of C++ Programming, C++ classes provides great level of data abstraction. They provide sufficient public methods to the outside world to play with the functionality of the object and to manipulate object data, i.e., state without actually knowing how class has been implemented internally.<br />
For example, your program can make a call to the sort() function without knowing what algorithm the function actually uses to sort the given values. In fact, the underlying implementation of the sorting functionality could change between releases of the library, and as long as the interface stays the same, your function call will still work.<br /><br />In C++, we use classes to define our own abstract data types (ADT). You can use the cout object of class ostream to stream data to standard output like this:</p>
<pre class="inset" align="center-left"> <span style="color:red;font-weight:bold">#include</span>  <span style="color:blue;font-weight:bold">&ltiostream&gt</span>
using namespace std;

int main( )
{
    <span style="color:red;font-weight:bold">cout</span>  <span style="color:green;font-weight:bold">&lt&lt "Hello C++" &lt&ltendl</span>;
    <span style="color:red;font-weight:bold">return</span> 0;
}</pre>
<p class="sansserif" align="center-left">Here, you don't need to understand how cout displays the text on the user's screen. You need to only know the public interface and the underlying implementation of cout is free to change.</p>
<h2 align="center">Access Labels Enforce Abstraction:</h2>
<p class="sansserif" align="center-left">In C++, we use access labels to define the abstract interface to the class. A class may contain zero or more access labels:</p>
<ul>
	<li>Members defined with a public label are accessible to all parts of the program. The data-abstraction view of a type is defined by its public members.</li>
	<li>Members defined with a private label are not accessible to code that uses the class. The private sections hide the implementation from code that uses the type.</li>
</ul>
<p class="sansserif" align="center-left">There are no restrictions on how often an access label may appear. Each access label specifies the access level of the succeeding member definitions. The specified access level remains in effect until the next access label is encountered or the closing right brace of the class body is seen.</p>
<h2 align="center">Benefits of Data Abstraction:</h2>
<p class="sansserif" align="center-left">Data abstraction provides two important advantages:</p>
<ul>
 <li>Class internals are protected from inadvertent user-level errors, which might corrupt the state of the object.</li>
 <li>The class implementation may evolve over time in response to changing requirements or bug reports without requiring change in user-level code.</li>
</ul>
<p class="sansserif" align="center-left">By defining data members only in the private section of the class, the class author is free to make changes in the data. If the implementation changes, only the class code needs to be examined to see what affect the change may have. If data are public, then any function that directly accesses the data members of the old representation might be broken.</p>
<h2 align="center">Data Abstraction Example:</h2>
<p class="sansserif" align="center-left">Any C++ program where you implement a class with public and private members is an example of data abstraction. Consider the following example</p>
<pre class="inset" align="center-left"> <span style="color:red;font-weight:bold">#include</span>  <span style="color:blue;font-weight:bold">&ltiostream&gt</span>
using namespace std;

 <span style="color:red;font-weight:bold">class</span>  <span style="color:blue;font-weight:bold">Adder</span>{
    <span style="color:red;font-weight:bold">public:</span>
       <span style="color:green;font-weight:bold">// constructor</span>
       <span style="color:red;font-weight:bold">Adder</span>(int i = 0)
      {
        total = i;
      }
      <span style="color:green;font-weight:bold"> // interface to outside world</span>
      void  <span style="color:blue;font-weight:bold">addNum</span>(int number)
      {
          total += number;
      }
       <span style="color:green;font-weight:bold">// interface to outside world</span>
      int  <span style="color:blue;font-weight:bold">getTotal</span>()
      {
          <span style="color:red;font-weight:bold"> return</span> total;
      };
    <span style="color:red;font-weight:bold">private:</span>
       <span style="color:green;font-weight:bold">// hidden data from outside world</span>
      int total;
};
int main( )
{
   Adder a;
   
    <span style="color:red;font-weight:bold">a</span>.<span style="color:blue;font-weight:bold">addNum</span>(10);
    <span style="color:red;font-weight:bold">a</span>.<span style="color:blue;font-weight:bold">addNum</span>(20);
    <span style="color:red;font-weight:bold">a</span>.<span style="color:blue;font-weight:bold">addNum</span>(30);

    <span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold"> &lt&lt "Total " &lt&lt a.getTotal() &lt&ltendl</span>;
    <span style="color:red;font-weight:bold">return</span> 0;
}

</pre>
<p class="sansserif" align="center-left">When the above code is compiled and executed, it produces the following result:<br /></p>
<pre class="inset" align="center-left">

 <span style="color:green;font-weight:bold">Total 60</span>

</pre>
<p class="sansserif" align="center-left">Above class adds numbers together, and returns the sum. The public members addNum and getTotal are the interfaces to the outside world and a user needs to know them to use the class. The private member total is something that the user doesn't need to know about, but is needed for the class to operate properly.</p>
<h2 align="center">Designing Strategy</h2>
<p class="sansserif" align="center-left">Abstraction separates code into interface and implementation. So while designing your component, you must keep interface independent of the implementation so that if you change underlying implementation then interface would remain intact.<br />

In this case whatever programs are using these interfaces, they would not be impacted and would just need a recompilation with the latest implementation.
</p>
<div>
<a href="PolymorphismC++.php" target="iframe_content" class="button">PREV</a>
<a href="EncapsuleC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>