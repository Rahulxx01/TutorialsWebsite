<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">



</head>

<body>
     <h1 align="center">Fundamental</h1>
         <hr>
	<h2>The C Character Set</h2>
<p>
C uses letters A to Z in lowercase and uppercase, the digits 0 to 9, certain special characters, and white spaces to form basic program elements (e.g variables,
constants, expressions etc.)
The special characters are:</p>

<pre class="inset">  + &#45  * /  = % & # ! ? ^ &#34; &#39; /  | &#60; &#62; ( ) [  ]  {  } : ; . , ~ @ !</pre>

<p>  The white spaces used in C programs are: blank space, horizontal tab, carriage return, new line and form feed.</p>

<h2> Idenifiers And Keywords</h2>
<p>
	 Identifiers are names given to various program elements such as variables, functions, and arrays. 
	 Identifiers consist of letters and digits, in any order, except that the first character must be a letter. 
	 Both uppercase and lowercase letters are permitted and the underscore may also be used, as it is also regarded as a letter. 
	 Uppercase and lowercase letters are not equivalent, thus not interchangeable. This is why it is said that C is case sensitive. 
	 An identifier can be arbitrarily long.
</p>
<p>
     The same identifier may denote different entities in the same program, for example, a variable and an array may be denoted by the same identifier, 
     example below.
</p>

<p>    int sum, average, A[10]; // sum, average and the array name A are all identifiers.</p>

<p>            The func predefined identifier:-</p>
            <p>   The predefined identifier func() makes a function name available for use within the function. Immediately following the opening brace of each function definition, 
                   _ _func_ _ is implicitly declared by the compiler in the following way:</p>

<p>  static const char func[] = "function-name";</p>
<p>  where function name is the name of the function().</p>
<h2> Consider The Following Example:</h2>

<pre class="inset">
<span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
<span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>
                        void func1(void) {
                        printf("%d",func);
                        return;
                                          }  
                        int main() {
                        myfunc();
                        }
</pre>


<h2>  The output would be</h2>
<p>   func</p>

     <h2>Keywords</h2>
<p>
     Keywords are reserved words that have standard pre defined meanings. These keywords can only be used for their intended purpose; they cannot be used
	 as programmer defined identifiers. 
</p>
<p>
	 
	 Examples of some keywords are:
	 int, main, void, if
</p>	 
	
     <h2>Data Types</h2>
<p>
     Data Values passed in a program may be of different types. Each of these data types are represented differently within the computer's memory and have 
     different memory requirements. These data types can be augmented by the use of data types qualifiers/modifiers.
</p>    
<p>  The data types supported in C are described below</p>

<h2> int</h2>
<p> 
     It is used to store an integer quantity. An ordinary int can store a range of values from INT_MIN to INT_MAX as defined by in header file<limits.h>.
     The <i>type of modifiers</i> for the int data types are signed,unsigned, short, long and long long.
</p>
<ul>
    <li>A short int occupies 2 bytes of space and a long int occupies 4 bytes.</li>
	<li>A short unsigned int occupies 2 bytes of space but it can store only positive values in the range of 0 to 65535.</li>
	<li>An unsigned int has the same memory requirements as a short unsigned int. However, in case ofan ordinary int, the leftmost bit is reserved for the sign.</li>
	<li>A long unsigned int occupies 4 bytes of memory and stores positive integers in the range of 0 to 4294967295.</li>
	<li>By default the int data types is signed</li>
	<li>A long long int occupies 64 bits of memory. It may be signed or unsigned. The signed long long int stores values from -9,223,372,036,854,775,808 to
	     9,223,372,036,854,775,807 and the unsigned long long ranges from 0 to 18,446,744,073,709,551,615.</li>
</ul>


<h2>char</h2>
<p>
     It stores a single character of data belonging to the C character set. It occupies 1 byte of memory and stores any value from the C character set. The type
	 of modifiers for char are <b>signed</b> and <b>unsigned</b>.
</p>
<p>
     Both signed and unsigned char occupy 1 yte of memory but the range of values differ. An unsigned char can store values from 0 to 255 and a signed char can
     store values from -128 to +127. Each char type has an equivalent integer interpretation, so that a char is really a special kind of short integer. By default,
     char is unsigned.
</p>

<h2>float</h2>
<p>
     It is used to store real umbers with single precision i.e. a precision of 6 digits after decimal point. It occupies 4 byte of memory. The type modifier for float
	 is <b>long</b>. It has the same memory requirements as double.
</p>

<h2> double</h2>
<p>
     It is used to store real numbers with double precision. It couples 8 bytes of memory. The type modifier for double is long. A long double occupies 10 bytes of 
     memory. 
</p>

<h2> void</h2>
<p>
     It is used to specify an empty set containing no values. Hence, it occupies 0 bytes of memory.
</p>

<h2> _Bool</h2>
<p>
     A boolean data type, which is an unsigned integer type, that can store only two values, 0 and 1. Include the file <stdbool.h> when using _Bool.
</p>

<h2> _Complex</h2>
<p>
     It is used to store complex numbers. There are three complex types: float _Complex, double _Complex, and long double _ComplexIt is found in the 
	 &ltcomplex.h&gt file.  	 
</p>

<h2> Arrays</h2>
<p>
     An array is an identifier that refers to a collection of data items of that have the same name. They must also have the same data type 
	 (i.e. all characters, all integers etc.).
</p>
<p>	 
	 Each data item is represented by its array element. The individual array elements are distinguished from one another by their subscripts.
</p>

<h2> Syntax For Array Declaration</h2>
<p>
     Suppose arr is a 5 element integer array which stores the numbers 5, 4, 2, 7, 3 in that order. The first element is referred to as arr[0]which stores the
	 data value 5, the second element is arr[1]	 which stores the value 4 and so on. The last element is arr[4] which stores the value 3.
	 The subscript assosciated with each element is shown in square braces. For an n-element array the subscripts will range from 0 to n-1.
     In case of a character array of size n, the array will be able to store only n-1 elements as a null character is automatically stored at the end of the 
	 string to terminate it. Therefore, a character array letter that stores 5 elements  must be declared of size 6. The fifth element would be stored at 
	 letter[4] and letter[5] will store the null character.	 
</p>

<h2> Constants</h2>
<p>
     A constant is an identifier whose value remains unchanged throughout the program. To declare any constant the syntax is:
	 <b>const datatype varname = value</b>; where <b>const</b> is a keyword that declares the variable to be a fixed value entity.
     There are four basic types of constants inC. They are integer constants, floating point constants, character constants and string constants. Integer 
     and floating point constants cannot contain commas or blank spaces; but they can be prefixed by a minus sign to indicate a negative quantity.

	 <ul> 
	 <li><b>Integer Constants</b></li>
	 
	     An integer constant is an integer valued number. It consists of a sequence of digits. Integer constants can be written in the following three number 
		 systems:
         Decimal(base 10): A decimal constant can consist of any combination of digits from 0 to 9. 
		 If it contains two or more digits, the first digit must be something other than 0, for example: const int size =50;
         Octal(base 8): An octal constant can consist of any combination of digits from 0 to 7. 
		 The first digit must be a 0 to identify the constant as an octal number, for example: const int a= 074; const int b= 0;
         Hexadecimal constant(base 16): A hexadecimal constant can consist of any combination of digits from 0 to 9 and a to f (either uppercase or lowercase). It must begin with 0x or oX to identify the constant as a hexadecimal number, for example: const int c= 0x7FF;
         Integer constants can also be prefixed by the type modifiers unsigned and long. Unsigned constants must end with u or U, 
		 long integer constants must end with lor L and unsigned long integer constants must end with ul or UL. Long long integer constants end with LL or ll. 
		 Unsigned long long end with UL or ul


</p>
	 
	 <li><b> Floating Point Constant </b></li>
	
	     Its a base 10 or a base 16 number that contains a decimal point or an exponent or both. In case of a decimal floating point constant the exponent the base 10 is replaced by e or E. 
		 Thus, 1.4 *10^-3 would be written as 1.4E-3 or 1.4e-3.
         In case of a hexadecimal character constant, the exponent is in binary and is replaced by p or P. For example:
         <b>
         <p>const float a= 5000. ;</p>
         <p>const float b= .1212e12;</p>
         <p>const float c= 827.54;</p>
		 </b>
	</ul>
	<p>		 
         Floating point constants are generally double precision quantities that occupy 8 bytes. 
		 In some versions of C, the constant is appended by Fto indicate single precision and by L to indicate a long floating point constant.
	
</p>
	
<div>
<a href="C-Problem Definition.php" target="iframe_content" class="button">PREV</a>
<a href="C-Operators and expression.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>