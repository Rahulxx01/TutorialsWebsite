<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>
<body>
<h1 align="center">Unions</h1>
<hr>
<h2 align="left">Structures</h2>
     <p>
         A structure is a collection of elements which may not be of the same data type. An array is also a collection of elements but necessarily of same data type. 
         A structure specification may be given as <br>

 <pre class="inset">
<i> struct tag</i>
{
	 member 1 declarartion;
	member 2 declarartion;
	 .....
	member m declarartion;
};
	
</pre>

		<p> In this declaration, struct is the required keyword, tag is a name that identifies structures of this type. The individual members can be ordinary variables, pointers, arrays or other
		 structures. The member names within a particular structure must be <b>distinct</b> from one another, though a member name can be the same as the variable name defined outside the structure.
		 A storage class cannot be assigned to an individual member and individual members cannot be initialized within a structure. Once the structure is specified, individual structure type
		 variables can be declared as follows: <i>storage-class  struct tag  variable 1, variable 2, ....,variable n; </i>  here the storage-class is optional and specifies the storage class of variables.
		 struct is the required keyword tag is name that appeared in the structure specification and variable 1, variable 2, .... , variable n are structure variables of type tag. 
		 It is possible to combine the structure variabe declararion with structure specification as shown below.</p>

 <pre class="inset">
<i>{
		member 1 declararion;
		member 2 declararion;
        .....
		member m declaration;  
</i>
</pre>

	<p> The tag is <b>optional</b> when we combine structure variable declaration with structure specification.
         A structure may be defined as a member of another structure. In such situations, the specification of embedded structure must appear before the specification of the outer structure.
         of the outer structure. The members of the structure variable can be assigned initial values in much the same manner as the elements of an array. The initial values must appear in the order 
         in which they will be assigned to  their corresponding structure members, enclosed in braces and separated by commas. The general form is :<br>
         <i> stoarge-class struct tag variable = {value 1, value 2,..., value m}; </i>
         where value 1 refers to the value of the first member, value 2 refers to the value of the second member and so on.
     </p>
<h2 align="left">Processing a structure</h2>
     <p>
         A structure must be processed only on member by member basis. A structure member can be accessed using the syntax  <i>variable.member</i> where <i>variable</i> refers to the name of a structure 
         and <i>member</i> refers to the name of a structure variable and the member refers to the name of the member within the structure. The dot(.) operator or the period operator that speifies the 
         variable name from the member name is an operator  of the highest precedence and its associativity is left-to-right. More complex expressions involving repeated use of the dot operator may also be written.
         For example, if a structure member is itself a structure , then the member of the embedded structure can be accessed by writing  <i>variable.member.submember</i>
         where member refers to the name of the <i>member</i> within the outer structure and the <i>submember</i> refers to the name of the member within the embedded strucure. Similarly, if a structure 
         member is an array element can be accessed by writing   <i>variable.member[expression]</i>
         where <i>expression</i> is a non-negative value that indicates the array element. 
          The period operator is a member of the highest precedence group. This operator takes precedence over the unary operators as well as the various arithmetic, relational, logical and assignment operators. For example,
         an expression of  the form ++variable.member is equivalent to the ++operator which will apply to the structure member not the entire variable. Similarly, the expression 
         <i>&variable.member</i> is equivalent to <i>&(variable.member)</i> Thus the expression accesses the address of the structure member, not the starting address of the structure variable.
         The use of period(.) operator can be extended to arrays of structures by writing <i>array-name[expression].member</i> where <i>array-name</i> refers to the array of structures and 
         <i>array-name[expression].member</i> will refer to a specifi member within a particular structure.
         Most newer versions permit entire structures to be assigned to one another provided the structures have the same composition i.e. the structure variables are of the same type.
         This feature is included in the new ANSI standard.
     </p>
<h2 align="left"><b>Unions</b></h2>
     <p>
         Unions and structures are almost same. A union contains members whose data types may not be the same. The only difference between them lies in their memory allocation.
         The members that compose a union all share the same storage area whithin the computer's memory. However, each member within a structure is assigned its own unique storage area. Thus, unions are used to conserve memory.
         Unions are useful for programs in which there are many members and values need not be assigned to all the members at the same time. In other words, Unions are useful when only one member is 
         required at a time.
     </p>
     <p>Consider the following program for example:<br>
     <b>Program to create an array of structure to store details of almost 100 employees and sort it according to employees ID. Employee details are as follows:
         1) Employee Name, 2) Employee ID, 3) Employee Salary </b> </p>

<pre class="inset">
<span class="classname">#include</span> <span class="print">&ltstdio.h&gt</span>
<span class="classname">#include</span> <span class="print">&ltconio.h&gt</span>
			 
void main()
{
	struct employee
    {
	  char name[20] ;
	  int id ;
	  float salary;
    };
<span class="comment">  // Some compilers do not allow float member in a structure. In that case make salary to be of data type int </span>
	struct employee e[100] , temp;
	int i , j , n;
	clrscr();
			 
	printf("Enter the number of employees: ") ;
	scanf("%d", &n);
				 
	 printf("Enter employee name, id and salary for all employees: \n") ;
	for(i=0 ; i&ltn ; i++)
		scanf("%s %d %f" , e[i].name , &e[i].id , &e[i].salary) ;
					 
	for(i=0 ; i&ltn-1 ; i++ )
		 for(j=0 ; j&ltn-1-i ; j++)
			if(e[j].id &gt e[j+1].id)
			 {
			    temp=e[j];    e[j]=e[j+1];    e[j+1]=temp;			 
			 }
			 printf("\n List in ascending order of employee id is as shown:\n");
			 for(i=0 ; i&ltn ; i++)
				printf("%s %d %f\n" , e[i].name , e[i].id , e[i].salary) ;
	getch();
}
</pre>


<div>
<a href="C-Pointers.php" target="iframe_content" class="button">PREV</a>

</div>

</body>
</html>