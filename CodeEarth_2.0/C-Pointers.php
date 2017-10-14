<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>

<body>
<h2 align="center">Pointers</h2>
<hr>
<h2 align="left">Introduction to Pointers</h2>
     <p>
	     A pointer is itself a variable which stores memory address of some other variable. It does not contain any integer, float, character or double value but does not merely an address
		 of some variable. Pointer variables, like all other variables, must be declared before they may be used in a C program. The interpretation of a pointer 
		 declaration is somewhat different than the interpretation of other variable declarations. When a pointer variable is declared, the variable name must be preceded
		 by an asterisk(*). This identifies the fact that the variable is a pointer. The data type that appears in the declarartion refers to the variable to whom the pointer
		 points rather than the pointer itself. Thus, a pointer declaration may be written in general terms as <br>
         <i> data-type *ptvar</i> <br>
         For example, the statement <br>
         <i> int *pv, *px; </i>
         declares pv and px as pointers which can point to variables of data type <i>int</i> i.e. they can store address of variables of data type <i>int.</i>
     </p>
<h2 align="left">Referencing and Dereferencing</h2>
     <p>
         The address operator (&) is a unary operator which gives the address of its operand. It is also called reference operator. Thus, if x is a variable then the expression
         &x gives the address of memory location of x. If x occupies more than one byte of computer memory, then &x returns the starting address of x. Consider the following
         statements:</p> 
 
<pre class="inset">
 <i> int x;
 int *p; </i>
</pre>

        <p> the first statement creates a simple integer variable x. The second statement creates a pointer p which is capable of pointing to any variable of data type int. It 
         should be noted that p is currently <b>not pointing</b>to any variable. We may now write  <i>p=&x;</i> this statement stores address of variable x in pointer p. We
         may now say that p points to x or <b>p references to x.</b> This procedure of storing address of x in p is called <b><i>referencing</i></b> and it is 
         achieved by using reference operator &. <br>
         Consider the following statements</p> 

<pre class="inset">
<i> int x=5;
 int *p;
p = &x;
</i>
</pre>

		 <p>
         The value 5 in the above example can be accessed in two ways, the first being that we <b>directly</b> write x. Another <b>indirect</b> way is writing the expression
		 *p, where * is a unary operator called "Value at address" operator or indirection operation or dereference operator. it can be used only with a pointer variable.
		 When used with a pointer, it gives us the value of the variable to whom the pointer points. The placement of indirection operator before a pointer is said to <b><i>deference</i></b>
		 the pointer and this procedure is sometimes called <b>dereferncing.</b></p>
	 </p>
<h2 align="left">Parameter Passing Techniques</h2>
     
	     <ul>
		     <li><b><i>call by value</i></b>parameter passing function in C</li>
			 
			     In this technique, the compiler passes the value of the argument. When a single value is passed to a function as an actual argument, the value of the actual argument
				 is copied to the formal argument. Now the value of the corresponding formal argument can be altered within the function, but the value of the actual argument 
				 can be altered within the function, but the value of the actual argument within the calling portion will remain the same. <b>Thus the changes done in the function will not be reflected 
				 the calling portion.</b> This procedure of passing value of an argument to a function is known as <i>call by value</i> or <i>pass by value.</i> Passing an argument by value 
				 has advantages and disadvantages as well. Its advantages are as follows:<br>
				 Using the method of call by value an actual argument can be written as an expression rather than being restricted to a single variable. For example, cube(a+b-c) is a valid function call
				 which will return cube of a single quantity (a+b-c). If the actual argument is expressed as a single variable, then its value is protected from alterations within the function.
				The second advantage can also be viewed as a disadvantage since the method does not allow the information to be transferred back to the calling portion of the program. Thus, passing by value permits
				only one-way transfer of information.
			 
			 <li><b><i>call by address</i></b>parameter passing function in C</li>
			 
			     In this technique the compiler passes the value of the argument. When a single value of the actual argument is <b>copied</b> into the formal argument. Here,
				 the copiler passes the address of the argument instead of passing its value. Now any change that is mae to the data itemvwill be reflected in both the function
				 and the calling portion. the <i>Call by pointer</i> method is desirable since, the use of a pointer as a function argument permits the corresponding data item to be 
				 <i>algtered permanently</i> from within the functipn. 
			 
		 </ul>
		 <p>
  		         The way a pointer can be passed to a function, similarly a pointer can also be returned by a function to the calling routine. To do so, the function definition and the corresponding
		          function declaration must indicate that the function will return a pointer. This is accomplished by preceeding the function name with an asterisk(*) and the asterisk should be preceded
		          by the data type. Consider the following example:</p> <br>
		         <p> <i> float *sum(); </i><br>
		          In this case, the function <i>sum</i> will return a pointer  to a float to the calling routine. The asterisk must appear in both the function definition and the function declaration.
                 </p>	
         <h2 align="left">Operations on pointers or Pointer arithmetic</h2>
    
	     <ul>
		     <li>A pointer variable can be assigned the address of an ordinary variable.</li>
			 <li>A pointer variable can be assigned the value of another pointer variable provided both the pointers point to the variables of the same data type.</li>
			 <li>A pointer variable can even be compared with another pointer variable provided bozth pointers point to the variables of the same data type.<li>
			 <li>A pointer variable can be assigned a zero value. This is often done by assigning NULL to a pointer where NULL is a symbolic constant representing the value 0.</li>
			 <li>An integer quantity can be added to or subtracted from a pointer variable.</li>
			 <li>One pointer variable can be subtracted from another provided both pointers point to elements of the same array.</li>
			 <li>Consider the following example program depicting the above mentioned rules:<br></li>
		</ul>

<pre class="inset">
<span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
#define NULL 0
void main()
{
	 int a[3]={11,22,44} ;
	int *pv , *px ;
	 int v=5 , x=8 ;
					 
	pv = &v;     <span class="comment">   // Rule No.1   </span>;
	px = &x;      <span class="comment">  // Rule No.2   </span>;
					 
	printf("\n %d %d" , pv , px) ; 
					 
    printf("\n %d %d" , pv==px , px &#60;pv) ;      <span class="comment"> // Rule No.3   </span>;    
					 
	pv = px;       <span class="comment">   // Rule no.2    </span>;
					 
	px = NULL;     <span class="comment">   // Rule No.4    </span>;
	printf("\n %X %X" , pv , px) ;
					 
	printf("\n %X %X %X %X" , ++pv , --pv , pv+2 , pv+4) ;  <span class="comment">   // Rule No.5     </span>;
					 
	pv = &a[0];
	 px = &a[2];
	 printf("\n %X" , pv-px) ;  <span class="comment">   // Rule No.6    </span>;
}
</pre>
			
			<p>
		           Apart from the above mention operations , no ther operations can be performed on pointers.
		           In general,  it does not make sense to assign a constant value to a pointer variable. However, sometimes a zero value is assigned to a pointer to indicate that it holds
		           no currently. However, instead of directly assigning zero, the recommended programming practice is to define a symbolic constant NULL which has value 0, and then assign NULL
		           to the pointer. The following is an example:</p> <br>

<pre class="inset">
<i> #define NULL 0
float *px = NULL;
</i>
</pre>
	
	
	<div>
<a href="C-Arrays.php" target="iframe_content" class="button">PREV</a>
<a href="C-Unions.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>
</body>
</html>
					 
		
