#Mastering JIRA 7 - Second Edition
This is the code repository for [Mastering JIRA 7 - Second Edition](https://www.packtpub.com/application-development/mastering-jira-7-second-edition?utm_source=github&utm_medium=repository&utm_campaign=9781786466860), published by Packt. It contains all the supporting project files necessary to work through the book from start to finish.
##Instructions and Navigations
All of the code is organized into folders. Each folder starts with a number followed by the application name. For example, Chapter02.

The chapters 1 to 8, 10 to 13, and 15 to 18 does not contain code files. 

The code will look like the following:
```
#if ($mentionable)
$!rendererParams.put("mentionable", true)
#if ($issue.project.key && $issue.project.key != "")
$!rendererParams.put("data-projectkey", "$!issue.project.key")
#end
#if ($issue.key && $issue.key != "")
$!rendererParams.put("data-issuekey", "$!issue.key")
#end
#end
```

To install and run JIRA, the following software and tools are required:
JIRA 7.1.1 or later
MySQL 5.6 or later
Java 1.8 or later
PHP 5.4
Chrome 7 or later
Firefox 4 or later
Wherever applicable, the details on obtaining its software and its usage is explained in
the relevant chapters.

##Related Products
* [JIRA 5.2 Essentials](https://www.packtpub.com/application-development/jira-52-essentials?utm_source=github&utm_medium=repository&utm_campaign=9781782179993)

* [JIRA 6.x Administration Cookbook](https://www.packtpub.com/application-development/jira-6x-administration-cookbook?utm_source=github&utm_medium=repository&utm_campaign=9781782176862)

* [JIRA 6 Essentials [Video]](https://www.packtpub.com/application-development/jira-6-essentials-video?utm_source=github&utm_medium=repository&utm_campaign=9781849689243)
###Suggestions and Feedback
[Click here](https://docs.google.com/forms/d/e/1FAIpQLSe5qwunkGf6PUvzPirPDtuy1Du5Rlzew23UBp2S-P3wB-GcwQ/viewform) if you have any feedback or suggestions.
