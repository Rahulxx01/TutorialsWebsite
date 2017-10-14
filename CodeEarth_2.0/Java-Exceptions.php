<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Java - Exceptions</h1>
<hr> 

<p>An exception (or exceptional event) is a problem that arises during the execution of a program. 
When an Exception occurs the normal flow of the program is disrupted and the program/Application terminates 
abnormally, which is not recommended, therefore these exceptions are to be handled.</p>

<p>An exception can occur for many different reasons, below given are some scenarios where exception occurs.</p>

<ul>
	<li>A user has entered invalid data.</li>

	<li>A file that needs to be opened cannot be found.</li>

	<li>A network connection has been lost in the middle of communications or the JVM has run out of memory.</li>
</ul>

<p>Some of these exceptions are caused by user error, others by programmer error, and others by physical resources that have failed in some manner.</p>

<p>Based on these we have three categories of Exceptions you need to understand them to know how exception handling works in Java,</p>

<ul>
	<li>Checked exceptions: A checked exception is an exception that occurs at the compile time, these are also called as compile time exceptions. 
	These exceptions cannot simply be ignored at the time of compilation, the Programmer should take care of (handle) these exceptions.
	<br>
	For example, if you use FileReader class in your program to read data from a file, if the file specified in its constructor
	doesn't exist, then an FileNotFoundException occurs, and compiler prompts the programmer to handle the exception.</li>
	
</ul>	

<pre class="inset">
<span class="classn">import</span> java.io.<span class="classname">File</span>;
<span class="classn">import</span> java.io.<span class="classname">FileReader</span>;

<span class="classn">public class</span> <span class="classname">FilenotFound_Demo</span> {

   <span class="classn">public static void</span> main(String</span> args[]){		
      <span class="classname">File</span> file=<span class="classn">new</span> <span class="classname">File</span>(<span class="print">"E://file.txt"</span>);
      <span class="classname">FileReader</span> fr = <span class="classn">new</span> <span class="classname">FileReader</span>(file); 
   }
   
} 
</pre>



<p>If you try to compile the above program you will get exceptions as shown below.</p>


<pre class="inset">
C:\>javac <span class="classname">FilenotFound_Demo</span>.java
<span class="classname">FilenotFound_Demo</span>.java:8: error: unreported exception <span class="classname">FileNotFoundException</span>; must be caught or declared to be thrown
      FileReader fr = <span class="classn">new</span> FileReader(file);
                      ^
1 error
</pre>




<p>Note: Since the methods read() and close() of FileReader class throws IOException, you can observe that compiler 
notifies to handle IOException, along with FileNotFoundException.</p>

<ul>
	<li>Unchecked exceptions: An Unchecked exception is an exception that occurs at the time of execution, these are also called as Runtime Exceptions,
	these include programming bugs, such as logic errors or improper use of an API. runtime exceptions are ignored at the time of compilation.
	<br>
	For example, if you have declared an array of size 5 in your program, and trying to call the 6th element of the array 
	then an ArrayIndexOutOfBoundsExceptionexception occurs.</li>
</ul>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">Unchecked_Demo</span> {
   
   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]){
      <span class="classn">int</span> num[]={<span class="print">1,2,3,4</span>};
      <span class="classname">System</span>.<span class="classn">out</span>.println(num[5]);
   }

}
</pre>



<p>If you compile and execute the above program you will get exception as shown below.<p/>


<pre class="inset">
<span class="classname">Exception</span> in thread <span class="print">"main"</span> java.lang.<span class="classname">ArrayIndexOutOfBoundsException</span>: 5
	at <span class="classname">Exceptions.Unchecked_Demo</span>.main(<span class="classn">Unchecked_Demo</span>.java:8)
</pre>



<ul>	
	<li>Errors: These are not exceptions at all, but problems that arise beyond the control of the user or the programmer. 
	Errors are typically ignored in your code because you can rarely do anything about an error. For example, 
	if a stack overflow occurs, an error will arise. They are also ignored at the time of compilation.</li>
</ul>

<h2>Exception Hierarchy:</h2>
<p>All exception classes are subtypes of the java.lang.Exception class. The exception class is a subclass 
of the Throwable class. Other than the exception class there is another subclass called Error which is derived from the Throwable class.</p>

<p>Errors are abnormal conditions that happen in case of severe failures, these are not handled by the java programs. Errors are 
generated to indicate errors generated by the runtime environment. Example : JVM is out of Memory. Normally programs cannot recover from errors.</p>

<p>The Exception class has two main subclasses: IOException class and RuntimeException Class.</p>

<img src="ExceptionImg.png"></img>

<p>Here is a list of most common checked and unchecked Java's Built-in Exceptions.</p>

<h2>Exceptions Methods:</h2>
<p>Following is the list of important medthods available in the Throwable class.</p>

<table>

  <tr>
    <th>SR.NO</th>
    <th>Methods with Description</th>
  </tr>
  <tr>
    <td>1</td>
    <td>
		<p><b>public String getMessage()</b></p>
		<p>Returns a detailed message about the exception that has occurred. This message is initialized in the Throwable constructor.</p>
		
	</td>
  </tr>
  <tr>
    <td>2</td>
    <td>
		<p><b>public Throwable getCause()</b></p>
		<p>Returns the cause of the exception as represented by a Throwable object.</p>

		
	</td>
  </tr>
  <tr>
    <td>3</td>
    <td>
		<p><b>public String toString()</b></p>
		<p>Returns the name of the class concatenated with the result of getMessage()</p>

		
	</td>
  </tr>
  <tr>
    <td>4</td>
    <td>
		<p><b>public void printStackTrace()</b></p>
		<p>Prints the result of toString() along with the stack trace to System.err, the error output stream.</p>

		
	</td>
  </tr>
  <tr>
    <td>5</td>
    <td>
		<p><b>public StackTraceElement [] getStackTrace()</b></p>
		<p>Returns an array containing each element on the stack trace. 
		The element at index 0 represents the top of the call stack, 
		and the last element in the array represents the method at the bottom of the call stack.</p>

		
	</td>
  </tr>
  <tr>
    <td>6</td>
    <td>
		<p><b>public Throwable fillInStackTrace()</b></p>
		<p>Fills the stack trace of this Throwable object with the current stack trace, 
		adding to any previous information in the stack trace.</p>

		
	</td>
  </tr>

</table>

<h2>Catching Exceptions:</h2>
<p>A method catches an exception using a combination of the try and catch keywords. A try/catch block is placed around
 the code that might generate an exception. Code within a try/catch block is referred to as protected code, 
 and the syntax for using try/catch looks like the following:</p>


<pre class="inset">
<span class="classn">try</span>
{
   <span class="comment">//Protected code</span>
}<span class="classn">catch</span>(ExceptionName e1)
{
   <span class="comment">//Catch block</span>
}
</pre>




<p>The code which is prone to exceptions is placed in the try block, when an exception occurs, that exception occurred is 
handled by catch block associated with it. Every try block should be immediately followed either by a catch block or finally block.</p>

<p>A catch statement involves declaring the type of exception you are trying to catch. If an exception occurs in protected code, 
the catch block (or blocks) that follows the try is checked. If the type of exception that occurred is listed in a catch block, 
the exception is passed to the catch block much as an argument is passed into a method parameter.</p>

<h2>Example:</h2>
<p>The following is an array is declared with 2 elements. Then the code tries to access the 3rd element of the array which throws an exception.</p>


<pre class="inset">
<span class="comment">// File Name : ExcepTest.java</span>
<span class="classn">import</span> java.io.*;
<span class="classn">public class</span> ExcepTest{

   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]){
      <span class="classn">try</span>{
         <span class="classn">int</span> a[] = new int[2];
         <span class="classname">System</span>.out.println(<span class="print">"Access element three :"</span> + a[3]);
      }<span class="classn">catch</span>(<span class="classname">ArrayIndexOutOfBoundsException</span> e){
         <span class="classname">System</span>.out.println(<span class="print">"Exception thrown  :"</span> + e);
      }
      <span class="classname">System</span>.out.println(<span class="print">"Out of the block"</span>);
   }
}
</pre>



<p>This would produce the following result:</p>


<pre class="inset">
<span class="classname">Exception</span> thrown  :java.lang.<span class="classname">ArrayIndexOutOfBoundsException</span>: 3
<span class="classname">Out</span> of the block
</pre>



<h2>Multiple catch Blocks:</h2>
<p>A try block can be followed by multiple catch blocks. The syntax for multiple catch blocks looks like the following:</p>


<pre class="inset">
<span class="classn">try</span>
{
   <span class="comment">//Protected code</span>
}<span class="classn">catch</span>(<span class="classname">ExceptionType1</span> e1)
{
   <span class="comment">//Catch block</span>
}<span class="classn">catch</span>(<span class="classname">ExceptionType2</span> e2)
{
   <span class="comment">//Catch block</span>
}<span class="classn">catch</span>(<span class="classname">ExceptionType3</span> e3)
{
   <span class="comment">//Catch block</span>
}
</pre>



<p>The previous statements demonstrate three catch blocks, but you can have any number of them after a single try. 
If an exception occurs in the protected code, the exception is thrown to the first catch block in the list.
 If the data type of the exception thrown matches ExceptionType1, it gets caught there. If not, the exception 
 passes down to the second catch statement. This continues until the exception either is caught or falls through 
 all catches, in which case the current method stops execution and the exception is thrown down to the previous method on the call stack.</p>

<h2>Example:</h2>
<p>Here is code segment showing how to use multiple try/catch statements.</p>


<pre class="inset">
<span class="classn">try</span>
{
   file = <span class="classn">new</span> <span class="classname">FileInputStream</span>(fileName);
   x = (<span class="classn">byte</span>) file.read();
}<span class="classn">catch</span>(<span class="classname">IOException</span> i)
{
   i.printStackTrace();
   <span class="classn">return</span> -1;
}<span class="classn">catch</span>(<span class="classname">FileNotFoundException</span> f) <span class="comment">//Not valid!</span>
{
   f.printStackTrace();
   <span class="classn">return</span> -1;
}
</pre>



<h2>Catching multiple type of exceptions</h2>
<p>Since Java 7 you can handle more than one exceptions using a single catch block, this feature simplifies the code. Below given is the syntax of writing</p>


<pre class="inset">
<span class="classn">catch</span> (<span class="classname">IOException|FileNotFoundException</span> ex) {
   logger.log(ex);
   <span class="classn">throw</span> ex;
</pre>


   
<h2>The throws/throw Keywords:</h2>
<p>If a method does not handle a checked exception, the method must declare it using the throws keyword.
 The throws keyword appears at the end of a method's signature.</p>

<p>You can throw an exception, either a newly instantiated one or an exception that you just caught, by using the throw keyword.</p>

<p>Try to understand the difference between throws and throw keywords, throws is used to postpone the handling of
 a checked exception and throw is used to invoke an exception explicitly.</p>
 
<p>The following method declares that it throws a RemoteException:</p>


<pre class="inset">
<span class="classn">import</span> java.io.*;
<span class="classn">public class</span> className
{
   <span class="classn">public void</span> deposit(<span class="classn">double</span> amount) <span class="classn">throws</span> RemoteException
   {
      <span class="comment">// Method implementation</span>
      <span class="classn">throw</span> new RemoteException();
   }
   <span class="comment">//Remainder of class definition</span>
}
</pre>



<p>A method can declare that it throws more than one exception, in which case the exceptions are declared in
 a list separated by commas. For example, the following method declares that it throws a RemoteException and an InsufficientFundsException:</p>
 
 
<pre class="inset">
<span class="classn">import</span> java.io.*;
<span class="classn">public class</span> className
{
   <span class="classn">public void</span> withdraw(<span class="classn">double</span> amount) <span class="classn">throws</span> RemoteException,
                              <span class="classname">InsufficientFundsException</span>
   {
       <span class="comment">// Method implementation</span>
   }
   <span class="comment">//Remainder of class definition</span>
}
</pre>



<h2>The finally block</h2>
<p>The finally block follows a try block or a catch block. A finally block of code always executes, irrespective of occurrence of an Exception.</p>

<p>Using a finally block allows you to run any cleanup-type statements that you want to execute, no matter what happens in the protected code.</p>

<p>A finally block appears at the end of the catch blocks and has the following syntax:</p>


<pre class="inset">
<span class="classn">try</span>
{
   <span class="comment">//Protected code</span>
}<span class="classn">catch</span>(<span class="classname">ExceptionType1</span> e1)
{
   <span class="comment">//Catch block</span>
}<span class="classn">catch</span>(<span class="classname">ExceptionType2</span> e2)
{
   <span class="comment">//Catch block</span>
}<span class="classn">catch</span>(<span class="classname">ExceptionType3</span> e3)
{
   <span class="comment">//Catch block</span>
}<span class="classn">finally</span>
{
   <span class="comment">//The finally block always executes.</span>
}
</pre>



<h2>Example:</h2>


<pre class="inset">
<span class="classn">public class</span> ExcepTest{

   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]){
      int a[] = new int[2];
      <span class="classn">try</span>{
         <span class="classname">System</span>.out.println(<span class="print">"Access element three :"</span> + a[3]);
      }<span class="classn">catch</span>(<span class="classname">ArrayIndexOutOfBoundsException</span> e){
         <span class="classname">System</span>.out.println(<span class="print">"Exception thrown  :"</span> + e);
      }
      <span class="classn">finally</span>{
         a[0] = 6;
         <span class="classname">System</span>.out.println(<span class="print">"First element value: "</span> +a[0]);
         <span class="classname">System</span>.out.println(<span class="print">"The finally statement is executed"</span>);
      }
   }
}
</pre>



<p>This would produce the following result:</p>


<pre class="inset">
<span class="classname">Exception</span> thrown  :java.lang.<span class="classname">ArrayIndexOutOfBoundsException</span>: 3
<span class="classname">First</span> element value: 6
<span class="classname">The</span> <span class="classn">finally</span> statement <span class="classn">is</span> executed
</pre>



<p>Note the following:</p>
<ul>
	<li>A catch clause cannot exist without a try statement.</li>

	<li>It is not compulsory to have finally clauses when ever a try/catch block is present.</li>

	<li>The try block cannot be present without either catch clause or finally clause.</li>

	<li>Any code cannot be present in between the try, catch, finally blocks.</li>
</ul>

<div>
<a href="Java-Methods.php" target="iframe_content" class="button">PREV</a>
<a href="Java-Inheritance.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>