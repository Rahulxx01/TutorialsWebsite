<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Java - Arrays</h1>
<hr> 

<p>Java provides a data structure, the <b>array</b>, which stores a fixed-size sequential collection of elements of the same type.
 An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.</p>

<p>Instead of declaring individual variables, such as number0, number1, ..., and number99, you declare one array variable such as numbers and use 
numbers[0], numbers[1], and ..., numbers[99] to represent individual variables.</p>

<p>This tutorial introduces how to declare array variables, create arrays, and process arrays using indexed variables.</p>

<h2>Declaring Array Variables:</h2>

<p>To use an array in a program, you must declare a variable to reference the array, and you must specify the type of array the variable can reference. 
Here is the syntax for declaring an array variable:</p>


<pre class="inset">
dataType[] arrayRefVar;   <span class="comment">// preferred way.</span>

<span class="classn">or</span>

dataType arrayRefVar[];  <span class="comment">//  works but not preferred way.</span>
</pre>


<p><b>Note:</b> The style <b>dataType[] arrayRefVar</b> is preferred. The style <b>dataType arrayRefVar[]</b> 
comes from the C/C++ language and was adopted in Java to accommodate C/C++ programmers.</p>

<h2>Example:</h2>
<p>The following code snippets are examples of this syntax:</p>


<pre class="inset">
<span class="classn">double</span>[] myList;         <span class="comment">// preferred way.</span>

<span class="classn">or</span>

<span class="classn">double</span> myList[];         <span class="comment">//  works but not preferred way.</span>
</pre>


<h2>Creating Arrays:</h2>
<p>You can create an array by using the new operator with the following syntax:</p>


<pre class="inset">
arrayRefVar = <span class="classn">new</span> dataType[arraySize];
</pre>


<p>The above statement does two things:</p>
<ul>
	<li>It creates an array using new dataType[arraySize];</li>

	<li>It assigns the reference of the newly created array to the variable arrayRefVar.</li>
</ul>
<p>Declaring an array variable, creating an array, and assigning the reference of the array to the variable can be combined in one statement, as shown below:</p>


<pre class="inset">
dataType[] arrayRefVar = <span class="classn">new</span> dataType[arraySize];
</pre>


<p>Alternatively you can create arrays as follows:</p>


<pre class="inset">
dataType[] arrayRefVar = {value0, value1, ..., valuek};
</pre>


<p>The array elements are accessed through the <b>index.</b> Array indices are 0-based; that is, they start from 0 to <b>arrayRefVar.length-1.</b></p>

<h2>Example:</h2>
<p>Following statement declares an array variable, myList, creates an array of 10 elements of double type and assigns its reference to myList:</p>


<pre class="inset">
<span class="classn">double</span>[] myList = <span class="classn">new double</span>[10];
</pre>

<p>Following picture represents array myList. Here, myList holds ten double values and the indices are from 0 to 9.</p>



<h2>Processing Arrays:</h2>
<p>When processing array elements, we often use either for loop or foreach loop because all of the elements in an array are of the same type and the size of the array is known.</p>

<h2>Example:</h2>
<p>Here is a complete example of showing how to create, initialize and process arrays:</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">TestArray</span> {

   <span class="classn">public static void</span> main(<span class="classname">String</span>[] args) {
      <span class="classn">double</span>[] myList = {1.9, 2.9, 3.4, 3.5};

      <span class="comment">// Print all the array elements</span>
      <span class="classn">for</span> (<span class="classn">int</span> i = 0; i < myList.length; i++) {
         <span class="classname">System</span>.<span class="classn">out</span>.println(myList[i] + " ");
      }
      <span class="comment">// Summing all elements</span>
      <span class="classn">double</span> total = 0;
      <span class="classn">for</span> (<span class="classn">int</span> i = 0; i < myList.length; i++) {
         total += myList[i];
      }
      <span class="classname">System</span>.<span class="classn">out</span>.println("Total is " + total);
      <span class="comment">// Finding the largest element</span>
      <span class="classn">double</span> max = myList[0];
      <span class="classn">for</span> (<span class="classn">int</span> i = 1; i < myList.length; i++) {
         <span class="classn">if</span> (myList[i] > max) max = myList[i];
      }
      <span class="classname">System</span>.<span class="classn">out</span>.println("Max is " + max);
   }
}

</pre>


<p>This would produce the following result:</p>


<pre class="inset">
<span class="print">1.9
2.9
3.4
3.5</span>
<span class="classname">Total</span> <span class="classn">is</span> 11.7
<span class="classname">Max</span> <span class="classn">is</span> 3.5
</pre>

<h2>The foreach Loops:</h2>
<p>JDK 1.5 introduced a new for loop known as foreach loop or enhanced for loop, which enables you to traverse the complete array sequentially without using an index variable.</p>
</span></span>
<h2>Example:</h2>
<p>The following code displays all the elements in the array myList:</p>


<pre class="inset">
<span class="classn">public class</span> <span class="classname">TestArray</span> {

   <span class="classn">public static void</span> main(<span class="classname">String</span>[] args) {
      <span class="classn">double</span>[] myList = {1.9, 2.9, 3.4, 3.5};

      <span class="comment">// Print all the array elements</span>
      <span class="classn">for</span> (<span class="classn">double</span> element: myList) {
         <span class="classname">System</span>.<span class="classn">out</span>.println(element);
      }
   }
}
</pre>


<p>This would produce the following result:</p>


<pre class="inset">
<span class="print">1.9
2.9
3.4
3.5</span>
</pre>


<h2>Passing Arrays to Methods:</h2>
<p>Just as you can pass primitive type values to methods, you can also pass arrays to methods. For example, the following method displays the elements in an int array:</p>


<pre class="inset"> 
<span class="classn">public static void</span> <span class="classname">printArray</span>(<span class="classn">int</span>[] array) {
  <span class="classn">for</span> (<span class="classn">int</span> i = 0; i < array.length; i++) {
    <span class="classname">System</span>.<span class="classn">out</span>.print(array[i] + " ");
  }
}
</pre>


<p>You can invoke it by passing an array. For example, the following statement invokes the printArray method to display 3, 1, 2, 6, 4, and 2:</p>


<pre class="inset"> 
printArray(<span class="classn">new int</span>[]{3, 1, 2, 6, 4, 2});
</pre>


<h2>Returning an Array from a Method:</h2>
<p>A method may also return an array. For example, the method shown below returns an array that is the reversal of another array:</p>


<pre class="inset">
<span class="classn">public static int</span>[] <span class="classname">reverse</span>(int[] list) {
  <span class="classn">int</span>[] result = <span class="classn">new</span> int[list.length];

  <span class="classn">for</span> (<span class="classn">int</span> i = 0, j = result.length - 1; i < list.length; i++, j--) {
    result[j] = list[i];
  }
  <span class="classn">return</span> result;
}
</pre>

<div>
<a href="Java-BasicOperators.php" target="iframe_content" class="button">PREV</a>
<a href="Java-Methods.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>