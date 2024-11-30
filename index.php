<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
$sections = [
    ['C101', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'HIS101', 'PHY101', '6APPDEV']],
    ['C102', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['ENG101', 'HIS101', 'PHY101', '6APPDEV']],
    ['C103', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'HIS101', 'PHY101', '6APPDEV']],
    ['C104', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['ENG101', 'HIS101', 'CHEM101', '6APPDEV']],
    ['C105', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'ECO101', 'STAT101', '6APPDEV']],
    ['C106', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'HIS101', 'STAT101', 'PROG101']],
    ['C107', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'ECO101', 'STAT101', '6APPDEV']],
    ['C108', 'availability' => ['start_time'=> strtotime('12:00'), 'end_time'=> strtotime('21:00')],'bias'=>[], 'courses' => ['ECO101', 'HIS101', 'PHY101', 'PROG101']],
];

// 11 COURSE AS SAMPLE DATA
$courses = [
    ['course_code' => 'MATH101', 'course_type'=>'lec', 'course_name' => 'Math in the Modern World','hours' => 5,'room_bias' =>[]],
    ['course_code' => 'HIS101', 'course_type'=>'lec', 'course_name' => 'History of Philippines', 'hours' => 3, 'room_bias' =>[]],
    ['course_code' => 'PHY101', 'course_type'=>'lec', 'course_name' => 'Fundamentals of Physics','hours' => 3, 'room_bias' =>[]],
    ['course_code' => 'BIO101', 'course_type'=>'lec-lab', 'course_name' => 'Introduction to Biology', 'hours' => 5, 'room_bias' =>[]],
    ['course_code' => 'CHEM101', 'course_type'=>'lec-lab', 'course_name' => 'Fundamentals of Chemistry', 'hours' => 3, 'room_bias' =>[]],
    ['course_code' => 'ENG101', 'course_type'=>'lec', 'course_name' => 'Reading English', 'hours' => 3, 'room_bias' =>[]],
    ['course_code' => 'CS101', 'course_type'=>'lec-lab', 'course_name' => 'Computer Science', 'hours' => 5,'room_bias' =>[]],
    ['course_code' => 'ECO101', 'course_type'=>'lec', 'course_name' => 'Economics:Business now a hours', 'hours' => 5, 'room_bias' =>[]],
    ['course_code' => 'STAT101', 'course_type'=>'lec', 'course_name' => 'Statistics and Probability', 'hours' => 5, 'room_bias' =>[]],
    ['course_code' => 'PROG101', 'course_type'=>'lec-lab', 'course_name' => 'Advance Programming', 'hours' => 5, 'room_bias' =>[]],
    ['course_code' => '6APPDEV', 'course_type'=>'lec-lab', 'course_name' => 'Application Developement', 'hours' => 5, 'room_bias' =>[]],
];

// 9 COURSE AS SAMPLE DATA
$rooms = [
    ['room' => 'Room A', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 55, 'room_type'=>'lec'],
    ['room' => 'Room B', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'Room C', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'Room D', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 55, 'room_type'=>'lec'],
    ['room' => 'Room E', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'Room F', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'Room G', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 55, 'room_type'=>'lec'],
    ['room' => 'Room H', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'Contact Center', 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('12:00')], 'capacity'=> 55, 'room_type'=>'lab'],
];
// 4 FACULTY AS SAMEPLE DATA
$faculties = [
    ['name' => 'Aldwin Nunag',
    'preferred_schedule' => [
        'monday' => ['start_time' => '08:00', 'end_time' => '17:00'],
        'teusday' => ['start_time' => '08:00', 'end_time' => '17:00'],
        'wednesday' => ['start_time' => '08:00', 'end_time' => '17:00'],
        'thursday' => ['start_time' => '08:00', 'end_time' => '17:00'],
        'friday' => ['start_time' => '08:00', 'end_time' => '17:00']
       ],
       'status' => 'full-time',
       'days' => 5,
       'preferred_courses' => ['6APPDEV', 'PROG101'],
       'max_hours' => 25
    ],
    ['name' => 'Paolo Santiago',
    'preferred_schedule' => [
        'monday' => ['start_time' => '07:00', 'end_time' => '16:00'],
        'teusday' => ['start_time' => '07:00', 'end_time' => '16:00'],
        'wednesday' => ['start_time' => '07:00', 'end_time' => '16:00'],
        'thursday' => ['start_time' => '07:00', 'end_time' => '16:00'],
        'friday' => ['start_time' => '07:00', 'end_time' => '16:00']
       ],
       'status' => 'full-time',
       'days' => 5,
       'preferred_courses' => ['HIS101', 'ECO101'],
       'max_hours' => 25
    ],
    ['name' => 'Nelsonjan Perez',
    'preferred_schedule' => [
        'monday' => ['start_time' => '13:00', 'end_time' => '21:00'],
        'teusday' => ['start_time' => '13:00', 'end_time' => '21:00'],
        'wednesday' => ['start_time' => '13:00', 'end_time' => '21:00'],
        'thursday' => ['start_time' => '13:00', 'end_time' => '21:00'],
        'Saturday' => ['start_time' => '13:00', 'end_time' => '21:00']
       ],
       'status' => 'full-time',
       'days' => 5,
       'preferred_courses' => ['CHEM101', 'PROG101'],
       'max_hours' => 25
    ],
    ['name' => 'Lemuel Batongbakal',
    'preferred_schedule' => [
        'monday' => ['start_time' => '08:00', 'end_time' => '17:00'],
        'teusday' => ['start_time' => '08:00', 'end_time' => '17:00'],
        'wednesday' => ['start_time' => '08:00', 'end_time' => '17:00'],
        'thursday' => ['start_time' => '08:00', 'end_time' => '17:00'],
        'friday' => ['start_time' => '08:00', 'end_time' => '17:00']
       ],
       'status' => 'full-time',
       'days' => 5,
       'preferred_courses' => ['6APPDEV', 'BIO101'],
       'max_hours' => 25
    ]


];


// count how many sections each course will be assigned to
$coursesLimit = [];
// to access start time use this $faculty['preferred_schedule']['monday']['start_time']
function countAvailablePerSubject() {
    global $courses, $sections, $coursesLimit;

    // Initialize the $coursesLimit associative array before populating
    $coursesLimit = [];

    // Loop through each course
    foreach ($courses as $course) {
        $total = 0;  // Initialize the total count for the current course

        // Loop through each section to count how many sections have the current course
        foreach ($sections as $section) {
            if (in_array($course['course_code'], $section['courses'])) {
                $total++;  // Increment the count if this course is in the section
            }
        }

        // Store the result in the $coursesLimit associative array with course_code as the key
        $coursesLimit[$course['course_code']] = $total;
    }

    // Return the $coursesLimit associative array
    return $coursesLimit;
}

// Call the function and store the result in the $coursesLimit variable
$coursesLimit = countAvailablePerSubject();





/*
 *   IMPLEMENTED CONSTRAINTS
 *   THE LIMITS THAT COURSES HOLDS IS HOW MANY DOES SECTION TAKE THE SPECIFIC COURSES
 *   EACH COURSES ASSIGNMENT WILL DEDUCT THE MAX_HOURS OF FACULTY WITH COURSE['HOURS']
 *
 *   ISSUES
 *
 *   ISSUES FIXED
 *   ASSIGNING FACULTIES TO SUBJECT IS NOW WORKING
 *   DIFFERENT SUBJECT IS NOT DETECTED IN MAX 25 HOURS
 * */
function assignCoursesToFaculties() {
    global $faculties, $courses, $sections, $coursesLimit;
    print("List of courses can be assigned: ".json_encode($coursesLimit));
//    print( json_encode($coursesLimit['PROG101']));
    $assignments = [];
    $facultiesReachedLimit = [];

    foreach ($faculties as &$faculty) {
        // Skip if faculty has already been assigned the maximum number of hours
        if (in_array($faculty['name'], $facultiesReachedLimit)) {
            continue;
        }

        // Loop through the sections and assign courses to faculties based on preferences
        foreach ($sections as $section) {
            // Check for matching courses for the current section
            foreach ($section['courses'] as $course_code) {
                // Check if the faculty prefers this course and has time
                if (in_array($course_code, $faculty['preferred_courses']) && $faculty['max_hours'] > 0) {
                    // Check if the course exists in the available courses list
                    $course = null;

                    foreach ($courses as $available_course) {
                        if ($available_course['course_code'] == $course_code && $coursesLimit[$available_course['course_code']] > 0) {
                            $course = $available_course;
                            break;
                        }
                    }

                    // If course is found and faculty has enough remaining hours
                    if ($course && $faculty['max_hours'] >= $course['hours']) {
                        // Assign the course to the faculty (without assigning room)
                        $assignments[] = [
                            'course' => $course_code,
                            'faculty' => $faculty['name'],
                            // Remove room assignment part temporarily
                            // 'room' => $room['room']
                        ];
                        $coursesLimit[$course['course_code']]--;

                        // Decrease faculty's remaining available hours
                        $faculty['max_hours'] -= $course['hours'];


                        // Mark faculty as reached limit if max hours is zero or less
                        if ($faculty['max_hours'] <= 0) {
                            $facultiesReachedLimit[] = $faculty['name'];
                        }
                    }
                }
            }
        }
    }

    return $assignments;
}



// Calling the function and printing the assignments
$assignments = assignCoursesToFaculties();
echo "<pre>" . print_r($assignments, true) . "</pre>";



//echo json_encode(assignCourseToFaculty(), JSON_PRETTY_PRINT);
//print_r($coursesLimit);

function assignRoomsToCourses(){

}
function canSchedule(){

}


?>
