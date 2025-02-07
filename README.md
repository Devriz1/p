Week 1: Basics and Core Concepts
Day 1: Introduction to JavaScript

Overview of JavaScript
Setting up your development environment (IDE, browser console)
Writing and running your first JavaScript code
Day 2: Variables and Data Types

Primitive data types (String, Number, Boolean, null, undefined, Symbol)
Variables (let, const, var)
Type coercion and conversion
Day 3: Operators

Arithmetic operators
Comparison operators
Logical operators
Assignment operators
Day 4: Control Flow

Conditional statements (if, else if, else, switch)
Logical operators in conditions
Day 5: Loops

For loop
While loop
Do while loop
Loop control (break, continue)
Day 6: Functions

Function declarations and expressions
Parameters and return values
Arrow functions
Day 7: Review and Practice

Review concepts from the week
Complete small coding exercises or challenges
Week 2: Intermediate Topics
Day 8: Arrays

Creating arrays
Accessing and modifying array elements
Array methods (push, pop, shift, unshift, map, filter, reduce)
Day 9: Objects

Creating and modifying objects
Accessing object properties
Methods in objects
Day 10: DOM Manipulation

Introduction to the DOM
Selecting and modifying DOM elements (getElementById, querySelector)
Event handling (addEventListener)
Day 11: Events

Event types (click, input, change, etc.)
Event object
Event delegation
Day 12: Error Handling

Try...catch statements
Throwing custom errors
Debugging basics
Day 13: Asynchronous JavaScript

Introduction to callbacks
Promises (then, catch, finally)
Async/await syntax
Day 14: Review and Practice

Review concepts from the week
Complete small coding exercises or projects
Week 3: Advanced Concepts
Day 15: Closures and Scope

Understanding scope (global, local)
Closures and their use cases
Day 16: Prototypes and Inheritance

Prototypal inheritance
Constructor functions
Prototype chain
Day 17: ES6+ Features

Template literals
Destructuring
Spread and rest operators
Day 18: Modules

Introduction to modules
Import and export statements
Using modules in your project
Day 19: Error Handling and Debugging

Advanced debugging techniques (using browser developer tools)
Error handling best practices
Day 20: JavaScript in the Browser

Browser APIs (fetch, localStorage, sessionStorage)
Introduction to the Fetch API for making HTTP requests
Day 21: Review and Practice

Review concepts from the week
Complete small coding exercises or projects
Week 4: Project Building and Final Touches
Day 22: Project Setup

Planning a small project (e.g., a to-do list app or a simple game)
Setting up project structure (HTML, CSS, JavaScript)
Day 23-25: Build Project - Part 1

Implement core features
Focus on JavaScript functionality (event handling, DOM manipulation)
Day 26-27: Build Project - Part 2

Integrate advanced features (localStorage, fetch API, etc.)
Style and refine the project
Day 28: Testing and Debugging

Test your project
Debug any issues
Refactor and clean up code
Day 29: Documentation and Deployment

Document your code
Prepare your project for deployment
Deploy your project (e.g., GitHub Pages, Netlify)
Day 30: Review and Future Learning

Review what you’ve learned
Reflect on your project and areas of improvement
Plan next steps for advanced topics (e.g., frameworks, libraries like React or Vue)
https://laracasts.com/series/30-days-to-learn-laravel-11







document.getElementById('addTaskBtn').addEventListener('click',addTask);

 function addTask(){
        const taskInput = document.getElementById('taskInput');
        const taskText = taskInput.value;

        const li = document.createElement('li');
        li.textContent = taskText;

        const deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'Delete';
        deleteBtn.addEventListener('click',function() {
                li.remove();
            });

            li.appendChild(deleteBtn);
            document.getElementById('takeList').appendChild(li);

            taskInput.value = '';
            }



        create table students(
studentid int,firstName varchar(100),lastName varchar(100),age int);
insert into students values(1,'shibil','ayoob',21);
insert into students values(2,'shaheer','kdr',20);
insert into students values(3,'jasir','sainu',20);
insert into students values(4,'minhaj','mhd',21);
insert into students values(5,'anas','zain',21);

create table college(
collegeid int,name varchar(100),age int,courseName varchar(100));
insert into college values(1,'shibil',21,'BA');
insert into college values(2,'shaheer',20,'bca');
insert into college values(3,'jasir',20,'bcom');
insert into college values(4,'minhaj',21,'bba');
insert into college values(5,'anas',21,'accounting');

SELECT 
    s.studentid, 
    s.firstName AS studentFirstName, 
    s.lastName, 
    s.age AS studentAge,
    c.collegeid, 
    c.name AS collegeName, 
    c.age AS collegeAge, 
    c.courseName
FROM 
    students s
INNER JOIN 
    college c
ON 
    s.firstName = c.name;
alter table students
add column courseName varchar(100);
SELECT*FROM students;
update students
set courseName='bba'
where studentid=1;
SELECT*FROM students;
update students
set courseName='bcom'
where studentid=2;
update students
set courseName='bca'
where studentid=3;
SELECT*FROM students;

example of nonlocal
Why is "hello" printed instead of "Jane"?
x = "Jane" is declared inside myfunc1()

This means x is a local variable inside myfunc1().
myfunc2() is a nested function inside myfunc1()

myfunc2() does not define its own x, but instead it modifies x from myfunc1() using nonlocal.
When myfunc2() is called, x = "hello" modifies the original x in myfunc1()

Since nonlocal x is used, Python does not create a new x inside myfunc2() but instead updates the x from myfunc1().
Finally, myfunc1() returns x, which has been changed to "hello"

So, the output is "hello" instead of "Jane".

