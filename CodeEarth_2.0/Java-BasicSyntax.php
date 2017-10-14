<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Java - Basic Syntax</h1>
<hr> 

<p>When we consider a Java program it can be defined as a collection of objects that communicate via 
invoking each other's methods. Let us now briefly look into what do class, object, methods and instance variables mean.
</p>

<ul>
	<li><b>Object - </b>Objects have states and behaviours. Example: A dog has states - colour, name, breed 
	as well as behaviours -wagging, barking, eating. An object is an instance of a class.
	</li>
	<br>
	<li><b>Class - </b>A class can be defined as a template/ blue print 
	that describes the behaviours/states that object of its type support.
	</li>
	<br>
	<li><b>Methods - </b>A method is basically a behaviour. A class can contain many methods. 
	It is in methods where the logics are written, data is manipulated and all the actions are executed.
	</li>
	<br>
	<li><b>Instance Variables - </b>Each object has its unique set of instance variables. 
	An object's state is created by the values assigned to these instance variables.
	</li>
	
</ul>

<h2>First Java Program:</h2>
<p>Let us look at a simple code that would print the words Hello World.</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">MyFirstJavaProgram</span> {

	<span class="comment">/* This is my first java program.  
	* This will print 'Hello World' as the output
	*/</span>
	
	<span class="classn">public static void</span> main(<span class="classname">String</span> []args) {
		<span class="classname">System</span>.out.println(<span class="print">"Hello World"</span>); <span class="comment">// prints Hello World</span>
	}
}
</pre>	


<p>Let's look at how to save the file, compile and run the program. Please follow the steps given below:</p>
<ul>
	<li>Open notepad and add the code as above.</li>
	<li>Save the file as: MyFirstJavaProgram.java.</li>
	<li>Open a command prompt window and go to the directory where you saved the class. Assume it's C:\.</li>
	<li>Type ' javac MyFirstJavaProgram.java' and press enter to compile your code. 
	If there are no errors in your code, the command prompt will take you to the next line (Assumption : The path variable is set).</li>
	<li>Now, type ' java MyFirstJavaProgram ' to run your program.</li>
	<li>You will be able to see ' Hello World ' printed on the window.</li>
</ul>

<pre class="inset" >	
C:\> javac MyFirstJavaProgram.java
C:\> java MyFirstJavaProgram 
Hello World
</pre>


<h2>Basic Syntax:</h2>
<p>About Java programs, it is very important to keep in mind the following points.</p>
<ul>
	<li><b>Case Sensitivity - </b>Java is case sensitive, which means identifier Hello and hello would have different meaning in Java.</li>
	<br>
	<li><b>Class Names - </b>For all class names the first letter should be in Upper Case. 
	<br>
	If several words are used to form a name of the class, each inner word's first letter should be in Upper Case.
	<br>
	Example class MyFirstJavaClass</li>
	<br>
	<li><b>Method Names - </b>All method names should start with a Lower Case letter.
	<br>
	If several words are used to form the name of the method, then each inner word's first letter should be in Upper Case.
	<br>
	Example public void myMethodName()</li>
	<br>
	<li><b>Program File Name - </b>Name of the program file should exactly match the class name. 
	<br>
	When saving the file, you should save it using the class name (Remember Java is case sensitive) 
	and append '.java' to the end of the name (if the file name and the class name do not match your program will not compile).
	<br>
	Example: Assume 'MyFirstJavaProgram' is the class name. Then the file should be saved as 'MyFirstJavaProgram.java'</li>
	<br>
	<li><b>public static void main(String args[]) - </b>Java program processing starts from the main() method which is a
	mandatory part of every Java program.</li>
</ul>

<h2>Java Identifiers:</h2>
<p>All Java components require names. Names used for classes, variables and methods are called identifiers.</p>

<p>In Java, there are several points to remember about identifiers. They are as follows:</p>

<ul>
	<li>All identifiers should begin with a letter (A to Z or a to z), currency character ($) or an underscore (_).</li>

	<li>After the first character identifiers can have any combination of characters.</li>

	<li>A key word cannot be used as an identifier.</li>

	<li>Most importantly identifiers are case sensitive.</li>

	<li>Examples of legal identifiers: age, $salary, _value, __1_value</li>

	<li>Examples of illegal identifiers: 123abc, -salary</li>
</ul>

<h2>Java Modifiers:</h2>
<p>Like other languages, it is possible to modify classes, methods, etc., by using modifiers. There are two categories of modifiers:</p>

<ul>	
	<li><b>Access Modifiers: </b>default, public , protected, private</li>

	<li><b>Non-access Modifiers: </b>final, abstract, strictfp</li>
</ul>
<p>We will be looking into more details about modifiers in the next section.</p>

<h2>Java Variables:</h2>
<p>We would see following type of variables in Java:</p>
<ul>
	<li>Local Variables</li>
	<li>Class Variables (Static Variables)</li>
	<li>Instance Variables (Non-static variables)</li>
</ul>

<h2>Java Arrays:</h2>
<p>Arrays are objects that store multiple variables of the same type. However, an array itself is an object on the heap. 
We will look into how to declare, construct and initialize in the upcoming chapters.
</p>

<h2>Java Enums:</h2>
<p>Enums were introduced in java 5.0. Enums restrict a variable to have one of only a few predefined values. 
The values in this enumerated list are called enums.</p>

<p>With the use of enums it is possible to reduce the number of bugs in your code.</p>

<p>For example, if we consider an application for a fresh juice shop, it would be possible 
to restrict the glass size to small, medium and large. This would make sure that it would not 
allow anyone to order any size other than the small, medium or large.</p>

<h2>Example:</h2>


<pre class="inset">
<span class="classn">class</span> <span class="classname">FreshJuice</span> {

	enum <span class="classname">FreshJuiceSize</span>{ SMALL, MEDIUM, LARGE }
	<span class="classname">FreshJuiceSize</span> size;
}

<span class="classn">public class</span> <span class="classname">FreshJuiceTest</span> {

	<span class="classn">public static void</span> main(<span class="classname">String</span> args[]){
		FreshJuice juice = <span class="classn">new</span> <span class="classname">FreshJuice</span>();
		juice.size = <span class="classname">FreshJuice.FreshJuiceSize</span>.MEDIUM ;
		<span class="classname">System</span>.out.println(<span class="print">"Size: "</span> + juice.size);
	}
}
</pre>


<p>Above example will produce the following result:</p>

<pre class="inset">
<span class="print">Size:</span> MEDIUM
</pre>


<p><b>Note:</b> enums can be declared as their own or inside a class. Methods, variables, constructors can be defined inside enums as well.</p>

<h2>Java Keywords:</h2>
<p>The following list shows the reserved words in Java. These reserved words may not be used as constant or variable or any other identifier names.</p>

<table>
	
	<tr>
		<td>abstract</td>
		<td>assert</td>
		<td>boolean</td>
		<td>break</td>
	</tr>
	<tr>
		<td>byte</td>
		<td>case</td>
		<td>catch</td>
		<td>char</td>
	</tr>
	<tr>
		<td>class</td>
		<td>const</td>
		<td>continue</td>
		<td>default</td>
	</tr>
	<tr>
		<td>do</td>
		<td>double</td>
		<td>else</td>
		<td>enum</td>
	</tr>
	<tr>
		<td>extends</td>
		<td>final</td>
		<td>finally</td>
		<td>float</td>
	</tr>
	<tr>
		<td>for</td>
		<td>if</td>
		<td>implements</td>
		<td>import</td>
	</tr>
	<tr>
		<td>int</td>
		<td>interface</td>
		<td>long</td>
		<td>new</td>
	</tr>
	<tr>
		<td>private</td>
		<td>protected</td>
		<td>public</td>
		<td>return</td>
	</tr>
	<tr>
		<td>short</td>
		<td>static</td>
		<td>throws</td>
		<td>super</td>
	</tr>
	<tr>
		<td>switch</td>
		<td>synchronized</td>
		<td>this</td>
		<td>throw</td>
	</tr>
	<tr>
		<td>try</td>
		<td>void</td>
		<td>volatile</td>
		<td>while</td>
	</tr>
</table>

<h2>Inheritance:</h2>
<p>In Java, classes can be derived from classes. Basically if you need to create a 
new class and here is already a class that has some of the code you require, then 
it is possible to derive your new class from the already existing code.
</p>

<p>This concept allows you to reuse the fields and methods of the existing class without 
having to rewrite the code in a new class. In this scenario the existing class is called 
the superclass and the derived class is called the subclass.
</p>

<h2>Interfaces:</h2>
<p>In Java language, an interface can be defined as a contract between objects on how to 
communicate with each other. Interfaces play a vital role when it comes to the concept of inheritance.
</p>
<p>An interface defines the methods, a deriving class(subclass) should use. 
But the implementation of the methods is totally up to the subclass.
</p>
<div>
<a href="Java-EnvironmentSetup.php" target="iframe_content" class="button">PREV</a>
<a href="Java-ObjectClasses.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>