Gridelements Flux Integration
=============================

### What is this?

A TYPO3 extension which enables one extension - EXT:gridelements - to use the feature set of another extension - EXT:flux. The former is an extension to create column elements into which other content elements may be inserted. The latter is a way to create user-editable form fields, the values of which can be used to manipulate the rendering of said element.

This extension combines the two using the Provider pattern from Flux. The result is the ability to use Flux forms in any Gridelements element definition.

### How does it work

The extension works by extending the configuration Gridelements adds to TYPO3 in the following ways:

1. Fields are added to the special "CE Backend Layout" record type that Gridelements uses. These fields allow the creator to set the desired template source that the element should use - or a filename of a template file. If the source is used, the XML is expected to contain a `Configuration` section, all proper namespace inclusions and a single `flux:form` definition.
2. Other fields of Gridelements are removed. In essence, the old "DS" and "DS file" fields are removed in favor of Flux variants.
3. A CoreContent Controller (see EXT:fluidcontent_core) is implemented in order to catch the rendering process at a much earlier time, and to generally improve integration between the template, controller and Flux strategies.

This means that **the extension depends on the FluidcontentCore extension** which you will find at https://github.com/FluidTYPO3/fluidcontent_core.
