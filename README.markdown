Packman is a prototype PEAR Packager which uses a PHP Closure instead of a package.xml file. It's an experiment I'm using to look at various packaging strategies.

This project is not stable. It's not even alpha. It's a prototype!

One sunny day, it might evolve into an actual Packager. That would, of course, require adoption of some it's features by people other than just me ;). Stay tuned.

Why A PHP5 Closure?
-------------------

PEAR packages must include an XML file, typically called package.xml. Since it is XML with all the complexity that entails, there exist a number of tools dedicated to the purpose of generating the file.

Using a PHP5 Closure eliminates the need for a generator. The closure is a simple construct. It accepts any object as its only parameter and sets public property values on it. This ensures it is completely interoperable for whatever packager may wish to use it. It then becomes the packager's job to interpret the values set (no change there).

For maintainance purposes, this is far simpler than XML. As a PHP Closure, you can obviously include PHP to perform simple tasks like including a changelog from a separate file (just use file_get_contents()). The values that form the basic property set are not necessarily taken from the current XML package format for PEAR which I consider antiquated and limiting. It's expected to allow for additional values, for example, setting pre or post-install messages (use your imagination).

Why Bother?
-----------

In recent weeks PHP programmers have been wondering about how to improve PEAR packaging and distribution. While we obviously would love to have PEAR participation, it does no harm to throw out ideas. If they aren't put out there, they'll never ever be adopted. So, why not bother? :P

This README will expand shortly as implementation makes headway.

If you have suggestions for what sort of package format/style/features you'd like to see, pop open a git issue, find me on IRC, or message me on Twitter. I'm more to happy to discuss the ideas I show off here.