<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h1 align="center"> Operators and expression </h1>
<hr>
<h2 align="left"> Types Of Operators </h2>
<ul>
     <li> Arithmetic Operators </li>
	 <li> Assignment Operators </li>
	 <li> Relational Operators </li>
	 <li> Logical Operators </li>
	 <li> Bit wise Operators </li>
	 <li> Conditional Operators (ternary operators) </li>
	 <li> Increment/decrement Operators </li>
	 <li> Special Operators </li>
</ul>
     
     <table border="1" align="center" width="500" height="400">
	 <tr>
	     <th> TYPES OF OPERATORS </th>
		 <th>  DESCRIPTION </th>
	 </tr>
	 <tr> 
	     <td width="100">Arithmetic Operators</td>
		 <td>These are used to perform mathematical calculations like addition, subtraction, multiplication, division and modulus</td>
	 </tr>
	 <tr>
	     <td>Assignment Operators</td>
		 <td>These are used to assign the values for the variables in C programs.</td>
	</tr>
	<tr> 
	     <td>Relational Opeearators</td>
		 <td>These operators are used to compare the value of two variables.</td>
	 </tr>
	 <tr>
	     <td>Logical Operators</td>
	     <td>These operators are used to perform logical operations on the given two variables.</td>
	 </tr>
	 <tr>
	     <td>Bit wise Operators</td>
		 <td>These operators are used to perform bit operations on given two variables.</td>
	 </tr>
	 <tr>
	     <td>Conditional Operators (ternary operators)</td>
		 <td>Conditional operators return one value if condition is true and returns another value is condition is false.</td>
	 </tr>
	 <tr>
	     <td>Increment/decrement Operators</td>
		 <td>These operators are used to either increase or decrease the value of the variable by one.</td>
	 </tr>
	 <tr>
	     <td>Special Operators</td>
		 <td>&, *, sizeof( ) and ternary operators.</td>
	 </table>
	
<h2 align="left"><b> Arithmetic Operators</b>
    
	 <table border="1" align="center" width="500" height="400">
	 <tr>
         <th><b>Arithmetic Operators</b></th>
         <th><b>Operations</b></th>
         <th><b>Examples</b></th>
     </tr>
     <tr>
         <td> + </td>
         <td> Addition </td>
		 <td> A+B </td>
	 </tr>
	 <tr>
	     <td> - </td>
		 <td> Subtraction </td>
		 <td> A-B </td>
	 </tr>
	 <tr>
	     <td> * </td>
		 <td> Multiplication </td>
		 <td> A*B </td>
	 </tr>
	 <tr>
	     <td> / </td>
		 <td> Division </td>
		 <td> A/B </td>
	 </tr>
	 <tr>
	     <td> % </td>
		 <td> Modulus </td>
		 <td> A%B </td>
	 </tr>
	 </table>
	
     
	 <h2 align="left"> Consider for example: </h2>
     
<pre class="inset">
#include &ltstdio.h&gt
#include &ltconio.h&gt
int main()
{
	int a=40,b=20, add,sub,mul,div,mod;
	add=a+b;
	sub=a-b;
	mul=a*b;
	div=a/b;
	mod=a%b;
	printf("Addition of a,b is: %d\n",add);
	printf("Subtraction of a,b is: %d\n",sub);
	printf("Multiplication of a,b is: %d\n",mul);
	printf("Division of a,b is: %d\n",div);
	printf("Modulus of a,b is: %d\n",div);
}
</pre>

	
    <h2 align="left"> Output : </h2>

<pre class="inset">
Addition of a, b is : 60
Sbtraction of a, b is : 20
Multiplication of a, b is : 800
Division of a, b is : 2
Modulus of a, b is : 0
</pre> 


<div>
<a href="C-Fundamentals.php" target="iframe_content" class="button">PREV</a>
<a href="C-Data input and output.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>

</body>
</html>