<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="ProgramTable.css">
<link rel="stylesheet" type="text/css" href="ContentDesign.css">
</head>
<body>
<h2 align="center">Scope of variable</h2>
<hr>
<h2 align="left">Scope and Lifetime</h2>
<p>
     The scope of a variable determines over what part of the program a variable is available for use. Lifetime of a variable is that period of program execution
     during which the variable retains its value. The variables used in a program may be broadly categorized as local or global, depending on the place of
     their declaration.<br>
     <b>Local Variables</b>
     <p> 
	     The variables declared inside a function are called as local variables of that function. These variables, as suggested by their names, can be used
         within that function only. One can say that the scope of these local variables is restricted to the function in which they are declared. These variables
         are not visible or usable outside their function. They are recreated everytime the function is executed or called. Moreover, they need to be initialized
         explicitly. If not initialized, they contain garbage values.
     </p>
     <h2>Global Variabes</h2>
     <p>
         A global Variable is that variable which is declared outside of all the functions. It can be used and even modified by any function which appears after
         declaration of that global variable. this variable is called as called as Global variable as it is available to all function definitions in the program and it has
         gobal scope i.e. scope is the entire program. In other words, it can be used <b><i>anywhre in the program.</i></b> If not initialized, these variables
         are automatically initialized to zero.
     </p>
<h2 align="left">Storage Classes</h2>
     <p>
         There are two different ways to characterize a variable: by <i>data type</i> and by <i>storage class.</i> Dataa type refers to the type of information represented by a variable
		 for example , integer number, floating point number or character. Storage class of a variable determines its scope and longevity. There are 4 different storage-class
		 specifications in C - <i>automatic, static, extern & register.</i> They are identified by keywords auto, extern, static & register respectively. The storage 
		 class associated with a variable can sometimes be estblished simply by the <b><i>place</i></b> of the variable declarartion within the program. In some situations
		 the keyword which specifies a particular storage class must bee placed at the beginning of the variable declaration.
	 </p>
<h2 align="left">Automatic Variable</h2>
     <p>
	     Automatic variables are always defined within a function and are local t the function in which they are declared; that is their scope and lifetime is confined
		 to that function. For example, a variable 'x' declared there. Automatic variables are defined in different functions it will therefore be independent of one 
		 another , even though they may have the same name. For example, a variable 'x' declared in function <i>show()</i>and a variable 'x' declared in function
         <i>main()</i> will have no relationship to each other. Any variable declared within a function is interpreted as an automatic variable unless a different
         storage class specification is included within the declarartion. This icludes formal argument declarartion also. <br>
         Consider for instance, the storage class of the variable number in the example below is automatic.</p>

<pre class="inset">
void main()
{
	auto int number;
    ........
}
</pre>

        <p> Automatic variables can also be declared within a set of braces known as 'blocks'. In such cases, the can be used only within the blocks where the are
         defined. Automatic variables can be assigned initial values by including appropriate expressions within the variable declarations or by explicit assignment expressions
         else where in the function. Such values will be reassigned each time the function is not re-entered. If an automatic variable is not initialized in some
         manner then its initial value will be unpredictable i.e. it will have garbage value.
     </p>
<h2 align="left">External Variable</h2>
     <p>
         External Variables are defined outside of any function and thus are not confined to single functions. Their scope and longevity extends from the point of definitions
         till the remainder of the program. If not initialized, these variables are automatically initialized to zero. Since external variables are recognized globally,
         therefore, it can be assigned a value within one function, and this value can be used within another function.. In case the local and global variable
         have the same name, the local variable will be given more importance than the local variable in r=the function where it is declared.For example, lets say there is 
         a global variable 'x' within a program and also a local variable 'x' is defined within function <i>show()</i> Now, within the function <i>show()</i> the local
         variable'x' will have priority over global variable 'x'. To access the global variable 'x' within the function<i>show()</i> we need to use "unary scope resolution operator."
         as ::x. The use of external variables provides a convinient mechanism for transferring information to a function without using arguments. This is especially convinient
         when a function requires numerous input data items. Also using them we can transfer multiple data items out of a function.
     </p>
<h2 align="left">Static Variable</h2>
     <p>
         In a program, static variables are defined within individual functions and therefore have the same scope as automatic variables, i.e., they are local
         to the functions in which they are defined. Unlike automatic variables, however, static variables retain their values throughout the remainder of the program.
         Thus, their scope is confined to the function, but their longevity extends frm the point of definition through the remainder of the program. As a result,
         if the function is exited and then re-entered later, the static variables defied within that function will retain <b><i>retain thier former values</i></b>
         This feature allows function t retain information throughout the execution of a program. For example, It can be used to count the number of calls made to a function.
         Static variables are defined within a function i the same manner as that of automatic, except that the avriable decalaration must begin with the keyword<i>static</i>
         For example <i>static int x;</i>	Static Variables can be utilized within the functionin the same manner as other variables. they cannot, however be
         accessed outside of their defining function. Initial values ca be included in static variable declarations. However, it is automatically (implicitly) initialized to zero
         if we do not assign it any value. initialization(explicit or implicit) take place only once in its lifetime and this happens when the function(in which the variableis declared)
         is executed for the first time.
     </p>
<h2 align="left">Register Varaible</h2>
     <p>
         Registers are special storage areas within a computer's central processio=ng unit(C.P.U.). The actual arithmetic and logical operations in a program are carried out
         within these registers. Normally, these operations are carried out by first transferring data from computer's  memory to these registers, then carrying out the indicated 
         operations and finally transferring results back to the computer's memory. This operation is repeated many times during the course of program execution.
         For some program, the execution time can be reduced considerably if certain values can be stored within these registers rather than in computer's memory.
    </p>
</p>
<div>
<a href="C-Functions.php" target="iframe_content" class="button">PREV</a>
<a href="C-Arrays.php" target="iframe_content" style="float:right" class="button">NEXT</a>
</div>

</body>
</html>	
		