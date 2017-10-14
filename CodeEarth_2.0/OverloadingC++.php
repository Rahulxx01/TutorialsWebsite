<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="ContentDesign.css">
		<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
	</head>
	<body>
		<h1 align="center">Overloading</h1>
		<hr />
		<p class="sansserif"align="center-left">C++ allows you to specify more than one definition for a function name or an operator in the same scope, which is called function overloading and operator overloading respectively.
												An overloaded declaration is a declaration that had been declared with the same name as a previously declared declaration in the same scope, except that both declarations have different arguments and obviously different definition (implementation).
												When you call an overloaded function or operator, the compiler determines the most appropriate definition to use by comparing the argument types you used to call the function or operator with the parameter types specified in the definitions. The process of selecting the most appropriate overloaded function or operator is called overload resolution.</p>
		<h2 align="center">Function overloading in C++:</h2>
		<p class="sansserif"align="center-left">You can have multiple definitions for the same function name in the same scope. The definition of the function must differ from each other by the types and/or the number of arguments in the argument list. You can not overload function declarations that differ only by return type.<br /></p>
		<p class="sansserif"align="center-left">Following is the example where same function print() is being used to print different data types:</p>
	
<pre class="inset" align="center-left"><span style="color:blue;font-weight:bold">#include</span> <span style="color:red;font-weight:bold">@ltiostream@gt</span>
using namespace std;
 
<span style="color:blue;font-weight:bold">class</span> <span style="color:red;font-weight:bold">printData</span> 
{
   <span style="color:blue;font-weight:bold">public:</span>
      void print(int i) {
        <span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold">@lt@lt "Printing int: " &lt&lt i &lt&lt endl</span>;
      }

      void print(double  f) {
        <span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold">@lt@lt "Printing float: " &lt&lt f &lt&lt endl</span>;
      }

      void print(char* c) {
        <span style="color:red;font-weight:bold">cout</span> <span style="color:green;font-weight:bold">@lt@lt "Printing character: " &lt&lt c &lt&lt endl</span>;
      }
};

int main(void)
{
   printData pd;
 
   <span style="color:green;font-weight:bold">// Call print to print integer</span>
   <span style="color:blue;font-weight:bold">pd</span>.<span style="color:red;font-weight:bold">print(5)</span>;
   <span style="color:green;font-weight:bold">// Call print to print float</span>
   <span style="color:blue;font-weight:bold">pd</span>.<span style="color:red;font-weight:bold">print(500.263)</span>;
   <span style="color:green;font-weight:bold">// Call print to print character</span>
   <span style="color:blue;font-weight:bold">pd</span>.<span style="color:red;font-weight:bold">print("Hello C++")</span>;
 
   <span style="color:blue;font-weight:bold">return</span> 0;
}

</pre>
<p class="sansserif"align="center-left">When the above code is compiled and executed, it produces the following result:</p>

<pre class="inset "align="center-left"> 
  <span style="color:green;font-weight:bold"> Printing int: 5
   Printing float: 500.263
   Printing character: Hello C++</span>
   </pre>
	</body>
<div>
<a href="InheritanceC++.php" target="iframe_content" class="button">PREV</a>
<a href="PolymorphismC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>	
</html>