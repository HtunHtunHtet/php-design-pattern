#Basic Concept In Programming


##Abstract
1. a class that inherits from a class is a `Child class`. and the `abstract class` (or any other class from which another class has inheritance) is the parent class


##Interface
1. `Interface` is the outline of the class
2. To implement an interface, use the ``implenets`` statement instead of extedn as is done with `abstract` class

#Encupsulation

1. `Private` => That means the property can be accessed only from within the same class; it’s visible only to elements in the same class.
2. `Protected` => While private visibility of a property provides access only to elements within the same class, protected visibility allows access to both the same class and child classes. You can incorporate protected visibility with both abstract and concrete methods.
3. `Public` => Access to an encapsulated object is through public visibility. To be useful, at least some of the methods in a class must be visible, even if it’s only the constructor function. Of course, all constructor methods are public. So, if your program includes a constructor function, it has public access through the instantiation of the class by an object outside the class.
