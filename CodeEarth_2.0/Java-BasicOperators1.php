<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ProgramTable1.css">
</head>

<body bgcolor="#B39DDB">
<h1 align="center">C++ - Basic Operators</h1>
<hr> 

<p>Java provides a rich set of operators to manipulate variables. We can divide all the Java operators into the following groups:</p>
<ul>
	<li><p>Arithmetic Operators</p></li>
	<li><p>Relational Operators</p></li>
	<li><p>Bitwise Operators</p></li>
	<li><p>Logical Operators</p></li>
	<li><p>Assignment Operators</p></li>
	<li><p>Misc Operators</p></li>
</ul>
<h1>The Arithmetic Operators:</h1>
<p>Arithmetic operators are used in mathematical expressions in the same way that they are used in algebra. The following table lists the arithmetic operators:</p>

<p>Assume integer variable A holds 10 and variable B holds 20, then:</p>
<table>
  <tr>
    <th>SR.NO</th>
    <th>Operator and Example</th>
  </tr>
  <tr>
    <td>1</td>
    <td>
		<p>+ ( Addition )</p>
		<p>Adds values on either side of the operator</p>
		<p><b>Example:</b> A + B will give 30</p>
	</td>
  </tr>
  <tr>
    <td>2</td>
    <td>
		<p>- ( Subtraction )</p>
		<p>Subtracts right hand operand from left hand operand</p>

		<p><b>Example:</b> A - B will give -10</p>
	</td>
  </tr>
  <tr>
    <td>3</td>
    <td>
		<p>* ( Multiplication )</p>
		<p>Multiplies values on either side of the operator</p>

		<p><b>Example:</b> A * B will give 200</p>
	</td>
  </tr>
  <tr>
    <td>4</td>
    <td>
		<p>/ (Division)</p>
		<p>Divides left hand operand by right hand operand</p>

		<p><b>Example:</b> B / A will give 2</p>
	</td>
  </tr>
  <tr>
    <td>5</td>
    <td>
		<p>% (Modulus)</p>
		<p>Divides left hand operand by right hand operand and returns remainder</p>

		<p><b>Example:</b> B % A will give 0</p>
	</td>
  </tr>
  <tr>
    <td>6</td>
    <td>
		<p>++ (Increment)</p>
		<p>Increases the value of operand by 1</p>

		<p><b>Example:</b> B++ gives 21</p>
	</td>
  </tr>
  <tr>
    <td>7</td>
    <td>
		<p>-- ( Decrement )</p>
		<p>Decreases the value of operand by 1</p>

		<p><b>Example:</b> B-- gives 19</p>
	</td>
  </tr>
  
  
</table>

<h1>The Relational Operators:</h1>
<p>There are following relational operators supported by Java language</p>

<p>Assume variable A holds 10 and variable B holds 20, then:</p>

<table>
  <tr>
    <th>SR.NO</th>
    <th>Operator and Example</th>
  </tr>
  <tr>
    <td>1</td>
    <td>
		<p>== (equal to)</p>
		<p>Checks if the values of two operands are equal or not, if yes then condition becomes true.</p>
		<p><b>Example:</b>  (A == B) is not true.</p>
	</td>
  </tr>
  <tr>
    <td>2</td>
    <td>
		<p>!= (not equal to)</p>
		<p>Checks if the values of two operands are equal or not, if values are not equal then condition becomes true.</p>

		<p><b>Example:</b> (A != B) is true.</p>
	</td>
  </tr>
  <tr>
    <td>3</td>
    <td>
		<p>> (greater than)</p>
		<p>Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true.</p>

		<p><b>Example:</b> (A > B) is not true.</p>
	</td>
  </tr>
  <tr>
    <td>4</td>
    <td>
		<p>< (less than)</p>
		<p>Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true.</p>

		<p><b>Example:</b> (A < B) is true.</p>
	</td>
  </tr>
  <tr>
    <td>5</td>
    <td>
		<p>>= (greater than or equal to)</p>
		<p>Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true.</p>

		<p><b>Example:</b> (A >= B) is not true.</p>
	</td>
  </tr>
  <tr>
    <td>6</td>
    <td>
		<p><= (less than or equal to)</p>
		<p>Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true.</p>

		<p><b>Example:</b> (A <= B) is true.</p>
	</td>
  </tr>
  
  
</table>

<h1>The Logical Operators:</h1>
<p>The following table lists the logical operators:</p>

<p>Assume Boolean variables A holds true and variable B holds false, then:</p>

<table>
  <tr>
    <th>SR.NO</th>
    <th>Operator and Example</th>
  </tr>
  <tr>
    <td>1</td>
    <td>
		<p>&& (logical and)</p>
		<p>Called Logical AND operator. If both the operands are non-zero, then the condition becomes true.</p>
		<p><b>Example:</b>  (A && B) is false.</p>
	</td>
  </tr>
  <tr>
    <td>2</td>
    <td>
		<p>|| (logical or)</p>
		<p>Called Logical OR Operator. If any of the two operands are non-zero, then the condition becomes true.</p>

		<p><b>Example:</b> (A || B) is true.</p>
	</td>
  </tr>
  <tr>
    <td>3</td>
    <td>
		<p>! (logical not)</p>
		<p>Called Logical NOT Operator. Use to reverses the logical state of its operand. If a condition is true then Logical NOT operator will make false.</p>

		<p><b>Example:</b> !(A && B) is true.</p>
	</td>
  </tr>
 
  
</table>

<h1>The Assignment Operators:</h1>
<p>There are following assignment operators supported by Java language:</p>

<table>
  <tr>
    <th>SR.NO</th>
    <th>Operator and Description</th>
  </tr>
  <tr>
    <td>1</td>
    <td>
		<p>=</p>
		<p>Simple assignment operator, Assigns values from right side operands to left side operand.</p>
		<p><b>Example:</b>  C = A + B will assign value of A + B into C</p>
	</td>
  </tr>
  <tr>
    <td>2</td>
    <td>
		<p>+=</p>
		<p>Add AND assignment operator, It adds right operand to the left operand and assign the result to left operand.</p>

		<p><b>Example:</b> C += A is equivalent to C = C + A</p>
	</td>
  </tr>
  <tr>
    <td>3</td>
    <td>
		<p>-=</p>
		<p>Subtract AND assignment operator, It subtracts right operand from the left operand and assign the result to left operand.</p>

		<p><b>Example:</b> C -= A is equivalent to C = C - A</p>
	</td>
  </tr>
  <tr>
    <td>4</td>
    <td>
		<p>*=</p>
		<p>Multiply AND assignment operator, It multiplies right operand with the left operand and assign the result to left operand.</p>

		<p><b>Example:</b>  C *= A is equivalent to C = C * A</p>
	</td>
  </tr>
  <tr>
    <td>5</td>
    <td>
		<p>/=</p>
		<p>Divide AND assignment operator, It divides left operand with the right operand and assign the result to left operand</p>

		<p><b>Example:</b> C /= A is equivalent to C = C / A</p>
	</td>
  </tr>
  <tr>
    <td>6</td>
    <td>
		<p>%=</p>
		<p>Modulus AND assignment operator, It takes modulus using two operands and assign the result to left operand.</p>

		<p><b>Example:</b> C %= A is equivalent to C = C % A</p>
	</td>
  </tr>
  
  
</table>
<div>
<a href="EnvipentsetupC++.php" target="iframe_content" class="button">PREV</a>
<a href="DataTypeC++.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>

</body>
</html>