
<center>
    <h5>All rights reserved to Cadi IT Solutions founded by Aldwin Nunag &copy; 2022</h5>
    <img src="images/CADITISOL.jpg" width="60%">
</center>
<br>
<small>Cadi IT Solution is a comprehensive IT service provider dedicated to delivering tailored technology solutions for businesses. From software development and system integration to IT consultancy and support, we ensure our clients achieve efficiency and innovation through cutting-edge technology. 
Partner with us for reliable and customized IT solutions that drive your success.</small>

<hr>

<h3>Disclaimer</h3>
The ALE Scheduling Algorithm is exclusively developed by Cadi IT Solutions, founded by Aldwin Nunag. This algorithm and its implementation are proprietary and intended solely for use within authorized projects.
Any redistribution, modification, or unauthorized use of this algorithm is strictly prohibited without prior written consent from Cadi IT Solutions.

<hr>

# Ale Scheduling Algorithm

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

### Features to be implemented for Web Application 
<ul>
    <li>Add Cron jobs for notifying faculty students about their schedule every day</li>
    <li>Automated Scheduling, lessen the manual scheduling during initial scheduling.</li>
</ul>