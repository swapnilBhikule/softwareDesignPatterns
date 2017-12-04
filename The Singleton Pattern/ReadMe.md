
> Basic Overview of "The Singleton Pattern"

# The Singleton Pattern
## Definition
    In software engineering, the singleton pattern is a software design pattern that restricts the instantiation of a class to one object. This is useful when exactly one object is needed to coordinate actions across the system.

## Implementation
    To address this problem we can start by asserting control over object instantiation.
    That is, we create a class that cannot be instantiated from outside of itself.
    In PHP, it's a bit easy. All you have to do is, defining a private constructor.

    But of course, if future you will need to access the singleton class to retrieve it's properties, using its methods. How can we achieve that? It's again a bit easy.
    Creating a static method inside singleton class which will create it's class's object only if it's not already created.

## License

This application is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
