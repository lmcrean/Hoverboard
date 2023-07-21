# Testing <!-- omit in toc -->

[<img alt="Live page Badge" src="https://img.shields.io/badge/live_page-purple?logo=googlechrome&logoColor=white">](https://lmcrean.github.io/Hoverboard/) [<img alt="Full Documentation Research Badge" src="https://img.shields.io/badge/Testing-purple?logo=mdBook">](https://github.com/lmcrean/Hoverboard/blob/main/testing.md) [![GitHub commit activity (branch)](https://img.shields.io/github/commit-activity/t/lmcrean/Hoverboard?color=green)](https://github.com/lmcrean/Hoverboard/commits/main) [![GitHub closed issues](https://img.shields.io/github/issues-closed/lmcrean/Hoverboard?color=green)](https://github.com/lmcrean/Hoverboard/issues?q=is%3Aissue+is%3Aclosed) [![GitHub issues](https://img.shields.io/github/issues/lmcrean/Hoverboard?label=%20
)](https://github.com/lmcrean/Hoverboard/issues) [<img alt="workflow" src="https://img.shields.io/badge/Issues_workflow-grey?logo=github">](https://github.com/lmcrean/Hoverboard/blob/main/testing.md) [![HTML](https://img.shields.io/github/issues/lmcrean/Hoverboard/html?logo=html5&logoColor=white&label=HTML&color=yellow)](https://github.com/lmcrean/Hoverboard/labels/html) [![CSSl](https://img.shields.io/github/issues/lmcrean/Hoverboard/css?logo=css3&label=CSS&color=yellow)](https://github.com/lmcrean/Hoverboard/labels/css) [![Documentation](https://img.shields.io/github/issues/lmcrean/Hoverboard/documentation?logo=mdBook&label=Documentation&color=yellow)](https://github.com/lmcrean/Hoverboard/labels/css)

Table of Contents:
- [Client Premise:](#client-premise)
- [Client Experience of the website and objective:](#client-experience-of-the-website-and-objective)
- [User Stories](#user-stories)
- [Design Testing](#design-testing)
- [Manual Testing](#manual-testing)
  - [Browser Testing](#browser-testing)
  - [HTML Hyperlinks test](#html-hyperlinks-test)
  - [HTML form test](#html-form-test)
- [Automatic Testing](#automatic-testing)
  - [Lighthouse Testing](#lighthouse-testing)
    - [Home page](#home-page)
    - [Features page](#features-page)
    - [Sign Up page](#sign-up-page)
- [Validator Testing](#validator-testing)
  - [Links: W3C Validator for index.html, features.html, booktrial.html, style.css](#links-w3c-validator-for-indexhtml-featureshtml-booktrialhtml-stylecss)
  - [W3C HTML Validator](#w3c-html-validator)
    - [W3C HTML Validator for index.html](#w3c-html-validator-for-indexhtml)
  - [W3 CSS Jigsaw Validator](#w3-css-jigsaw-validator)


## Initial Research
### SeeSaw Platform
<img width="941" alt="image" src="https://github.com/lmcrean/VirtualClassroomMockup/assets/133490867/4d4a36f0-7c02-43b0-947a-383b1d64a6c8" caption="Copyright SeeSaw 2023">
**SeeSaw https://web.seesaw.me/

An excellent platform with progressive front and back-end features. Students are able to upload their classwork, can comment on students' work, teachers can quickly assess. The welcome page introduces the platform's features, credentials and reassures the user about privacy concerns.

The front-end is efficient, user friendly, intuitively designed. It ues simple icons to visualise the learning and show the platform on a phone, tablet and computer.

### Other VLE Websites
**ClassCharts https://www.classcharts.com/

Notable features: teachers can see their students visually on a seating plan. 

Front-end of welcome page has a nice use of overlapping phone and content, summarising features with icons, use of graphs to make relevant to assessment data.

**SatchelOne https://www.teamsatchel.com/

Homework with deadlines on a calendar. Seating plan is virtual as well.

Front-end has an appealing loading graphic, summary of app graphics works really well, use of fade in animation as page scrolls.

### Articles on Paperless Schools

> A recent study conducted showed that schools in the UK spent nearly half a billion pounds on paper each year, which is the equivalent of 3m Chromebook devices

\- Ieva Kulikovska, Education Software Specialist, 2022

"Steps towards becoming a paperless school - reduce waste and save money"
https://www.theaccessgroup.com/en-gb/blog/edu-steps-towards-becoming-a-paperless-school-reduce-waste-and-save-money/#:~:text=Being%20a%20paperless%20school%20means,forms%2C%20permissions%20slips%20and%20newsletters. 

This article discusses the benefits and steps towards becoming a paperless school. It emphasizes that going paperless can reduce waste, inefficiency, and costs, while improving school security, communication, and teaching methods. The article highlights the advantages of digital systems, such as creating a secure database, better communication with parents, increased student engagement, and the ability to automate paper-heavy processes. However, it also acknowledges potential challenges, such as digital literacy barriers and the importance of maintaining personal interactions in education.

## CSS resources
https://github.com/kevin-powell/learn-grid-the-easy-way/blob/main/style.css

Kevin Powell's CSS resource had helpful ideas for concise CSS selectors, particularly with grid display.

https://youtu.be/VQraviuwbzU

Kevin Powell also offers useful info here about min-height, max-width, font-size: clamp(,,) as alternatives to media queries 

# Client Premise:
Dr. Emily Williams is Headmaster at Meadowbrook Academy. She is expecting an Ofsted School Inspection in the next 5 years. Although her recent inspection feedback was positive, inspectors pointed out that various problems deriving from the sheer volume of paper. The top 5 include:

- it can take weeks for teachers to organise books for review by school leaders
- learning journeys quickly going out of date as the curriculum changes
- the paper copiers regularly break down every week
- important assessment documents/ paper resources occasionally are mislaid
- while there are VLE's (virtual learning environments) in place, these are limited to setting homework, merits and changing seating plans. They do not account for coursework portfolios.

One day her friend, Headmaster Benjamin Reynolds from Green Orchard School, recommends a new and promising Virtual Learning environment called Hoverboard. Benjamin has been trialling Hoverboard to reduce paper usage and organise data. THe software has a more ambitious scope than current VLEs by enabling users a chance to organise classwork on a cloud server. Later that day, Dr. Emily look's up Hoverboard on a search engine and visits their promotional website.

# Client Experience of the website and objective: 
Dr. Emily visit's the website on 2 occasions, first when she is on her phone in conversation with Benjamin, then the next day while she is on her office desktop.

| Page | user needs  | experience  | content  | design  | 
|---|---|---|---|---|
| 1|  Dr. Emily needs to be able to visualise the mission of Hoverboard's product. | **She sees the homepage which demonstrates that Hoverboard are trying to help transition schools transition to a better and richer VLE.**   |   The content is themed around education, technology and ease of use. |  The client needs the front-end design to be positive, engaging and professional in tone.   |
| 2 | She wants to find out more about the features that Hoverboard offers,  |  **She visits Page 2 which demonstrates what unique features Hoverboard has**  | The content informs how the product integrates student classwork, such as peer feedback, quick teacher grading and gallery views | The tone is informative, persuasive and reassuring. The client needs the front-end design to use a clean layout that clearly visualises the product being used. |
|3| needs to access the free trial product| **Finally Dr. Emily visits page 3 where she books a free trial for one year.** She fills in a form which captures her essential data. At the end a message appears that thanks her and assures her that their customer welcome lead will be in contact. | a sign up form with a submit button |  The client needs the front-end design to be easy to read and use.|

# User Stories
For the scope of the project I limited the website's function to new users who were prospective clients of the product.

New User:
- If I am convinced enough by the product I will sign up for a free software trial.
- I need to comfortably view this website on any device such as mobile, tablet, laptop or desktop.
- I need to visualise this product's mission
- I need to understand the products features
- I need to be able to sign up for a free trial easily.

# Design Testing

[![Figma](https://img.shields.io/github/issues/lmcrean/Hoverboard/Figma?logo=Figma&logoColor=white&label=Figma&color=yellow)](https://github.com/lmcrean/Hoverboard/labels/Figma) [![GitHub 2 features page closed issues by-label](https://img.shields.io/github/issues-closed/lmcrean/Hoverboard/Figma?label=%20&color=green)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+label%3A%222%20features%20page%22+is%3Aclosed)

In my Figma Design I set out to

- visualise a clean layout that would demonstrate mobile, tablet and desktop view. For the homepage I differentiated laptop and desktop.

***
<img width="1100" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/67586ebe-34ba-4c0a-9929-57195b0a6924">
<img width="1100" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/ea620913-f086-4e50-bd61-f85ae3a3106b">
<img width="1100" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/d534f456-7ef9-4992-a1c0-6e7e79abbfd3">


**

# Manual Testing

[![GitHub CSS open issues by-label](https://img.shields.io/github/issues/lmcrean/Hoverboard/css?label=CSS%20Issues&color=yellow)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+is%3Aopen)
[![GitHub CSS closed issues by-label](https://img.shields.io/github/issues-closed/lmcrean/Hoverboard/css?label=%20&color=green)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+is%3Aclosed)

Manual testing was executed with the following criteria:

- CSS media queries' responsivity to viewport width, key breakpoints being at mobile view, tablet view (768px), laptop view (1208px) and desktop view (1728px+). The videos demonstrate varying viewport widths between 483 to 2500px. Grid and Flex displays were used to switch between differing arrangements of content contributing to the readability.
- Design choices that are similar to those concieved in the [Figma Wireframe, documented here](https://github.com/lmcrean/Hoverboard/wiki/3.-Design-Testing-via-Figma-wireframe). Effective positioning, sizing and style.
- Testing on different browsers, specifically Chrome, Firefox, Edge, Opera and Safari
- test HTML5 Hyperlinks and Forms so that they are all working as expected, identifying potential syntax errors or with the form requirements

## Browser Testing 



## HTML Hyperlinks test
https://github.com/lmcrean/Hoverboard/assets/133490867/739c450a-0fd7-4da3-bf7e-5b1fb6b2b2e6

15th Jul '23

navbar links are working, as are article links, footer links are mostly working

* instagram link worked after fixing misspelt url in html tab.
  
***
## HTML form test

https://github.com/lmcrean/Hoverboard/assets/133490867/76d18415-44fa-4166-9f3a-612002c2e90a

15th Jul '23

The video demonstrates initially enterring the form correctly, then tests loopholes by entering incorrect passwords, emails and mobile numbers. The form submits to thank you page correctly, uses a simple PHP GET form, correctly identified misuse of email and 11-digit mobile number.

* 1 issue with fix password vs confirm password being required to match 
* the directed thank page heading and button doesn't appear, lacks a UX design, img link appears broken

# Automatic Testing
[![GitHub HTML open issues by-label](https://img.shields.io/github/issues/lmcrean/Hoverboard/html?label=HTML%20Issues&color=yellow)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Ahtml+is%3Aopen) [![GitHub HTML closed issues by-label](https://img.shields.io/github/issues-closed/lmcrean/Hoverboard/html?label=%20&color=green)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Ahtml+is%3Aclosed)

The Automatic Testing set out to 
* use lighthouse testing to identify files that could be resized and accessibility that can be improved.
* Pass W3C Validator Testing for both HTML5 and CSS3, therby removing excess code and broken links.


## Lighthouse Testing

### Home page

Lighthouse mobile test 15th July 
<img width="325" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/4d00296a-68c7-4f24-bea3-8369292a0f50"> 

***


Lighthouse Desktop Test 15th July '23 <img width="332" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/d7a9cbae-8dad-4f17-8667-3753e0d9b5e6">
</summary>

***




### Features page

 Mobile View 15.Jul.23 <img width="405" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/bf182cb3-0f05-42fe-b33a-d1f31bd01114">
 
Desktop View 15.Jul.23 <img width="408" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/2270a0ae-19a1-483f-a15b-0ac0d548e721">


### Sign Up page

Mobile View 15.Jul.23 
<img width="424" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/1afa9be2-07bd-4455-a4e8-b955cc0a98b6">

Desktop View 15.Jul.23 
<img width="436" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/c9cd9bea-752f-4d6f-9263-43826bb2ece1">


***

# Validator Testing
## Links: W3C Validator for [index.html](https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&checkerrorpages=yes&useragent=Validator.nu%2FLV+http%3A%2F%2Fvalidator.w3.org%2Fservices&acceptlanguage=&doc=https%3A%2F%2Flmcrean.github.io%2FHoverboard%2F#l311c10), [features.html](https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2Flmcrean.github.io%2FHoverboard%2Ffeatures#l311c10), [booktrial.html](https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2Flmcrean.github.io%2FHoverboard%2Fbooktrial#l311c10), [style.css](http://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=https%3A%2F%2Flmcrean.github.io%2FHoverboard%2F&usermedium=all&vextwarning=&warning=1)



***

## W3C HTML Validator
### W3C HTML Validator for index.html
W3 Validator results 15th July '23

<img width="701" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/aea19703-ddf3-461d-a36b-2cc2446da299">

<img width="672" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/d14805e9-52c3-4212-aa6c-abdea29c67d1">


<img width="796" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/7fb7aaa6-75d7-46bd-916f-d4aa97c2b7f5">



[See Issue and commit links here <img src="https://img.shields.io/github/issues/detail/state/lmcrean/Hoverboard/73">
](https://github.com/lmcrean/Hoverboard/issues/73)

## W3 CSS Jigsaw Validator

<img width="913" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/f1d9dee6-bb6f-4fdf-a1de-8a32bc930deb">

