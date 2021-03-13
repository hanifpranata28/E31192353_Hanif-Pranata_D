package person;

import pbd.Person;

public class Student extends Person{ 
public Student() 
{ 
//super( "SomeName", "SomeAddress"); 
//super(); 
//super.name = "Hanif"; 
System.out.println("Inside Student:Constructor"); 
} 
public static void main( String[] args) { 
Student anna = new Student(); 
} 
}
