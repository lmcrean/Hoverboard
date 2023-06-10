# Front-End Design for Virtual Classroom Product 

## Introduction from the Developer
As someone with an educational background, I am interested in the revolutionary potential of Educational Technology services. I designed this site for a mock-up EdTech product as an opportunity to progress essential Front-end skills.

# Table of Contents
- [Strategy](#strategy)
- [Important Constraints](#important-contraints)
  - [Premise](#premise)
  - [Client Objective](#client-objective)
- [Features to include, grouped by page](#features-to-include-grouped-by-page)
  - [All Pages](#all-pages)
  - [Home Page](#home-page)
  - [Hoverboard Features (Page)](#hoverboard-features-page)
  - [Book a Free Trial (Page)](#book-a-free-trial-page)
- [Design Choices](#design-choices)
  - [Colour Palette](#colour-palette)
  - [Font Choices](#font-choices)
  - [Background Squiggles](#background-squiggles)
- [Testing](#testing)
  - [Fixed Bugs](#fixed-bugs)
  - [Validator Testing](#validator-testing)
  - [Unfixed Bugs](#unfixed-bugs)
- [Deployment](#deployment)
- [Credits](#credits)
  - [Content](#content)
  - [Media](#media)
  - [Inspiration](#inspiration)


## User Experience Strategy 

> A recent study conducted showed that schools in the UK spent nearly half a billion pounds on paper each year, which is the equivalent of 3m Chromebook devices. 
- Ieva Kulikovska, Education Software Specialist, Blog Post for theaccessgroup.com

### Client Premise:
Dr. Emily Williams is Headmaster at Meadowbrook Academy. She is expecting an Ofsted School Inspection in the next 5 years. Although her recent inspection feedback was positive, inspectors pointed out that various problems deriving from the sheer volume of paper. The top 5 include:

- it can take weeks for teachers to organise books for review by school leaders
- learning journeys quickly going out of date as the curriculum changes
- the paper copiers regularly break down every week
- important assessment documents/ paper resources occasionally are mislaid
- while there are VLE's (virtual learning environments) in place, these are limited to setting homework, merits and changing seating plans. They do not account for coursework portfolios.

One day her friend, Headmaster Benjamin Reynolds from Green Orchard School, recommends a new and promising Virtual Learning environment called Hoverboard. Benjamin has been trialling Hoverboard to reduce paper usage and organise data. THe software has a more ambitious scope than current VLEs by enabling users a chance to organise classwork on a cloud server. Later that day, Dr. Emily look's up Hoverboard on a search engine and visits their promotional website.

### Client Objective - Page Structure: 
Dr. Emily needs to be able to visualise the mission of Hoverboard's product. She sees the homepage which demonstrates that Hoverboard are trying to help transition schools transition to a better and richer VLE. The content is themed around education, technology and ease of use. The client needs the front-end design to be positive, engaging and professional in tone.

She wants to find out more about the features that Hoverboard offers. She visits Page 2 which demonstrates what unique features Hoverboard has to integrate student classwork, such as peer feedback, quick teacher grading and gallery views. The content is informative, persuasive and reassuring. The client needs the front-end design to use a clean layout that clearly visualises the product being used.

Finally Dr. Emily visits page 3 where she books a free trial for one year. She mention's her friend Benjamin Reynolds recommended the product which offers him a special discount. She fills in a form which captures her essential data. At the end a message appears that thanks her and assures her that their customer welcome lead will be in contact. The client needs the front-end design to be easy to read and use.

### Important Contraints for the Developer
The initial live project was being completed to a live-product within the limit of roughly 50 hours. Essential Front-end skills, specifically HTML and CSS were main focus.   

Due to the time constraints, the platform and client were fictional in order to focus on front-end skills. one important ommission is "demo mock-up" graphics of the platform in action, it is instead summarised with graphics. This can be revisited once developed.





## Features to include, grouped by page

Figma prototype https://www.figma.com/proto/W7mEdTvxLgNZTvh1ODiuwD/HOVERBOARD?type=design&node-id=5-2&scaling=scale-down&page-id=0%3A1

### All Pages
All features will be designed with HTML, CSS, Opensource images/ videos. More indirectly, Canva and CapCut will be used to create graphics and videos.

#### Logo with Floating Navigation Bar. 
**to be familiar, consistent and easy to use according to user needs

Includes Logo on left (Canva)

Navigation bar links to Home, Explore our Features and Book a Free Trial. (HTML)

Hamburger appears below 600px. Link highlights & animates upon hover. (CSS)

#### Footer
**To reinforce branding and consistent design **

### Home Page

#### Landing video with slogan.
**To create Intrigue and excitement, summarises the experience of the brand

Video collage of children using computers, classroom settings, children doing homework, children being happy on computer, parent's using computer. (Capcut, Opensource video) *Background video is always fixed to width of screen.


Slogan "Let's supercharge our Learning". Large and overlapping. (HTML,CSS) *Text adjusts by % of screen with vh.


#### Introduction of Platform.
**Summarise the platform's function and mission. Provide eye-catching visuals 

Heading: "Hoverboard is an all-in-one platform for virtual classrooms. Join us on our mission to help schools transition into the digital revolution." *Text adjusts by % of screen with vh.

Paragraph: More than ever, schools are in need to function efficiently and effectively to meet the needs of our students. That's why we've created Hoverboard. *Text adjusts by % of screen with vh, snaps to different position when larger than mobile.

Graphic showing beginning of an online lesson. It is designed on Canva as a mock-up with different features, showing student's connected, upload classwork, create doc icon. *Text adjusts by % of screen with vh.

#### Introduction of Features. 
**Client wants to see what the platform can do, direct's client to the Feature page
*Divide Heading-Image-Caption into 3 columns when above mobile height

Heading: "Collaborate, Communicate, Celebrate". *Text adjusts by % of screen with vh.

Images: Artwork being shared online, Learning Objectives set in classwork, pupil of the week. 

Caption: Each has a caption summarising in one sentence what Hoverboard can do.

Link: Click here to find out more about our features.

#### 6 Testimonials from different schools.
**Client needs trust built on the platform's brand.
Include teacher's picture, Each testimonial has a Staff picture, testimonial message. They are animated with a ticker effect.

*Features adjusts by % height of screen. Images are resized.

### Hoverboard features (page)
**This page introduces the client to Hoverboard's features. Each feature should have a tone of be exciting, modern and effective.** 

It is divided into 3 features each seperated by a different colour. 

Hovering over the image offers a specific caption for what is happening. e.g. Students at X school promote their news website. A student uploads their homework.

*Divide Heading-Image-Caption into 3 columns when above mobile height

Heading: Celebrate outcomes with highlighted work, news pages and merits.

Heading: Communicate with parents and students about their progress, with customised feedback.

Heading: Collaborate with live-lessons, allowing students to share their work instantly.

### Book a Free Trial (page)
**Allows Client to book the trial, it should be simple, easy to read and use
Form request with phone number. School. Email address. How did you hear about us.

## Design Choices

### Colour palette


<img width="209" alt="image" src="https://github.com/lmcrean/VirtualClassroomMockup/assets/133490867/3a759852-d382-46db-b2ed-201cb30f7fee">

**colour scheme is playful, modern, child-friendly. Evocative of ice-cream, it emphasises the fun aspect of the product.


#FFB86B orange

#E8568B pink

#54A3FF blue

#FFFB84 yellow

#94FF61 green



### Font Choices 
<img width="399" alt="image" src="https://github.com/lmcrean/VirtualClassroomMockup/assets/133490867/67cf6cfd-211b-4b1c-aafb-64667387621f">


Peace Sans for Headings.

Glacial Indifference for paragraphs.

**Playful on the surface and with profound educational intent.

### Background Squiggles
<img width="354" alt="image" src="https://github.com/lmcrean/VirtualClassroomMockup/assets/133490867/17d980ba-8046-46ef-924d-a62b17bd3c5d">

<img width="405" alt="image" src="https://github.com/lmcrean/VirtualClassroomMockup/assets/133490867/6f86d062-3411-4869-8992-b5554fb13d02">

<img width="303" alt="image" src="https://github.com/lmcrean/VirtualClassroomMockup/assets/133490867/56bb4ef3-0f80-4591-8eb1-dc9ce36a676e">

**Creativity, children-appropriate.

## Testing

### Fixed bugs
Documented here LINK

### Validator Testing

- HTML
  - No errors were returned when passing through the official [W3C validator](LINK)

- CSS
  - No errors were found when passing through the official [(Jigsaw) validator](LINK)

### Unfixed Bugs

## Deployment

The site was deployed to GitHub pages. The steps to deploy are as follows:

- In the GitHub repository, navigate to the Settings tab
- From the source section drop-down menu, select the Master Branch
- Once the master branch has been selected, the page will be automatically refreshed with a detailed ribbon display to indicate the successful deployment.

The live link can be found here - [LINK](LINK)

## Credits

### Content

- All graphics were designed on Canva.
- The icons were taken from [Font Awesome](https://fontawesome.com/)

### Media

- Images were imported from Opensource websites including
  - Unsplash
  - Pexels
- The videos used are from Pexels.

### Inspiration
SeeSaw https://web.seesaw.me/ A truly excellent platform with forward thinking features. Students are able to upload their classwork, can comment on students' work, teacher's can quickly assess. The website is efficient, user friendly, intuitively designed.

ClassCharts - Very good user interface/ UX. Notable features: teachers can see their students visually on a seating plan.

SatchelOne https://www.teamsatchel.com/ - Homework with deadlines on a calendar. Seating plan is virtual as well.

Brainstation.io - This website's use of Landing videos and ticker effect is very visually appealing.
