<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="ContentDesign.css">
		<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
	</head>
	<body>
		<h1 align="center">C++ Exception Handling</h1>
		<hr />
	<p class="sansserif" align="center-left">An exception is a problem that arises during the execution of a program. A C++ exception is a response to an exceptional circumstance that arises while a program is running, such as an attempt to divide by zero.
Exceptions provide a way to transfer control from one part of a program to another. C++ exception handling is built upon three keywords: <b>try, catch, and throw.</b></p>
<ul>
	<li><b>throw:</b> A program throws an exception when a problem shows up. This is done using a <b>throw</b> keyword.</li>
	<li><b>catch:</b> A program catches an exception with an exception handler at the place in a program where you want to handle the problem. The <b>catch</b> keyword indicates the catching of an exception.</li>
	<li><b>try:</b> A try block identifies a block of code for which particular exceptions will be activated. It's followed by one or more catch blocks.</li>
</ul>
<p class="sansserif" align="center-left">Assuming a block will raise an exception, a method catches an exception using a combination of the <b>try</b> and <b>catch</b> keywords. A try/catch block is placed around the code that might generate an exception. Code within a try/catch block is referred to as protected code, and the syntax for using try/catch looks like the following:</p>
<pre class="inset" align="center-left">
 <span style="color:blue;font-weight:bold">try</span>
{
    <span style="color:green;font-weight:bold">// protected code</span>
} <span style="color:red;font-weight:bold">catch</span>(  <span style="color:blue;font-weight:bold">ExceptionName</span> e1 )
{
    <span style="color:green;font-weight:bold">// catch block</span>
} <span style="color:red;font-weight:bold">catch</span>( <span style="color:blue;font-weight:bold"> ExceptionName</span> e2 )
{
    <span style="color:green;font-weight:bold">// catch block</span>
} <span style="color:red;font-weight:bold">catch</span>( <span style="color:blue;font-weight:bold"> ExceptionName</span> eN )
{
    <span style="color:green;font-weight:bold">// catch block</span>
}

</pre>
<p class="sansserif" align="center-left">You can list down multiple catch statements to catch different type of exceptions in case your try block raises more than one exception in different situations.</p>
<h2 align="center">Throwing Exceptions:</h2>
<p class="sansserif" align="center-left">Exceptions can be thrown anywhere within a code block using throw statements. The operand of the throw statements determines a type for the exception and can be any expression and the type of the result of the expression determines the type of exception thrown.<br /><br />
Following is an example of throwing an exception when dividing by zero condition occurs:</p>
<pre class="inset" align="center-left">

 <span style="color:blue;font-weight:bold">double division</span>(int a, int b)
{
   <span style="color:red;font-weight:bold"> if</span>( b == 0 )
   {
      <span style="color:blue;font-weight:bold"> throw</span>  <span style="color:green;font-weight:bold">"Division by zero condition!"</span>;
   }
  <span style="color:red;font-weight:bold">  return</span> (a/b);
}

</pre>
<h2 align="center">Catching Exceptions::</h2>
<p class="sansserif" align="center-left">The <b>catch</b> block following the <b>try</b> block catches any exception. You can specify what type of exception you want to catch and this is determined by the exception declaration that appears in parentheses following the keyword catch.</p>
<pre class="inset" align="center-left">

 <span style="color:blue;font-weight:bold">try</span>
{
   <span style="color:green;font-weight:bold"> // protected code</span>
} <span style="color:red;font-weight:bold">catch</span>(  <span style="color:blue;font-weight:bold">ExceptionName</span> e )
{
   <span style="color:green;font-weight:bold">// code to handle ExceptionName exception</span>
}

</pre>
<p class="sansserif" align="center-left">Above code will catch an exception of <b>ExceptionName type.</b> If you want to specify that a catch block should handle any type of exception that is thrown in a try block, you must put an ellipsis, ..., between the parentheses enclosing the exception declaration as follows:</p>
<pre class="inset" align="center-left">

 <span style="color:blue;font-weight:bold">try</span>
{
    <span style="color:green;font-weight:bold">// protected code</span>
} <span style="color:red;font-weight:bold">catch</span>(...)
{
   <span style="color:green;font-weight:bold">// code to handle any exception</span>
}

</pre>
<p class="sansserif" align="center-left"><strong>The following is an example, which throws a division by zero exception and we catch it in catch block.</strong></p>
<pre class="inset" align="center-left">

 <span style="color:blue;font-weight:bold">#include</span>  <span style="color:red;font-weight:bold">&ltiostream&gt</span>
using namespace std;

 <span style="color:blue;font-weight:bold">double division</span>(int a, int b)
{
    <span style="color:blue;font-weight:bold">if</span>( b == 0 )
   {
       <span style="color:blue;font-weight:bold">throw</span>  <span style="color:green;font-weight:bold">"Division by zero condition!"</span>;
   }
    <span style="color:red;font-weight:bold">return</span> (a/b);
}

int  <span style="color:red;font-weight:bold">main</span> ()
{
   int x = 50;
   int y = 0;
   double z = 0;
 
   <span style="color:blue;font-weight:bold"> try</span> {
     z =  <span style="color:blue;font-weight:bold">division</span>(x, y);
     <span style="color:red;font-weight:bold"> cout</span>  <span style="color:green;font-weight:bold">&lt&lt z &lt&lt endl</span>;
   } <span style="color:blue;font-weight:bold">catch</span> (const char* msg) {
     <span style="color:red;font-weight:bold"> cout</span>  <span style="color:green;font-weight:bold">&lt&lt msg &lt&lt endl;</span>
   }

    <span style="color:red;font-weight:bold">return</span>  <span style="color:green;font-weight:bold">0</span>;
}

</pre>
<p class="sansserif" align="center-left">Because we are raising an exception of type const char*, so while catching this exception, we have to use const char* in catch block. If we compile and run above code, this would produce the following result:</p>
<pre class="inset" align="center-left">

 <span style="color:green;font-weight:bold">Division by zero condition!</span>

</pre>
<h2 align="center">C++ Standard Exceptions:</h2>
<p class="sansserif" align="center-left">C++ provides a list of standard exceptions defined in <strong>&ltexception&gt</strong> which we can use in our programs. These are arranged in a parent-child class hierarchy shown below:</p>
<table border="1" align="center" width="500" height="400">
		<tr>
			<th>Exception</th>
			<th>Description</th>
		</tr>
		<tr>
			<td width="200">std::exception	</td>
			<td>An exception and parent class of all the standard C++ exceptions.</td>
		</tr>
		<tr>
			<td>std::bad_alloc	</td>
			<td>This can be thrown by new.</td>
		</tr>
		<tr>
			<td>std::bad_cast	</td>
			<td>This can be thrown by dynamic_cast.</td>
		</tr>
		<tr>
			<td>std::bad_exception</td>
			<td>This is useful device to handle unexpected exceptions in a C++ program</td>
		</tr>
		<tr>
			<td>std::bad_typeid	</td>
			<td>This can be thrown by typeid.</td>
		</tr>
		<tr>
			<td>std::logic_error	</td>
			<td>An exception that theoretically can be detected by reading the code.</td>
		</tr>
		<tr>
			<td>std::domain_error</td>
			<td>This is an exception thrown when a mathematically invalid domain is used</td>
		</tr>
		<----
		<tr>
			<td>std::invalid_argument</td>
			<td>This is thrown due to invalid arguments.</td>
		</tr>
		<tr>
			<td>std::length_error</td>
			<td>This is thrown when a too big std::string is created</td>
		</tr>
		<tr>
			<td>std::out_of_range</td>
			<td>This can be thrown by the at method from for example a std::vector and std::bitset<>::operator[]().</td>
		</tr>
		<tr>
			<td>std::runtime_error</td>
			<td>An exception that theoretically can not be detected by reading the code.</td>
		</tr>
		<tr>
			<td>std::overflow_error	</td>
			<td>This is thrown if a mathematical overflow occurs.</td>
		</tr>
		<tr>
			<td>std::range_error</td>
			<td>This is occured when you try to store a value which is out of range..</td>
		</tr>
		<tr>
			<td>std::underflow_error</td>
			<td>This is thrown if a mathematical underflow occurs.</td>
		</tr>
	</table>
	<h2 align="center">Define New Exceptions:</h2>
	<p class="sansserif" align="center-left">You can define your own exceptions by inheriting and overriding <b>exception class</b> functionality. Following is the example, which shows how you can use std::exception class to implement your own exception in standard way:</p>
	<pre class="inset" align="center-left">
	
 <span style="color:blue;font-weight:bold">#include</span>  <span style="color:red;font-weight:bold">&ltiostream&gt</span>
 <span style="color:blue;font-weight:bold">#include</span>  <span style="color:red;font-weight:bold">&ltexception&gt</span>
using namespace std;

 <span style="color:red;font-weight:bold">struct</span>  <span style="color:blue;font-weight:bold">MyException</span> :  <span style="color:green;font-weight:bold">public exception</span>
{
  const char * what () const throw ()
  {
     <span style="color:red;font-weight:bold">return</span>  <span style="color:green;font-weight:bold">"C++ Exception"</span>;
  }
};
 
 <span style="color:blue;font-weight:bold">int</span>  <span style="color:red;font-weight:bold">main</span>()
{
   <span style="color:blue;font-weight:bold">try</span>
  {
     <span style="color:red;font-weight:bold">throw</span>  <span style="color:blue;font-weight:bold">MyException</span>();
  }
   <span style="color:red;font-weight:bold">catch</span>( <span style="color:blue;font-weight:bold">MyException</span>& e)
  {
     <span style="color:red;font-weight:bold">std::cout</span>  <span style="color:green;font-weight:bold">&lt&lt "MyException caught" &lt&lt std::endl</span>;
     <span style="color:red;font-weight:bold">std::cout</span>  <span style="color:green;font-weight:bold">&lt&lt e.what() &lt&lt std::endl</span>;
  }
   <span style="color:blue;font-weight:bold">catch</span>( <span style="color:red;font-weight:bold">std::exception& e</span>)
  {
     <span style="color:green;font-weight:bold">//Other errors</span>
  }
}

</pre>
<p class="sansserif" align="center-left">This would produce the following result:</p>
<pre class="inset" align="center-left">

 MyException caught
 C++ Exception

</pre>
<p class="sansserif" align="center-left">Here, what() is a public method provided by exception class and it has been overridden by all the child exception classes. This returns the cause of an exception.
</p>
<div>
<a href="InterfacesC++.php" target="iframe_content" class="button">PREV</a>
<a href="FundamentalsC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
	</body>
</html>