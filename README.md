
<center>
    <h4>All rights reserved to Cadi IT Solutions founded by Aldwin Nunag &copy; 2022</h4>
    <img src="images/CADITISOL.jpg">
</center>
<small>Cadi IT Solution is a comprehensive IT service provider dedicated to delivering tailored technology solutions for businesses. From software development and system integration to IT consultancy and support, we ensure our clients achieve efficiency and innovation through cutting-edge technology. 
Partner with us for reliable and customized IT solutions that drive your success.</small>

<hr>

<h1>Ale Scheduling Algorithm</h1>

The function "`countAvailablePerSubject()`" gets all the subjects that the students currently take and how many sections take each courses.
the return value is:

    {"MATH101":5,"HIS101":6,"PHY101":4,"BIO101":0,"CHEM101":1,"ENG101":2,"CS101":0,"ECO101":3,"STAT101":3,"PROG101":2,"6APPDEV":6}

it is an associative array where its key is the course code and the limit of each "courses" is the "value"

The function "<code>assignCoursesToFaculties()</code>" will assign courses to faculties based on the following constraints:
    <ul>
        <li>Preferred courses of faculty it will teach.</li>
        <li>
            Max of 25 hours per faculty
            <ul>
                <li>If the faculty limit reached 0 value, proceed with the next faculty.</li>
            </ul>
        </li>
        <li>
            Each subjects has its own time limit that is used to deduct on total hours faculty what it is assigned
            <ul>
            <li>If the course limit reached 0 value, proceed with the next course.</li>
            </ul>
        </li>
    </ul>

<hr>

<h3>Features to be implemented for Web Application</h3> 
<ul>
    <li>Add Cron jobs for notifying faculty students about their schedule every day</li>

[//]: # (    <li></li>)
</ul>