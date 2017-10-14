<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">


</head>

<body>
<h1 align="center">Java - Inheritance</h1>
<hr>

<p>Inheritance can be defined as the process where one class acquires the properties (methods and fields) of another.
 With the use of inheritance the information is made manageable in a hierarchical order.</p>

<p>The class which inherits the properties of other is known as subclass (derived class, child class) and the class 
whose properties are inherited is known as superclass (base class, parent class).</p>

<h2>extends Keyword</h2>
<p><b>extends</b> is the keyword used to inherit the properties of a class. Below given is the syntax of extends keyword.</p>


<pre class="inset">
<span class="classn">class</span> <span class="classname">Super</span>{
   .....
   .....
}

<span class="classn">class</span> Sub <span class="classn">extends</span> <span class="classname">Super</span>{
   .....
   .....

}
</pre>


<h2>Sample Code</h2>
<p>Below given is an example demonstrating Java inheritance. In this example you can observe two classes namely Calculation and My_Calculation.</p>

<p>Using extends keyword the My_Calculation inherits the methods addition() and Subtraction() of Calculation class.</p>

<p>Copy and paste the program given below in a file with name My_Calculation.java</p>


<pre class="inset">
<span class="classn">class</span> <span class="classname">Calculation</span>{ 
   int z;
	
   <span class="classn">public void</span> addition(<span class="classn">int</span> x, <span class="classn">int</span> y){
      z = x+y;
      <span class="classn">System</span>.out.println(<span class="print">"The sum of the given numbers:"</span>+z);
   }
	
   <span class="classn">public void</span> <span class="classname">Subtraction</span>(int x,int y){
      z = x-y;
      <span class="classname">System</span>.out.println(<span class="print">"The difference between the given numbers:"</span>+z);
   }
   
}

<span class="classn">public class</span> My_Calculation <span class="classn">extends</span> Calculation{    
  
   <span class="classn">public void</span> multiplication(<span class="classn">int</span> x, <span class="classn">int</span> y){
      z = x*y;
      <span class="classn">System</span>.out.println(<span class="print">"The product of the given numbers:"</span>+z);
   }
	
   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]){
      int a = 20, b = 10;
      My_Calculation demo = <span class="classn">new</span> My_Calculation();
      demo.addition(a, b);
      demo.Subtraction(a, b);
      demo.multiplication(a, b);      
   }

}
</pre>


<p>Compile and execute the above code as shown below</p>


<pre class="inset">
javac My_Calculation.java
java My_Calculation
</pre>


<p>After executing the program it will produce the following result.</p>


<pre class="inset">
The sum of the given numbers:30
The difference between the given numbers:10
The product of the given numbers:200
</pre>


<p>In the given program when an object to <b>My_Calculation</b> class is created, a copy of the contents of the super class
 is made with in it. That is why, using the object of the subclass you can access the members of a super class.</p>

<img src="InheritanceImg.png"></img>

<p>The Superclass reference variable can hold the subclass object, but using that variable you can access only 
the members of the superclass, so to access the members of both classes it is recommended to always create 
reference variable to the subclass.</p>

<p>If you consider the above program you can instantiate the class as given below as well. But using the superclass 
reference variable ( cal in this case ) you cannot call the method multiplication(), which belongs to the subclass My_Calculation.</p>


<pre class="inset">
<span class="classname">Calculation</span> cal = <span class="classn">new</span> <span class="classname">My_Calculation</span>();
demo.addition(a, b);
demo.Subtraction(a, b);
</pre>


<p><b>Note -</b> A subclass inherits all the members (fields, methods, and nested classes) from its superclass. 
Constructors are not members, so they are not inherited by subclasses, but the constructor of the superclass can be invoked from the subclass.</p>

<h2>The super keyword</h2>
<p>The <b>super</b> keyword is similar to <b>this</b> keyword following are the scenarios where the super keyword is used.</p>
<ul>
	<li>It is used to differentiate the members of superclass from the members of subclass, if they have same names.</li>

	<li>It is used to invoke the superclass constructor from subclass.</li>
</ul>
<h2>Differentiating the members</h2>

<p>If a class is inheriting the properties of another class. And if the members of the superclass have the names 
same as the sub class, to differentiate these variables we use super keyword as shown below.</p>


<pre class="inset">
<span class="classname">super</span>.variable
<span class="classname">super</span>.method();
</pre>


<h2>Sample Code</h2>
<p>This section provides you a program that demonstrates the usage of the <b>super</b> keyword.</p>

<p>In the given program you have two classes namely Sub_class and Super_class, both have a method named display()
 with different implementations, and a variable named num with different values. We are invoking display() method 
 of both classes and printing the value of the variable num of both classes, here you can observe that we have used 
 super key word to differentiate the members of super class from sub class.</p>

<p>Copy and paste the program in a file with name Sub_class.java.</p>


<pre class="inset>
<span class="classn">class</span> <span class="classname">Super_class</span>{

   int num = 20;
   
   <span class="comment">//display method of superclass</span>
   <span class="classn">public void</span> display(){   
      <span class="classn">System</span>.out.println(<span class="print">"This is the display method of superclass"</span>);
   }	

}

<span class="classn">public class</span> Sub_class <span class="classn">extends</span> Super_class {

   int num = 10;
   
   <span class="comment">//display method of sub class</span>
   <span class="classn">public void</span> display(){
      <span class="classn">System</span>.out.println(<span class="print">"This is the display method of subclass"</span>);
   }
   
   <span class="classn">public void</span> <span class="classname">my_method</span>(){
	  
      <span class="comment">//Instantiating subclass</span>
      Sub_class <span class="classn">sub</span> = <span class="classn">new</span> Sub_class();
	  
      <span class="comment">//Invoking the display() method of sub class</span>
      <span class="classn">sub</span>.display();
	  
      <span class="comment">//Invoking the display() method of superclass</span>
      <span class="classn">super</span>.display();
	  
      <span class="comment">//printing the value of variable num of subclass</span>
      <span class="classname">System</span>.out.println(<span class="print">"value of the variable named num in sub class:"</span>+ sub.num);
		  
      <span class="comment">//printing the value of variable num of superclass</span>
      <span class="classname">System</span>.out.println(<span class="print">"value of the variable named num in super class:"</span>+ super.num);     
   }
   
   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]){
      Sub_class obj = <span class="classn">new</span> Sub_class();
      <span class="classn">obj</span>.my_method();
      
   }
}
</pre>

<p>Compile and execute the above code using the following syntax.</p>


<pre class="inset">
javac <span class="classname">Super_Demo</span>
java <span class="classname">Super</span>
</pre>


<p>On executing the program you will get the following result -</p>


<pre class="inset">
This is the display method of subclass
This is the display method of superclass
value of the variable named num in sub class:10
value of the variable named num in super class:20
</pre>


<h2>Invoking Superclass constructor</h2>
<p>If a class is inheriting the properties of another class, the subclass automatically acquires
 the default constructor of the super class. But if you want to call a parametrized constructor of
 the super class, you need to use the super keyword as shown below.</p>

 
<pre class="inset">
super(values);
</pre>


<h2>Sample Code</h2>
<p>The program given in this section demonstrates how to use the super keyword to invoke the parametrized
 constructor of the superclass. This program contains a super class and a sub class, where the super class 
 contains a parametrized constructor which accepts a string value, and we used the super keyword to invoke 
 the parametrized constructor of the super class.</p>

<p>Copy and paste the below given program in a file with name Subclass.java</p>


<pre class="inset">
<span class="classn">class</span> Superclass{
   
   <span class="classn">int</span> age;

	<span class="classname">Superclass</span>(int age){
      <span class="classn">this</span>.age = age; 		 
   }

   <span class="classn">public void</span> getAge(){
      <span class="classname">System</span>.out.println(<span class="print">"The value of the variable named age in super class is: "</span> +age);
   }

}

<span class="classn">public class</span> Subclass <span class="classn">extends</span> Superclass {
   
   <span class="classn">Subclass</span>(int age){
      <span class="classname">super</span>(age);
   }

   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]){
      <span class="classname">Subclass</span> s = <span class="classn">new</span> <span class="classname">Subclass</span>(24);
      s.getAge();
   }

}
</pre>


<p>Compile and execute the above code using the following syntax.</p>


<pre class="inset">
javac Subclass
java Subclass
</pre>


<p>On executing the program you will get the following result -</p>


<pre class="inset">
<span class="print">The value of the variable named age in super class is: 24</span>
</pre>


<div>
<a href="Java-Exceptions.php" target="iframe_content" class="button">PREV</a>
<a href="Java-Multithreading.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>