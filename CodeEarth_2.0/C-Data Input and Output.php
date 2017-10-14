<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css"> 
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
</head>
<body>
<h2 align="center">Data Input And Output </h2>
<h2 align=left">Commonly used Input/Output functions:</h2>
<ul>
     <li> getchar() </li>
	 <li> putchar() </li>
	 <li> scanf() </li>
	 <li> printf() </li>
	 <li> gets() </li>
	 <li> puts() </li>
</ul>
<h2 align="left"><b> getchar() and putchar() function </b></h2>
     <p>
	     The getchar() function is a standard input function in C language. It reads a single character from the standard input device. The function does not 
		 require any arguments, though a pair of empty paranthesis must follow the word getchar(). In general getchar() function is written as:
		     <i> Character variable = getchar(); </i>
		 where <i>Character Variable</i> refers to some previously declared character variable.
		 Thus, the statement <i> x=getchar() </i>; will read a character from the keyboard and will assign it to the character variable x.
	 </p>
	 <p>
	     The putchar() function is a standard output function in C language. It displays a single character on the standard output device.
		 The character being displayed will normally be represented as a character-type variable. It must be expressed as an argument to the function, enclosed 
         in paranthesis, following the word <i> putchar. </i>
     </p>
<h2 align="left"><b> scanf() and printf() function </b></h2>
     <p>
         The scanf function can be used to read anything, that is, a numerical value or a single character or even a string.
         In general, the <i> scanf</i> function is written as:
            <i>scanf(control string, arg1, arg2,...., argn)</i>
         where control string refers to a string containing required formatting information and <i>arg1, arg2, ..... ,argn</i> are arguments that represent 
         the individual input data items.
         The arguments are written as variables or arrays, whose types match the corresponding the character groups in the control string. each variable name
         should be preceded by an <i>ampersand(&)</i>. However, array names should not begin with <i>ampersand(&)</i>
    </p>
<table border="1" align="center" width="500" height="400">
    <tr> 
         <th>format specifier or conversion character</th>
         <th>Meaning</th>
    </tr>
    <tr> 
        <td width="100"> c </td>
        <td> Data item is a single character </td>
    </tr>
     <tr>
         <td> f </td>
         <td> Data item is a floating-point value. </td>
    </tr>
    <tr>
         <td> e </td>
         <td> Data item is a floating-point value. </td>
     </tr>
    <tr>
         <td> g </td>
         <td> Data item is a floating-point value. </td>
    </tr>
    <tr>
         <td> i </td>
         <td> Data item is a decimal, octal or hexadecimal integer. </td>
    </tr>
     <tr>
         <td> d </tr>
         <td> Data item is a decimal integer. </td>
     </tr>
     <tr>
         <td> o </td>
         <td> Data item is an octal integer </td>
     </tr>
     <tr>
         <td> x </td>
         <td> Data item is a hexadecimal integer </td>
     </tr>
     <tr> 
         <td> h </td>
         <td> Data item is a short integer </td>
     </tr>
     <tr> 
         <td> u </td>
         <td> Data item is an unsigned decimal integer </td>
     </tr>
     <tr>
         <td> s </td>
         <td> Data item is a string followed by a whitespace character. </td>
     </tr>
     <tr> 
         <td> [...] </td>
         <td> Data item is a string which may include he whitespace characters. </td>
     </tr>
</table>
<h2 align="left"> gets() and puts() </h2>
    <p>
         <i>gets</i> function reads a string from the standard input device. The string may contain a blank space or a horizontal tab.
         In case of <i>gets</i>, the string will terminate with a newline character.
         <i>puts</i> function is exactly opposite of <i>gets</i> function. It is used to output/display its argument which  is a string.
     </p>
	 
 <div>
<a href="C-Operators and expression.php" target="iframe_content" class="button">PREV</a>
<a href="C-Control Statements.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>
          
           

