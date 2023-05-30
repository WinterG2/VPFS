# Volunteer Platform for Student

Project description: 

    The issuance of the decision to add volunteer hours for high school students at the beginning of the current year, there have been problems in coordinating and managing volunteer hours for students and registering for volunteering campaigns due to there is no official platform that organizes this process for the students, presents volunteering opportunities for them and keeps records for their volunteering hours.

    Many schools and groups coordinate volunteering campaigns via WhatsApp and social media, and this creates confusion between students and school administration.

    Moreover, the national volunteer platforms are very general and do not consider the circumstances and capabilities of students as most of them are not familiar with many technical matters and do not have the social and professional experiences not to mention they are under the legal age.

We aim to:

    The aim of this project is to develop and produce an online platform that allows students to browse and register for volunteering campaigns and allows the school administration to monitor and track students' progress and makes it easier for organizations to publish their volunteering campaign advertisements. The final product of this project will be a website for all concerned parties (students + schools + institutions).

Tasks:

    Written in Task.txt but not finished yet (Will be updated soon)

Few prototypes we made:

    
    1- Home page:

![](./prototype/Home%20Page.png)

    2- Sign up:

![](./prototype/Sign%20up.png)

    3- Create a Campaign:

![](./prototype/Create%20Campagin.png)

    4- Review page:

![](./prototype/Review%20page.png)

    5- View events history:

![](./prototype/View%20events.png)


The implementation:

It starts with redirecting to a homepage in a folder, then the JavaScript will fetch the whole events from the database using AJAX with php code.
Then the Javascript with analysis the whole data and create a card append it into HTML Home Page.
The navigation has:
    - Icon bar which will transfer back to the home page.
    - Search bar which will search for either city, title or organization name. And create new events in the home page (it is broken. We are working to fix it).
    - Account bar Which require to log in via email/National ID or register.
        After a user is logged in, the account bar will change based on the role:
            Student: Will get an account button (Which will show all the progress, history and account information) and a logout button.
            School: Will get an account button (Which will show all student progress, student history and account information), and a logout button.
            Organization: Will get an account button (Which will show all events in board and student appling/requesting to join, event history, closing event/rate students and account information), create event button (Which will display a new window, to get all the event information and insert it into a database) and a logout button.

Obv it is still on progress and we are nearly to finish.

Thanks for reading :D

Winter Group #2 