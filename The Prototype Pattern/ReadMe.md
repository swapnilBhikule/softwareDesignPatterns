
> Basic Overview of "The Prototype Pattern"

# The Prototype Pattern
## Definition
    The prototype pattern is a creational design pattern in software development. It is used when the type of objects to create is determined by a prototypical instance, which is cloned to produce new objects.

## Implementation
    In factory method pattern, every time you add a product family, you are forced to create an associated concrete creator. In system that grows fast enough to encompass many products, maintaining this kind of relationship can quickly become tiresome.
    One way of avoiding this deoendency is to use PHP's clone keyword to duplicate existing concrete products. The concrete product classes themselves then become the basic of their own generation. This is the Prototype Pattern.

    It enables you to replace inheritance with composition.

## License

This application is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
