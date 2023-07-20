Table of Contents:
- [Client Premise:](#client-premise)
- [Client Experience of the website and objective:](#client-experience-of-the-website-and-objective)
- [User Stories](#user-stories)
- [Design Testing  ](#design-testing--)
  - [Figma Changelog](#figma-changelog)
- [Testing Criteria](#testing-criteria)
  - [Browser Testing ](#browser-testing-)
  - [Mobile View](#mobile-view)
  - [Tablet View](#tablet-view)
  - [Laptop View](#laptop-view)
  - [Desktop View](#desktop-view)
  - [Home page   ](#home-page---)
  - [Features Page   ](#features-page---)
  - [Sign Up Page   ](#sign-up-page---)
  - [Early Testing with Navbar and Footer ](#early-testing-with-navbar-and-footer-)
    - [Navbar](#navbar)
    - [Footer](#footer)
- [Back End Testing](#back-end-testing)
- [HTML Hyperlinks test](#html-hyperlinks-test)
  - [HTML form test](#html-form-test)
- [Lighthouse Testing](#lighthouse-testing)
  - [Home page](#home-page)
  - [Features page](#features-page)
  - [Sign Up page](#sign-up-page)
- [Validator Testing](#validator-testing)
  - [Links: W3C Validator for index.html, features.html, booktrial.html, style.css](#links-w3c-validator-for-indexhtml-featureshtml-booktrialhtml-stylecss)
  - [W3C HTML Validator](#w3c-html-validator)
    - [W3C HTML Validator for index.html](#w3c-html-validator-for-indexhtml)
    - [W3 HTML Validator for features.html and booktrial.html](#w3-html-validator-for-featureshtml-and-booktrialhtml)
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

Dr. Emily needs to be able to visualise the mission of Hoverboard's product. **She sees the homepage which demonstrates that Hoverboard are trying to help transition schools transition to a better and richer VLE.** The content is themed around education, technology and ease of use. The client needs the front-end design to be positive, engaging and professional in tone.

She wants to find out more about the features that Hoverboard offers. **She visits Page 2 which demonstrates what unique features Hoverboard has** to integrate student classwork, such as peer feedback, quick teacher grading and gallery views. The content is informative, persuasive and reassuring. The client needs the front-end design to use a clean layout that clearly visualises the product being used.

**Finally Dr. Emily visits page 3 where she books a free trial for one year.** She mention's her friend Benjamin Reynolds recommended the product which offers him a special discount. She fills in a form which captures her essential data. At the end a message appears that thanks her and assures her that their customer welcome lead will be in contact. The client needs the front-end design to be easy to read and use.

# User Stories
For the scope of the project I limited the website's function to new users who were prospective clients of the product.

New User:
- If I am convinced enough by the product I will sign up for a free software trial.
- I need to comfortably view this website on any device such as mobile, tablet, laptop or desktop.
- I need to visualise this product's mission
- I need to understand the products features
- I need to be able to sign up for a free trial easily.

# Design Testing ![Figma](https://img.shields.io/badge/figma-%23F24E1E.svg?style=for-the-badge&logo=figma&logoColor=white) ![Canva](https://img.shields.io/badge/Canva-%2300C4CC.svg?style=for-the-badge&logo=Canva&logoColor=white) 

## Figma Changelog
11.06.23 Updated figma model, drafted Features page with screen responsiveness.

13.6.23 Update Home page, replaced images, spread out navbar, improved subheadings. Need to draft in Form and then review surface design. Would be good to reuse app icons from features page.

15.6.23 12:40 Complete form page, add background squiggles, recolor as Orange design. TODO: complete background squiggles on Features page, copy over app icons to Hoverboard mission feature on home page.

***
<img width="959" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/0bf42814-eef8-49ec-a8a8-2e9cf1e6b913">
<img width="705" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/ea620913-f086-4e50-bd61-f85ae3a3106b">
<img width="1194" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/d534f456-7ef9-4992-a1c0-6e7e79abbfd3">


15.6.23 19:00 Orange rebranding designed. Still need a bit of image rebranding on homepage. TODO: Start coding on HTML, keep all the imgs as they are and recolor them later. Complete pages in this order: SIGN UP, FEATURES, HOMEPAGE as the latter is the most difficult.


***


<img width="1735" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/67586ebe-34ba-4c0a-9929-57195b0a6924">

6.7.23 differentiate laptop view and desktop view for home page, update column layout. Testimonials is simplified, floating ticker scrapped in favour of simple double column layout, display a 4x4 grid. Features moved to middle section to balance content weight.

<img width="211" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/07ba5878-6b57-4c19-95fc-d454d06093f8">
<img width="249" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/e2442d70-8a1d-4553-85ad-34e0ff008f3f">

Could still improve design with consistent design layout, make try our software... imgs to use similar visual motif of rounded box over banner


# Testing Criteria

[![GitHub CSS open issues by-label](https://img.shields.io/github/issues/lmcrean/Hoverboard/css?label=CSS%20Issues&color=yellow)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+is%3Aopen)
[![GitHub CSS closed issues by-label](https://img.shields.io/github/issues-closed/lmcrean/Hoverboard/css?label=%20&color=green)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+is%3Aclosed)

The front-end was tested in with the following criteria:

- CSS media queries' responsivity to viewport width, key breakpoints being at mobile view, tablet view (768px), laptop view (1208px) and desktop view (1728px+). The videos demonstrate varying viewport widths between 483 to 2500px. Grid and Flex displays were used to switch between differing arrangements of content contributing to the readability.
- Design choices that are similar to those concieved in the [Figma Wireframe, documented here](https://github.com/lmcrean/Hoverboard/wiki/3.-Design-Testing-via-Figma-wireframe). Effective positioning, sizing and style.
- Testing on different browsers.

<details> <summary>  

## Browser Testing </summary> 



</details>


<details> 
  <summary>

## Mobile View</summary>

 - S21 Ultra is not displaying fonts
 - 

  
  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/21bac67e-0ad9-4abe-8874-84b8197c4d96" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/21bac67e-0ad9-4abe-8874-84b8197c4d96" alt="home page" width="200">
  </a> <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/224b3da0-ec76-4825-aae5-e6a0a1c51434" target="_blank"> <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/224b3da0-ec76-4825-aae5-e6a0a1c51434" alt="features page" width="200">
  </a> <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/f81a0c53-234e-4feb-8dbc-a1e97f270e0f" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/f81a0c53-234e-4feb-8dbc-a1e97f270e0f" alt="sign up page" width="200">
  </a>
</details>

<details> 
  <summary>

## Tablet View</summary>
  
  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/c8ec056c-b002-4313-8f5a-e133b556a251" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/c8ec056c-b002-4313-8f5a-e133b556a251" alt="home page" width="200">
  </a>

  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/0067c5d8-8bc9-40f2-b187-d6e7b9897fb1" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/0067c5d8-8bc9-40f2-b187-d6e7b9897fb1" alt="features page" width="200">
  </a>

  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/9d9a4a81-8f9e-46e4-92c0-a0b4323afd13" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/9d9a4a81-8f9e-46e4-92c0-a0b4323afd13" alt="sign up page" width="200">
  </a>
</details>

<details> 
  <summary>

## Laptop View</summary>
  
  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/e80058ec-0c00-4ea9-9b3a-78da62f9a7cd" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/e80058ec-0c00-4ea9-9b3a-78da62f9a7cd" alt="home page" width="200">
  </a>

  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/7cb7c533-0c14-4216-9b31-fb840f79868c" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/7cb7c533-0c14-4216-9b31-fb840f79868c" alt="features page" width="200">
  </a>

  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/2cb92942-cc9d-49c5-aeb0-ef5103d9f7c4" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/2cb92942-cc9d-49c5-aeb0-ef5103d9f7c4" alt="sign up page" width="200">
  </a>
</details>

<details> 
  <summary>

## Desktop View</summary>
  
  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/0b74a3f4-d990-458d-b544-0d17d51b9b14" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/0b74a3f4-d990-458d-b544-0d17d51b9b14" alt="home page" width="200">
  </a>

  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/c0e6432a-48db-49fe-9e06-2f96aac34009" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/c0e6432a-48db-49fe-9e06-2f96aac34009" alt="features page" width="200">
  </a>

  <a href="https://github.com/lmcrean/Hoverboard/assets/133490867/1dffe299-4a4e-4efb-aa1f-65bc6215716d" target="_blank">
    <img src="https://github.com/lmcrean/Hoverboard/assets/133490867/1dffe299-4a4e-4efb-aa1f-65bc6215716d" alt="sign up page" width="200">
  </a>


</details>
<details>

<summary> 

## Home page [![GitHub 1 home page open issues by-label](https://img.shields.io/github/issues-search/lmcrean/Hoverboard?query=label%3Acss+label%3A%221%20home%20page%22+is%3Aopen&label=Home%20Page%20CSS%20Issues&color=yellow)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+label%3A%221%20home%20page%22+is%3Aopen) [![GitHub 1 home page closed issues by-label](https://img.shields.io/github/issues-search/lmcrean/Hoverboard?query=label%3Acss+label%3A%221%20home%20page%22+is%3Aclosed&label=Closed&color=green)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+label%3A%221%20home%20page%22+is%3Aclosed) </summary>

https://github.com/lmcrean/Hoverboard/assets/133490867/c71023d8-0af3-41d4-80e2-16e0278399da

key issues spotted
- hero image falling out of view https://github.com/lmcrean/Hoverboard/issues/32 https://github.com/lmcrean/Hoverboard/issues/29
- mission intro img doesn't grow 
- features for teachers needs to disappear & switch into mission box https://github.com/lmcrean/Hoverboard/issues/44

***
8th July '23

https://github.com/lmcrean/Hoverboard/assets/133490867/d8e58e46-9a92-42d6-826f-964bd1f8fbc6

https://github.com/lmcrean/Hoverboard/assets/133490867/17bf9272-5d61-4c95-b6e1-3b75401845e6

changed:
- img grows along with viewport width 
- features for teachers nests into mission box in laptop view breakpoint https://github.com/lmcrean/Hoverboard/issues/44

tablet breakpoint
- hero feature img mobile to landscape
- mission intro splits into 2 columns
- features for teachers switches from columns to rows
- testimonials splits into 2 columns
- cards split into 2 columns

laptop breakpoint
- features for teachers nests into mission intro
- testimonials splits into 4x4 grid

desktop breakpoint
- NEED TO FIX: hero image fits https://github.com/lmcrean/Hoverboard/issues/41

</details>

<details>

<summary> 

## Features Page [![GitHub 2 features page open issues by-label](https://img.shields.io/github/issues-search/lmcrean/Hoverboard?query=label%3Acss+label%3A%222%20features%20page%22+is%3Aopen&label=Features%20Page%20CSS%20Issues&color=yellow)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+label%3A%222%20features%20page%22+is%3Aopen) [![GitHub 2 features page closed issues by-label](https://img.shields.io/github/issues-search/lmcrean/Hoverboard?query=label%3Acss+label%3A%222%20features%20page%22+is%3Aclosed&label=Closed&color=green)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+label%3A%222%20features%20page%22+is%3Aclosed) </summary>


https://github.com/lmcrean/Hoverboard/assets/133490867/f44e0f4e-8ded-4fbe-a354-4d33c341c07b

tablet breakpoint
- header switches from columns to rows 
- main body switches to 2 columns - middle row reversed for design

laptop breakpoint
- TO FIX: text is looking a little spare  https://github.com/lmcrean/Hoverboard/issues/50

desktop breakpoint
- TO FIX: too much space https://github.com/lmcrean/Hoverboard/issues/50

8th Jul 23

</details>

<details>

<summary> 

## Sign Up Page [![GitHub 3 sign-up page open issues by-label](https://img.shields.io/github/issues-search/lmcrean/Hoverboard?query=label%3Acss+label%3A%223%20sign-up%20page%22+is%3Aopen&label=Sign-up%20Page%20CSS%20Issues&color=yellow)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+label%3A%223%20sign-up%20page%22+is%3Aopen) [![GitHub 3 sign-up page closed issues by-label](https://img.shields.io/github/issues-search/lmcrean/Hoverboard?query=label%3Acss+label%3A%223%20sign-up%20page%22+is%3Aclosed&label=Closed&color=green)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Acss+label%3A%223%20sign-up%20page%22+is%3Aclosed) </summary> 
>



https://github.com/lmcrean/Hoverboard/assets/133490867/1aea2a23-180a-4a05-92c8-559b3278647c

8th Jul 23

tablet breakpoint
- form inputs split into 2 columns

laptop breakpoint
- header splits into 2 columns, nesting the clipboard image
- TO FIX: convert to 3 columns at laptop breakpoint - it's currently at desktop view https://github.com/lmcrean/Hoverboard/issues/51

desktop breakpoint
- split into 3 columns
- submit button moves to left column
- TO FIX: submit button fills whole grid cell, needs to be sized down https://github.com/lmcrean/Hoverboard/issues/52

</details>

<details>

<summary> 

## Early Testing with Navbar and Footer </summary> 


### Navbar
![40a4a9ab-9408-4a7e-b5cc-a1eb7f3c5781](https://github.com/lmcrean/Hoverboard/assets/133490867/e19fae72-b080-475b-8f46-504db8842fc0)

18th Jun 2023 Checking responsivity. Hamburger icon nests menu in tablet view. There's an issue where the menu slightly appears around the breakpoint.


***

![999c1c35-e834-41df-954e-7798aba7101a](https://github.com/lmcrean/Hoverboard/assets/133490867/eb43626b-391a-4ede-a0ac-a323acaa96f5)

Navbar Elements now in correct position. Fixed issue with menu items appearing around breakpoint.


### Footer

![bccac4b7-93c7-41b4-b3ef-fdf07b2744bd](https://github.com/lmcrean/Hoverboard/assets/133490867/7d4b7168-5fe0-4ee8-ab4f-9f0d1e35dc49)

tablet view:
footer snaps into 2 rows 

Jun 23

</details>



# Back End Testing
[![GitHub HTML open issues by-label](https://img.shields.io/github/issues/lmcrean/Hoverboard/html?label=HTML%20Issues&color=yellow)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Ahtml+is%3Aopen) [![GitHub HTML closed issues by-label](https://img.shields.io/github/issues-closed/lmcrean/Hoverboard/html?label=%20&color=green)](https://github.com/lmcrean/Hoverboard/issues?q=label%3Ahtml+is%3Aclosed)

The Back End Testing set out to 
* test HTML5 Hyperlinks and Forms so that they are all working as expected, identifying potential syntax errors or with the form requirements
* use lighthouse testing to identify files that could be resized and accessibility that can be improved.
* Pass W3C Validator Testing for both HTML5 and CSS3, therby removing excess code and broken links.

# HTML Hyperlinks test
https://github.com/lmcrean/Hoverboard/assets/133490867/739c450a-0fd7-4da3-bf7e-5b1fb6b2b2e6

15th Jul '23

navbar links are working, as are article links, footer links are mostly working

* 1 minor fix, fix misspelt instagram in each html tab.
* design tweak add Home page to navbar , rename book trial to sign up.

***
## HTML form test

https://github.com/lmcrean/Hoverboard/assets/133490867/76d18415-44fa-4166-9f3a-612002c2e90a

15th Jul '23

The video demonstrates initially enterring the form correctly, then tests loopholes by entering incorrect passwords, emails and mobile numbers. The form submits to thank you page correctly, uses a simple PHP GET form, correctly identified misuse of email and 11-digit mobile number.

* 1 issue with fix password vs confirm password being required to match 
* the directed thank page heading and button doesn't appear, lacks a UX design, img link appears broken

# Lighthouse Testing

## Home page

<details><summary> Lighthouse Mobile Test 5th July. 
<img width="391" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/11da47d7-67c4-41aa-b4da-0f08fa49c2a8">
</summary>
<img width="547" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/c8ea0ce3-d9b0-4cae-a5a0-9c0b7c92a8b6">

</details>

***

<details><summary> Lighthouse mobile test 15th July 
<img width="325" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/4d00296a-68c7-4f24-bea3-8369292a0f50"> 

<a href="https://github.com/lmcrean/Hoverboard/issues/53"> Hero imgs were resized:
  <img src="https://img.shields.io/github/issues/detail/state/lmcrean/Hoverboard/53">
</a>

</summary>

<img width="442" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/aea7b0e7-867c-4fbb-b262-bed4a6b7a796">
<img width="474" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/efbe464f-4da2-4607-b5d4-142fe7c637da">

> Serve images in next-gen formats
> Image formats like WebP and AVIF often provide better compression than PNG or JPEG, which means faster downloads and less data consumption. [Learn more about modern image formats]
(https://developer.chrome.com/docs/lighthouse/performance/uses-webp-images/?utm_source=lighthouse&utm_medium=devtools).

<img width="456" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/ce1345d2-3909-4fcb-ae9d-a48622ce6919">
<img width="464" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/465564e5-778b-4285-9453-a65e5bf3ff30">
</details>



***

<details><summary>
Lighthouse Desktop Test 15th July '23 <img width="332" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/d7a9cbae-8dad-4f17-8667-3753e0d9b5e6">
</summary>
<img width="459" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/353c39d8-fae2-4a93-86dc-98ea5c4407a7">
<img width="465" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/901f0d02-f4e6-4ca9-84c1-46c247ae61df">
</details>

***




## Features page

<details><summary> Mobile View 15.Jul.23 <img width="405" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/bf182cb3-0f05-42fe-b33a-d1f31bd01114"> </summary>
<img width="467" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/67727628-26ac-4a6d-b30c-be3db607da00">
<img width="467" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/63c03ee2-4872-4ec0-81ad-dd763880e064">
</details>


<details><summary> Desktop View 15.Jul.23 <img width="408" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/2270a0ae-19a1-483f-a15b-0ac0d548e721"> </summary>
<img width="570" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/358e8dc4-9d6b-4dd7-bfc2-6faaa0a2d99a">
<img width="556" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/fde5a693-f075-4efb-9c65-80fb1f5ca177">
</details>


## Sign Up page

<details><summary>Mobile View 15.Jul.23 
<img width="424" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/1afa9be2-07bd-4455-a4e8-b955cc0a98b6"></summary>
<img width="582" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/f9fcc2d9-9417-4305-9bf5-09c5c1c00f1c"></details>


<details><summary>Desktop View 15.Jul.23 
<img width="436" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/c9cd9bea-752f-4d6f-9263-43826bb2ece1"></summary>

<img width="536" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/3b65e22e-e641-45fa-9e6b-c6f57a729c57"></details>


***

# Validator Testing
## Links: W3C Validator for [index.html](https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&checkerrorpages=yes&useragent=Validator.nu%2FLV+http%3A%2F%2Fvalidator.w3.org%2Fservices&acceptlanguage=&doc=https%3A%2F%2Flmcrean.github.io%2FHoverboard%2F#l311c10), [features.html](https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2Flmcrean.github.io%2FHoverboard%2Ffeatures#l311c10), [booktrial.html](https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2Flmcrean.github.io%2FHoverboard%2Fbooktrial#l311c10), [style.css](http://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=https%3A%2F%2Flmcrean.github.io%2FHoverboard%2F&usermedium=all&vextwarning=&warning=1)



***

## W3C HTML Validator
### W3C HTML Validator for index.html
W3 Validator results 15th July '23

<img width="807" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/0a374f5d-2b29-468d-a653-7c26bc0ac050">

<img width="701" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/aea19703-ddf3-461d-a36b-2cc2446da299">

[See Issue and commit links here <img src="https://img.shields.io/github/issues/detail/state/lmcrean/Hoverboard/69">
](https://github.com/lmcrean/Hoverboard/issues/69)

### W3 HTML Validator for features.html and booktrial.html
<img width="479" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/b78be12d-44f0-4c15-ab3f-e0a865d512e2">

<img width="903" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/db07ee4a-d1d0-45b3-bc57-be2178e53d59">

<img width="862" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/6798c39f-1734-4e2d-bdd4-35e01f94ca16">

***
<img width="726" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/2a2ab76e-ef8a-4963-a8b5-8d0a4352b31c">

[fixed with this commit](https://github.com/lmcrean/Hoverboard/commit/0895255311135178f9f61e7a5e410eb3b2882e52)


***

<img width="672" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/d14805e9-52c3-4212-aa6c-abdea29c67d1">


<img width="796" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/7fb7aaa6-75d7-46bd-916f-d4aa97c2b7f5">



[See Issue and commit links here <img src="https://img.shields.io/github/issues/detail/state/lmcrean/Hoverboard/73">
](https://github.com/lmcrean/Hoverboard/issues/73)

## W3 CSS Jigsaw Validator
<img width="921" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/e45294f9-cc60-427c-bd40-a1ed1d1454f6">

[See Issue and commit links here <img src="https://img.shields.io/github/issues/detail/state/lmcrean/Hoverboard/74">
](https://github.com/lmcrean/Hoverboard/issues/74)

<img width="913" alt="image" src="https://github.com/lmcrean/Hoverboard/assets/133490867/f1d9dee6-bb6f-4fdf-a1de-8a32bc930deb">

