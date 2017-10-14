<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Java - Object & Classes</h1>
<hr>

<p>Java is an Object-Oriented Language. As a language that has the Object Oriented 
feature, Java supports the following fundamental concepts:
</p>

<ul>
	<li>Polymorphism</li>
	<li>Inheritance</li>
	<li>Encapsulation</li>
	<li>Abstraction</li>
	<li>Classes</li>
	<li>Objects</li>
	<li>Instance</li>
	<li>Method</li>
	<li>Message Parsing</li>
</ul>

<p>In this chapter, we will look into the concepts Classes and Objects.</p>
<ul>
	<li><b>Object - </b>Objects have states and behaviors. Example: A dog has states - color, name, 
	breed as well as behaviors -wagging, barking, eating. An object is an instance of a class.</li>

	<li><b>Class - </b>A class can be defined as a template/blue print that describes the behaviors/states that object of its type support.</li>
</ul>

<h2>Objects in Java:</h2>

<p>Let us now look deep into what are objects. If we consider the real-world we can find many 
objects around us, Cars, Dogs, Humans, etc. All these objects have a state and behavior.</p>

<p>If we consider a dog, then its state is - name, breed, color, and the behavior is - barking, wagging, running</p>

<p>If you compare the software object with a real world object, they have very similar characteristics.</p>

<p>Software objects also have a state and behavior. A software object's state is stored in fields and behavior is shown via methods.</p>

<p>So in software development, methods operate on the internal state of an object and the object-to-object communication is done via methods.</p>

<h2>Classes in Java:</h2>

<p>A class is a blue print from which individual objects are created.</p>

<p>A sample of a class is given below:</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">Dog</span>{
	<span class="classname">String</span> breed;
	<span class="classn">int</span> ageC;
	<span class="classname">String</span> color;

	<span class="classn">void</span> barking(){
	}
   
	<span class="classn">void</span> hungry(){
	}
   
	<span class="classn">void</span> sleeping(){
	}
}
</pre>	


<p>A class can contain any of the following variable types.</p>

<ul>
	<li><b>Local variables:</b> Variables defined inside methods, constructors or blocks are called local variables. 
	The variable will be declared and initialized within the method and the variable will be destroyed when the method has completed.</li>

	<li><b>Instance variables:</b> Instance variables are variables within a class but outside any method. 
	These variables are initialized when the class is instantiated. Instance variables can be accessed from 
	inside any method, constructor or blocks of that particular class.</li>

	<li><b>Class variables:</b> Class variables are variables declared with in a class, outside any method, with the static keyword.</li>
</ul>

<p>A class can have any number of methods to access the value of various kinds of methods. 
In the above example, barking(), hungry() and sleeping() are methods.</p>

<p>Below mentioned are some of the important topics that need to be discussed when looking into classes of the Java Language.</p>

<h2>Constructors:</h2>

<p>When discussing about classes, one of the most important sub topic would be constructors. Every class has a constructor. 
If we do not explicitly write a constructor for a class the Java compiler builds a default constructor for that class.</p>

<p>Each time a new object is created, at least one constructor will be invoked. The main rule of constructors is that they
 should have the same name as the class. A class can have more than one constructor.</p>

<p>Example of a constructor is given below:</p>

<pre class="inset">
<span class="classn">public class</span> <span class="classname">Puppy</span>{
		<span class="classn">public <span class="classname">Puppy</span>(){
	}

	<span class="classn">public</span> <span class="classname">Puppy</span>(<span class="classname">String</span> name){
		<span class="comment">// This constructor has one parameter, name.</span>
	}
}
</pre>	
</div>

<p>Java also supports Singleton Classes where you would be able to create only one instance of a class.</p>

<p><b>Note:</b> We have two different types of constructors we are going to discuss constructors in detail in coming chapters.</p>

<h2>Creating an Object:</h2>
<p>As mentioned previously, a class provides the blueprints for objects. So basically an object is created from a class. 
In Java, the new key word is used to create new objects.</p>

<p>There are three steps when creating an object from a class:</p>
<ul>
	<li><b>Declaration:</b> A variable declaration with a variable name with an object type.</li>

	<li><b>Instantiation:</b> The 'new' key word is used to create the object.</li>

	<li><b>Initialization:</b> The 'new' keyword is followed by a call to a constructor. This call initializes the new object.</li>
</ul>
<p>Example of creating an object is given below:</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">Puppy</span>{

	<span class="classn">public</span> <span class="classname">Puppy</span>(<span class="classname">String</span> name){
		<span class="comment">// This constructor has one parameter, name.</span>
		<span class="classname">System</span>.out.println(<span class="print">"Passed Name is :"</span> + name ); 
	}
   
	<span class="classn">public static void</span> main(<span class="classname">String</span> []args){
		<span class="comment">// Following statement would create an object myPuppy</span>
		<span class="classname">Puppy</span> myPuppy = <span class="classn">new</span> <span class="classname">Puppy</span>( <span class="print">"tommy" </span>);
	}
}
</pre>	


<p>If we compile and run the above program, then it would produce the following result:</p>

<pre class="inset">
<span class="classname">Passed Name</span> <span class="classn">is</span> :tommy
</pre>


<h2>Accessing Instance Variables and Methods:</h2>
<p>Instance variables and methods are accessed via created objects. To access an instance variable the fully qualified path should be as follows:</p>


<pre class="inset">
<span class="comment">/* First create an object */</span>
<span class="classname">ObjectReference </span>= <span class="classn">new</span> <span class="classname">Constructor</span>();

<span class="comment">/* Now call a variable as follows */</span>
<span class="classname">ObjectReference</span>.variableName;

<span class="comment">/* Now you can call a class method as follows */</span>
<span class="classname">ObjectReference.MethodName</span>();
</pre>


<h2>Example:</h2>
<p>This example explains how to access instance variables and methods of a class:</p>

<pre class="inset">
<span class="classn">public class</span> <span class="classname">Puppy</span>{
   
<span class="classn">int</span> puppyAge;

<span class="classn">public</span> <span class="classname">Puppy</span>(<span class="classname">String</span> name){
	<span class="comment">// This constructor has one parameter, name.</span>
	<span class="classname">System</span>.out.println(<span class="print">"Name chosen is :"</span> + name ); 
}
   
<span class="classn">public void</span> setAge( <span class="classn">int</span> age ){
	puppyAge = age;
}

<span class="classn">public int</span> getAge( ){
	<span class="classname">System</span>.out.println(<span class="print">"Puppy's age is :"</span> + puppyAge ); 
	<span class="classn">return</span> puppyAge;
}
   
<span class="classn">public static void</span> main(<span class="classname">String</span> []args){
	<span class="comment">/* Object creation */</span>
	<span class="classname">Puppy</span> myPuppy = <span class="classn">new</span> <span class="classname">Puppy</span>( <span class="print">"tommy"</span> );

	<span class="comment">/* Call class method to set puppy's age */</span>
	myPuppy.setAge( 2 );

	<span class="comment">/* Call another class method to get puppy's age */</span>
	myPuppy.getAge( );

	<span class="comment">/* You can access instance variable as follows as well */</span>
	<span class="classname">System</span>.out.println(<span class="print">"Variable Value :"</span> + myPuppy.puppyAge ); 
  }
}
</pre>	

<p>If we compile and run the above program, then it would produce the following result:</p>

<pre class="inset">
<span class="classname">Name</span> chosen is :tommy
<span class="classname">Puppy</span>'s age is :2
<span class="print">Variable Value :2</span>
</pre>


<div>
<a href="Java-BasicSyntax.php" target="iframe_content" class="button">PREV</a>
<a href="Java-BasicDatatypes.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>

</body>
</html>