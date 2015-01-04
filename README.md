#OO PHP i18n Language Module
The Language Module is a tool for vanilla PHP projects with i18n implementation 
needs. Developped during my internship of Fall 2014, this module is fully functional.
This module is under the MIT License.

##Features
###Versatile Structure
The module relies on composition rather than inheritance to provide the coder with 
the language strings she needs. This allows the coder to decide her own structure,
whether she wants a class per page, per topic, or any other form of classification.
Each class created are encapsulated associative arrays that can be accessed 
through the Lang Façade.

###Simplicity of Use
Although adding new content is fairly involved, the module is relatively simple to use.
Indeed, the Lang Façade allows for autocompletion and can return any one of the
languages specified (currently only en-us and fr-ca) or all the languages at once.
One call allows to fetch from any number of specified reports. The Façade 
automatically falls back on the en-us array would any entry be missing in the 
language requested.

##How to Use
###Adding a New Language Array
To add a new language array, one must copy the content of the TemplateReport.lang.class.php
in a new file. The Lang Façade (Lang.class.php) relies on the assumption that
the new files are named in the format **%Name%.lang.class.php** where %Name% is the
same as the name of the class declared in the file.
In order to allow autocompletion, it is suggested to add an entry in the interface
AllReportNames.interface.php, which is implemented by the Lang Façade.
You can then add entries in the associative arrays of the new class you created.

###Requesting an Array of Strings
In order to request an array of string, one must call the method getArrayLang($lang, $reports)
from the Lang Façade. The first parameter receives a language specification (such
as 'en', 'en-us', 'fr', 'fr-ca' or 'all') while the second receives an array
of string constants representing the names of the various classes to combine to 
obtain the language strings of interest.
Ex:

```
$lang = Lang::getArrayLang($_SESSION['_LANG'], [Lang::CommongLang, Lang::TemplateReport]);
```

##Comments
This module was created prior to doing any research, since it was done to satisfy
the criteria laid out by the company at which I worked. I discourage anyone from
using this module, except if you are looking only for this functionality. Otherwise
CodeIgniter, Falcon and Laravel frameworks already take care of this in an orderly 
fashion. You can also look at Thomas Bley's [article](http://we-love-php.blogspot.co.uk/2012/07/how-to-implement-i18n-without.html)
which has a fresh insight on the issue.