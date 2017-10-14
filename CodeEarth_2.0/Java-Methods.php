<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Java - Methods</h1>
<hr> 

<p>A Java method is a collection of statements that are grouped together to perform an operation. 
When you call the System.out.println() method, for example, the system actually executes several statements in order to display a message on the console.</p>

<p>Now you will learn how to create your own methods with or without return values, invoke a method with or without parameters, and apply method abstraction in the program design.</p>

<h2>Creating Method:</h2>
<p>Considering the following example to explain the syntax of a method:</p>


<pre class="inset">
<span class="classn">public static int</span> methodName(<span class="classn">int</span> a,<span class="classn"> int</span> b) {
  <span class="print">// body</span>
}
</pre>

<p>Here,</p>

<ul>

	<li>public static : modifier.</li>

	<li>int: return type</li>

	<li>methodName: name of the method</li>

	<li>a, b: formal parameters</li>

	<li>int a, int b: list of parameters</li>
	
</ul>

<p>Method definition consists of a method header and a method body. The same is shown below:</p>


<pre class="inset">
modifier returnType nameOfMethod (<span class="classname">Parameter</span> List) {
 <span class="comment">// method body</span>
}
</pre>

<p>The syntax shown above includes:</p>

<ul>
	<li>modifier: It defines the access type of the method and it is optional to use.</li>

	<li>returnType: Method may return a value.</li>

	<li>nameOfMethod: This is the method name. The method signature consists of the method name and the parameter list.</li>

	<li>Parameter List: The list of parameters, it is the type, order, and number of parameters of a method. These are optional, method may contain zero parameters.</li>

	<li>method body: The method body defines what the method does with statements.</li>
</ul>

<h2>Example:</h2>
<p>Here is the source code of the above defined method called max(). This method takes two parameters num1 and num2 and returns the maximum between the two:</p>


<pre class="inset">
<span class="comment">/** the snippet returns the minimum between two numbers */</span>
<span class="classn">public static int</span> minFunction(<span class="classn">int</span> n1, <span class="classn">int</span> n2) {
   <span class="classn">int</span> min;
   <span class="classn">if</span> (n1 > n2)
      min = n2;
   <span class="classn">else</span>
      min = n1;

   <span class="classn">return</span> min; 
}
</pre>


<h2>Method Calling:</h2>
<p>For using a method, it should be called. There are two ways in which a method is called i.e. method returns a value or returning nothing (no return value).</p>

<p>The process of method calling is simple. When a program invokes a method, the program control gets transferred to the called method. 
This called method then returns control to the caller in two conditions, when:</p>

<ul>
	<li>return statement is executed.</li>

	<li>reaches the method ending closing brace.</li>
</ul>

<p>The methods returning void is considered as call to a statement. Lets consider an example:</p>


<pre class="inset">
<span class="classname">System</span>.out.println("This is Mytutorial.com!");
</pre>


<p>The method returning value can be understood by the following example:</p>


<pre class="inset">
<span class="classn">int</span> result = sum(6, 9);
</pre>


<h2>Example:</h2>
<p>Following is the example to demonstrate how to define a method and how to call it:</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">ExampleMinNumber</span>{
   
   <span class="classn">public static void</span> main(<span class="classname">String</span>[] args) {
      <span class="classn">int</span> a = 11;
      <span class="classn">int</span> b = 6;
      <span class="classn">int</span> c = minFunction(a, b);
      System.out.println(<span class="print">"Minimum Value = "</span> + c);
   }

   <span class="comment">/** returns the minimum of two numbers */</span>
   <span class="classn">public static int</span> minFunction(<span class="classn">int</span> n1, <span class="classn">int</span> n2) {
      <span class="classn">int</span> min;
      <span class="classn">if</span> (n1 > n2)
         min = n2;
      <span class="classn">else</span>
         min = n1;

      <span class="classn">return</span> min; 
   }
}
</pre>


<p>This would produce the following result:</p>


<pre class="inset"> 
inimum value = <span class="print">6</span>
</pre>


<h2>The void Keyword:</h2>
<p>The void keyword allows us to create methods which do not return a value. Here, in the following example we're considering
 a void method methodRankPoints. This method is a void method which does not return any value. Call to a void method must be a 
 statement i.e. methodRankPoints(255.7);. It is a Java statement which ends with a semicolon as shown below.</p>

<h2>Example:</h2>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">ExampleVoid</span> {

   <span class="classn">public static void</span> main(<span class="classname">String</span>[] args) {
      methodRankPoints(255.7);
   }

   <span class="classn">public static void</span> methodRankPoints(<span class="classn">double</span> points) {
      <span class="classn">if</span> (points >= 202.5) {
         <span class="classname">System</span>.out.println(<span class="print">"Rank:A1"</span>);
      }
      <span class="classn">else if</span> (points >= 122.4) {
         <span class="classname">System</span>.out.println(<span class="print">"Rank:A2"</span>);
      }
      <span class="classn">else</span> {
         <span class="classname">System</span>.out.println(<span class="print">"Rank:A3"</span>);
      }
   }
}
</pre>


<p>This would produce the following result:</p>


<pre class="inset">
<span class="print">Rank:A1</span>
</pre>


<h2>Passing Parameters by Value:</h2>
<p>While working under calling process, arguments is to be passed. These should be in the same order as their respective parameters in the method specification. 
Parameters can be passed by value or by reference.</p>

<p>Passing Parameters by Value means calling a method with a parameter. Through this the argument value is passed to the parameter.</p>

<h2>Example:</h2>
<p>The following program shows an example of passing parameter by value. The values of the arguments remains the same even after the method invocation.</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">swappingExample</span> {

   <span class="classn">public static void</span> main(<span class="classname">String</span>[] args) {
      <span class="classn">int</span> a = 30;
      <span class="classn">int</span> b = 45;

      <span class="classname">System</span>.out.println(<span class="print">"Before swapping, a = "</span> +
                          a + <span class="print">" and b = "</span> + b);

      <span class="comment">// Invoke the swap method</span>
      swapFunction(a, b);
      <span class="classname">System</span>.out.println(<span class="print">"\n**Now, Before and 
	  After swapping values will be same here**:"</span>);
      <span class="classname">System</span>.out.println(<span class="print">"After swapping, a = "</span> +
                         a + <span class="print">" and b is "</span> + b);
   }

   <span class="classn">public static void</span> swapFunction(<span class="classn">int</span> a, <span class="classn">int</span> b) {
   
      <span class="classname">System</span>.out.println(<span class="print">"Before swapping(Inside), a = "</span> + a
                           + <span class="print">" b = "</span> + b);
      // Swap n1 with n2
      int c = a;
      a = b;
      b = c;

      <span class="classname">System</span>.out.println(<span class="print">"After swapping(Inside), a = "</span> + a
                           + <span class="print">" b = "</span> + b);
   }
}
</pre>


<p>This would produce the following result:</p>


<pre class="inset">
<span class="print">Before swapping, a = 30 and b = 45
Before swapping(Inside), a = 30 b = 45
After swapping(Inside), a = 45 b = 30

**Now, Before and After swapping values will be same here**:
After swapping, a = 30 and b is 45</span>
</pre>



<h2>Method Overloading:</h2>
<p>When a class has two or more methods by same name but different parameters, it is known as method overloading.
 It is different from overriding. In overriding a method has same method name, type, number of parameters etc.</p>

<p>Lets consider the example shown before for finding minimum numbers of integer type. If, lets say we want to find
 minimum number of double type. Then the concept of Overloading will be introduced to create two or more methods with
 the same name but different parameters.</p>

<p>The below example explains the same:</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">ExampleOverloading</span>{

   <span class="classn">public static void</span> main(<span class="classname">String</span>[] args) {
      int a = 11;
      int b = 6;
      <span class="classn">double</span> c = 7.3;
      <span class="classn">double</span> d = 9.4;
      int result1 = minFunction(a, b);
      <span class="comment">// same function name with different parameters</span>
      double result2 = minFunction(c, d);
      <span class="classname">System</span>.out.println("Minimum Value = " + result1);
      <span class="classname">System</span>.out.println("Minimum Value = " + result2);
   }

  <span class="comment">// for integer</span>
   <span class="classn">public static int</span> minFunction(<span class="classn">int</span> n1, <span class="classn">int</span> n2) {
      <span class="classn">int</span> min;
      if (n1 > n2)
         min = n2;
      else
         min = n1;

      <span class="classn">return</span> min; 
   }
   <span class="comment">// for double</span>
   <span class="classn">public static double</span> minFunction(<span class="classn">double</span> n1, <span class="classn">double</span> n2) {
     double min;
      if (n1 > n2)
         min = n2;
      else
         min = n1;

      <span class="classn">return</span> min; 
   }
}
</pre>



<p>This would produce the following result:</p>


<pre class="inset">
<span class="print">inimum Value = 6
inimum Value = 7.3</span>
</pre>


<p>Overloading methods makes program readable. Here, two methods are given same name but with different parameters. 
The minimum number from integer and double types is the result.</p>

<h2>Using Command-Line Arguments:</h2>
<p>Sometimes you will want to pass information into a program when you run it. This is accomplished by passing command-line arguments to main( ).</p>

<p>A command-line argument is the information that directly follows the program's name on the command line when it is executed. 
To access the command-line arguments inside a Java program is quite easy.they are stored as strings in the String array passed to main( ).</p>

<h2>Example:</h2>
<p>The following program displays all of the command-line arguments that it is called with:</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">CommandLine</span> {

   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]){ 
      for(int i=0; i&ltargs.length; i++){
         <span class="classname">System</span>.out.println("args[" + i + "]: " +
                                           args[i]);
      }
   }
}
</pre>


<p>Try executing this program as shown here:</p>


<pre class="inset">
$java <span class="classname">CommandLine</span> <span class="classn">this is</span> a command line <span class="print">200 -100</span>
</pre>


<p>This would produce the following result:</p>


<pre class="inset">
args[0]: this
args[1]: is
args[2]: a
args[3]: command
args[4]: line
args[5]: 200
args[6]: -100
</pre>


<h2>The Constructors:</h2>
<p>A constructor initializes an object when it is created. It has the same name as its class and is syntactically similar to a method. 
However, constructors have no explicit return type.</p>

<p>Typically, you will use a constructor to give initial values to the instance variables defined by the class, or to perform any other
 startup procedures required to create a fully formed object.</p>

<p>All classes have constructors, whether you define one or not, because Java automatically provides a default constructor that initializes 
all member variables to zero. However, once you define your own constructor, the default constructor is no longer used.</p>

<h2>Example:</h2>
<p>Here is a simple example that uses a constructor without parameters:</p>


<pre class="inset">
<span class="comment">// A simple constructor.</span>
<span class="classn">class</span> MyClass {
   int x;
   
   <span class="comment">// Following is the constructor</span>
   MyClass() {
      x = 10;
   }
}
</pre>


<p>You would call constructor to initialize objects as follows:</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">ConsDemo</span> {

   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]) {
      MyClass t1 = new MyClass();
      MyClass t2 = new MyClass();
      <span class="classname">System</span>.out.println(t1.x + " " + t2.x);
   }
}
</pre>


<h2>parametarized constructor</h2>
<p>Most often, you will need a constructor that accepts one or more parameters. Parameters are added to a constructor in the
 same way that they are added to a method, just declare them inside the parentheses after the constructor's name.</p>

<h2>Example:</h2>
<p>Here is a simple example that uses a constructor with parameter:</p>


<pre class="inset">
<span class="comment">// A simple constructor.</span>
<span class="classn">class</span> MyClass {
   int x;
   
   <span class="comment">// Following is the constructor</span>
   MyClass(int i ) {
      x = i;
   }
}
</pre>


<p>You would call constructor to initialize objects as follows:</p>


<pre class="inset">
<span class="classn">public class</span> ConsDemo {

   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]) {
      MyClass t1 = new MyClass( 10 );
      MyClass t2 = new MyClass( 20 );
      <span class="classname">System</span>.out.println(t1.x + " " + t2.x);
   }
}
</pre>


<p>This would produce the following result:</p>


<pre class="inset">
<span class="print">10 20</span>
</pre>

<div>
<a href="Java-Arrays.php" target="iframe_content" class="button">PREV</a>
<a href="Java-Exceptions.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>