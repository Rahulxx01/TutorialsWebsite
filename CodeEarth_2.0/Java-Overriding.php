<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Java - Overriding</h1>
<hr> 

<p>In the previous chapter, we talked about superclasses and subclasses. If a class inherits a method from its superclass, 
then there is a chance to override the method provided that it is not marked final.</p>

<p>The benefit of overriding is: ability to define a behavior that's specific to the subclass type, which 
means a subclass can implement a parent class method based on its requirement.</p>

<p>In object-oriented terms, overriding means to override the functionality of an existing method.</p>

<h2>Example</h2>
<p>Let us look at an example.</p>

<pre class="inset">
<span class="classn">class</span> <span class="classname">Animal</span> {
   <span class="classn">public void</span> move() {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Animals can move"</span>);
   }
}

<span class="classn">class</span> <span class="classname">Dog</span> <span class="classn">extends</span> <span class="classname">Animal</span> {
   <span class="classn">public void</span> move() {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Dogs can walk and run"</span>);
   }
}

<span class="classn">public class</span> <span class="classname">TestDog</span> {

   <span class="classn">public static void</span> main(String args[]) {
      Animal a = <span class="classn">new</span> Animal();   <span class="comment">// Animal reference and object</span>
      Animal b = <span class="classn">new</span> Dog();   <span class="comment">// Animal reference but Dog object</span>

      a.move();   <span class="comment">// runs the method in Animal class</span>
      b.move();   <span class="comment">// runs the method in Dog class</span>
   }
}
</pre>

<p>This will produce the following result -</p>

<h2>Output</h2>


<pre class="inset">
Animals can move
Dogs can walk and run
</pre>


<p>In the above example, you can see that even though b is a type of Animal it runs the move method in the Dog class. 
The reason for this is: In compile time, the check is made on the reference type. 
However, in the runtime, JVM figures out the object type and would run the method that belongs to that particular object.</p>

<p>Therefore, in the above example, the program will compile properly since Animal class has the method move. 
Then, at the runtime, it runs the method specific for that object.</p>

<p>Consider the following example -</p>

<h2>Example</h2>


<pre class="inset">
<span class="classn">class</span> <span class="classname">Animal</span> {
   <span class="classn">public void</span> move() {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Animals can move"</span>);
   }
}

<span class="classn">class</span> <span class="classname">Dog</span> <span class="classn">extends</span> <span class="classname">Animal</span> {
   <span class="classn">public void</span> move() {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Dogs can walk and run"</span>);
   }
   <span class="classn">public void</span> bark() {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Dogs can bark"</span>);
   }
}

<span class="classn">public class</span> <span class="classname">TestDog</span> {

   <span class="classn">public static void</span> main(String args[]) {
      Animal a = <span class="classn">new</span> Animal();   <span class="comment">// Animal reference and object</span>
      Animal b = <span class="classn">new</span> Dog();   <span class="comment">// Animal reference but Dog object</span>

      a.move();   <span class="comment">// runs the method in Animal class</span>
      b.move();   <span class="comment">// runs the method in Dog class</span>
	  b.bark();
   }
}
</pre>


<p>This will produce the following result -</p>

<h2>Output</h2>

<pre class="inset">
TestDog.java:26: error: cannot find symbol
      b.bark();
       ^
  symbol:   method bark()
  location: variable b of type Animal
1 error
</pre>


<p>This program will throw a compile time error since b's reference type Animal doesn't have a method by the name of bark.</p>

<p>Rules for Method Overriding</p>

<ul>
	<li>The argument list should be exactly the same as that of the overridden method.</li>

	<li>The return type should be the same or a subtype of the return type declared in the original overridden method in the superclass.</li>

	<li>The access level cannot be more restrictive than the overridden method's access level. 
	For example: If the superclass method is declared public then the overridding method in the sub class cannot be either private or protected.</li>

	<li>Instance methods can be overridden only if they are inherited by the subclass.</li>

	<li>A method declared final cannot be overridden.</li>

	<li>A method declared static cannot be overridden but can be re-declared.</li>

	<li>If a method cannot be inherited, then it cannot be overridden.</li>

	<li>A subclass within the same package as the instance's superclass can override any superclass method that is not declared private or final.</li>

	<li>A subclass in a different package can only override the non-final methods declared public or protected.</li>

	<li>An overriding method can throw any uncheck exceptions, regardless of whether the overridden method throws exceptions or not.
	However, the overriding method should not throw checked exceptions that are new or broader than the ones declared by the overridden method.
	The overriding method can throw narrower or fewer exceptions than the overridden method.</li>

	<li>Constructors cannot be overridden.</li>

</ul>

<h2>Using the super Keyword</h2>
<p>When invoking a superclass version of an overridden method the super keyword is used.</p>

<h2>Example</h2>

<pre class="inset">
<span class="classn">class</span> <span class="classname">Animal</span> {
   <span class="classn">public void</span> move() {
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Animals can move"</span>);
   }
}

<span class="classn">class</span> <span class="classname">Dog</span> <span class="classn">extends</span> <span class="classname">Animal</span> {
   <span class="classn">public void</span> move() {
	<span class="classn">super</span>.move();   <span class="comment">// invokes the super class method</span>
      <span class="classname">System</span>.<span class="classn">out</span>.println(<span class="print">"Dogs can walk and run"</span>);
   }
}

<span class="classn">public class</span> <span class="classname">TestDog</span> {

   <span class="classn">public static void</span> main(<span class="classname">String</span> args[]) {
      Animal b = <span class="classn">new</span> Dog();   <span class="comment">// Animal reference but Dog object</span>
      b.move();   <span class="comment">// runs the method in Dog class</span>
   }
}
</pre>


<p>This will produce the following result -</p>

<h2>Output</h2>

<pre class="inset">
Animals can move
Dogs can walk and run
</pre>

<div>
<a href="Java-Inheritance.php" target="iframe_content" class="button">PREV</a>
</div>

</body>
</html>