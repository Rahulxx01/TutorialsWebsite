<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center">Java - Basic Datatypes</h1>
<hr> 

<p>Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.</p>

<p>Based on the data type of a variable, the operating system allocates memory and decides what can be stored in the reserved memory. 
Therefore, by assigning different data types to variables, you can store integers, decimals, or characters in these variables.</p>

<p>There are two data types available in Java:</p>
<ul>
	<li>Primitive Data Types</li>

	<li>Reference/Object Data Types</li>
</ul>
<h2>Primitive Data Types:</h2>
<p>There are eight primitive data types supported by Java. Primitive data types are predefined by the language and named by a keyword. 
Let us now look into detail about the eight primitive data types.</p>

<h2>byte:</h2>
<ul>
	<li>Byte data type is an 8-bit signed two's complement integer.</li>

	<li>Minimum value is -128 (-2^7)</li>

	<li>Maximum value is 127 (inclusive)(2^7 -1)</li>

	<li>Default value is 0</li>

	<li>Byte data type is used to save space in large arrays, mainly in place of integers, since a byte is four times smaller than an int.</li>

	<li>Example: byte a = 100 , byte b = -50</li>
</ul>
<h2>short:</h2>
<ul>
	<li>Short data type is a 16-bit signed two's complement integer.</li>

	<li>Minimum value is -32,768 (-2^15)</li>

	<li>Maximum value is 32,767 (inclusive) (2^15 -1)</li>

	<li>Short data type can also be used to save memory as byte data type. A short is 2 times smaller than an int</li>

	<li>Default value is 0.</li>

	<li>Example: short s = 10000, short r = -20000</li>
</ul>
<h2>int:</h2>
<ul>
	<li>Int data type is a 32-bit signed two's complement integer.</li>

	<li>Minimum value is - 2,147,483,648.(-2^31)</li>

	<li>Maximum value is 2,147,483,647(inclusive).(2^31 -1)</li>

	<li>Int is generally used as the default data type for integral values unless there is a concern about memory.</li>

	<li>The default value is 0.</li>

	<li>Example: int a = 100000, int b = -200000</li>
</ul>
<h2>long:</h2>
<ul>
	<li>Long data type is a 64-bit signed two's complement integer.</li>

	<li>Minimum value is -9,223,372,036,854,775,808.(-2^63)</li>

	<li>Maximum value is 9,223,372,036,854,775,807 (inclusive). (2^63 -1)</li>

	<li>This type is used when a wider range than int is needed.</li>

	<li>Default value is 0L.</li>

	<li>Example: long a = 100000L, long b = -200000L</li>
</ul>
<h2>float:</h2>
<ul>
	<li>Float data type is a single-precision 32-bit IEEE 754 floating point.</li>

	<li>Float is mainly used to save memory in large arrays of floating point numbers.</li>

	<li>Default value is 0.0f.</li>

	<li>Float data type is never used for precise values such as currency.</li>

	<li>Example: float f1 = 234.5f</li>
</ul>
<h2>double:</h2>
<ul>
	<li>double data type is a double-precision 64-bit IEEE 754 floating point.</li>

	<li>This data type is generally used as the default data type for decimal values, generally the default choice.</li>

	<li>Double data type should never be used for precise values such as currency.</li>

	<li>Default value is 0.0d.</li>

	<li>Example: double d1 = 123.4</li>
</ul>
<h2>boolean:</h2>
<ul>
	<li>boolean data type represents one bit of information.</li>

	<li>There are only two possible values: true and false.</li>

	<li>This data type is used for simple flags that track true/false conditions.</li>

	<li>Default value is false.</li>

	<li>Example: boolean one = true</li>
</ul>
<h2>char:</h2>
<ul>
	<li>char data type is a single 16-bit Unicode character.</p></li>

	<li>Minimum value is '\u0000' (or 0).</li>

	<li>Maximum value is '\uffff' (or 65,535 inclusive).</li>

	<li>Char data type is used to store any character.</li>

	<li>Example: char letterA ='A'</li>
</ul>
<h2>Reference Data Types:</h2>
<ul>
	<li>Reference variables are created using defined constructors of the classes. They are used to access objects. 
	These variables are declared to be of a specific type that cannot be changed. For example, Employee, Puppy etc.</li>

	<li>Class objects, and various type of array variables come under reference data type.</li>

	<li>Default value of any reference variable is null.</li>

	<li>A reference variable can be used to refer to any object of the declared type or any compatible type.</li>

	<li>Example: Animal animal = new Animal("giraffe");</li>
</ul>
<h2>Java Literals:</h2>
<p>A literal is a source code representation of a fixed value. They are represented directly in the code without any computation.</p>

<p>Literals can be assigned to any primitive type variable. For example:</p>

<pre class="inset">
<span class="classn">byte</span> a = 68;
<span class="classn">char</span> a = 'A'
</pre>


<p>byte, int, long, and short can be expressed in decimal(base 10), hexadecimal(base 16) or octal(base 8) number systems as well.</p>

<p>Prefix 0 is used to indicate octal and prefix 0x indicates hexadecimal when using these number systems for literals. For example:</p>

<pre class="inset">
<span class="classn">int decimal</span> = 100;
<span class="classn">int</span> octal = 0144;
<span class="classn">int</span> hexa =  0x64;
</pre>


<p>String literals in Java are specified like they are in most other languages by enclosing a sequence 
of characters between a pair of double quotes. Examples of string literals are:</p>


<pre class="inset">
<span class="print">"Hello World"
"two\nlines"
"\"This is in quotes\""</span>
</pre>


<p>String and char types of literals can contain any Unicode characters. For example:</p>


<pre class="inset">
<span class="classn">char</span> a = <span class="print">'\u0001';</span>
<span class="classname">String</span> a = <span class="print">"\u0001";</span>
</pre>
	

<p>Java language supports few special escape sequences for String and char literals as well. They are:</p>
<table>
  <tr>
    <th>Notation</th>
    <th>Character represented</th>
  </tr>
  <tr>
    <td>\n</td>
    <td>Newline (0x0a)</td>
  </tr>
  <tr>
    <td>\r</td>
    <td>Carriage return (0x0d)</td>
  </tr>
  <tr>
    <td>\f</td>
    <td>Formfeed (0x0c)</td>
  </tr>
  <tr>
    <td>\b</td>
    <td>Backspace (0x08)</td>
  </tr>
  <tr>
    <td>\s</td>
    <td>Space (0x20)</td>
  </tr>
  <tr>
    <td>\t</td>
    <td>tab</td>
  </tr>
  <tr>
    <td>\"</td>
    <td>Double quote</td>
  </tr>
  <tr>
    <td>\'</td>
    <td>Single quote</td>
  </tr>
  <tr>
    <td>\\</td>
    <td>backslash</td>
  </tr>
  
</table>

<div>
<a href="Java-ObjectClasses.php" target="iframe_content" class="button">PREV</a>
<a href="Java-BasicOperators.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>

</html>