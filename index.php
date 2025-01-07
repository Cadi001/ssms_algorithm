
<html>
<head>

<body style="background-color: black; color: whitesmoke;">

<?php

use Cassandra\Date;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
$sections = [
    ['section' => 'C101', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'HIS101', 'PHY101', '6APPDEV']],
    ['section' => 'C102', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['ENG101', 'HIS101', 'PHY101', '6APPDEV']],
    ['section' => 'C103', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'HIS101', 'PHY101', '6APPDEV']],
    ['section' => 'C104', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['ENG101', 'HIS101', 'CHEM101', '6APPDEV']],
    ['section' => 'C105', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'ECO101', 'STAT101', '6APPDEV']],
    ['section' => 'C106', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'HIS101', 'STAT101', 'PROG101']],
    ['section' => 'C107', 'availability' => ['start_time'=> strtotime('07:00'), 'end_time'=> strtotime('04:00')],'bias'=>[], 'courses' => ['MATH101', 'ECO101', 'STAT101', '6APPDEV']],
    ['section' => 'C108', 'availability' => ['start_time'=> strtotime('12:00'), 'end_time'=> strtotime('21:00')],'bias'=>[], 'courses' => ['ECO101', 'BIO101', 'PHY101', 'PROG101']],
];
$courseLabBiased = ['6APPDEV'];
// 11 COURSE AS SAMPLE DATA
$courses = [
    ['course_code' => 'MATH101', 'course_type' => 'lec', 'course_name' => 'Math in the Modern World', 'hours' => 5, 'room_bias' => []],
    ['course_code' => 'HIS101', 'course_type' => 'lec', 'course_name' => 'History of Philippines', 'hours' => 3, 'room_bias' => []],
    ['course_code' => 'PHY101', 'course_type' => 'lec', 'course_name' => 'Fundamentals of Physics', 'hours' => 3, 'room_bias' => []],
    ['course_code' => 'BIO101', 'course_type' => 'lec-lab', 'course_name' => 'Introduction to Biology', 'hours' => 5, 'room_bias' => ['CLAB1', 'CLAB2']], // Lab bias added
    ['course_code' => 'CHEM101', 'course_type' => 'lec-lab', 'course_name' => 'Fundamentals of Chemistry', 'hours' => 5, 'room_bias' => ['CLAB1']], // Lab bias added
    ['course_code' => 'ENG101', 'course_type' => 'lec', 'course_name' => 'Reading English', 'hours' => 3, 'room_bias' => []],
    ['course_code' => 'CS101', 'course_type' => 'lec-lab', 'course_name' => 'Computer Science', 'hours' => 5, 'room_bias' => ['CLAB2', 'CLAB3']], // Lab bias added
    ['course_code' => 'ECO101', 'course_type' => 'lec', 'course_name' => 'Economics: Business Now', 'hours' => 5, 'room_bias' => ['L201']],
    ['course_code' => 'STAT101', 'course_type' => 'lec', 'course_name' => 'Statistics and Probability', 'hours' => 5, 'room_bias' => []],
    ['course_code' => 'PROG101', 'course_type' => 'lec-lab', 'course_name' => 'Advance Programming', 'hours' => 5, 'room_bias' => ['CLAB1', 'CLAB2']], // Lab bias added
    ['course_code' => '6APPDEV', 'course_type' => 'lec-lab', 'course_name' => 'Application Development', 'hours' => 5, 'room_bias' => ['CLAB1', 'CLAB2']] // Lab bias added
];



// 9 COURSE AS SAMPLE DATA
$rooms = [
    ['room' => 'L201','floor' => 2, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 55, 'room_type'=>'lec'],
    ['room' => 'CLAB1', 'floor' => 2, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'CLAB2', 'floor' => 2, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'L202', 'floor' => 2, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 55, 'room_type'=>'lec'],
    ['room' => 'CLAB3', 'floor' => 2, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'CLAB4', 'floor' => 2, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'L203', 'floor' => 2, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 55, 'room_type'=>'lec'],
    ['room' => 'L301', 'floor' => 3, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('21:00')], 'capacity'=> 40, 'room_type'=>'lab'],
    ['room' => 'L302', 'floor' => 3, 'availability' => ['start_time' => strtotime('07:00'), 'end_time' => strtotime('12:00')], 'capacity'=> 55, 'room_type'=>'lab'],
];
// 4 FACULTY AS SAMEPLE DATA
$faculties = [
    [
        'name' => 'Aldwin Nunag',
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
        'max_hours' => 25,
        'disability' => false,
        'room_preferences' => [] // Empty for no special preference
    ],
    [
        'name' => 'Paolo Santiago',
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
        'max_hours' => 25,
        'disability' => false,
        'room_preferences' => [] // Empty for no special preference
    ],
    [
        'name' => 'Nelsonjan Perez',
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
        'max_hours' => 25,
        'disability' => false,
        'room_preferences' => [] // Empty for no special preference
    ],
    [
        'name' => 'Lemuel Batongbakal',
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
        'max_hours' => 25,
        'disability' => true,
        'room_preferences' => ['ground_floor', 'easy_access'] // Room preferences for disability
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
function assignCoursesSectionsRoomsToFaculties()
{
    global $faculties, $courses, $sections, $coursesLimit, $rooms, $courseLabBiased;

    print('Assigning courses, sections, and rooms to faculties...<br>');
    $assignments = [];
    $facultiesReachedLimit = [];

    foreach ($faculties as &$faculty) {
        // Skip faculties that have reached their max teaching hours
        if (in_array($faculty['name'], $facultiesReachedLimit)) {
            continue;
        }

        foreach ($sections as $section) {
            foreach ($section['courses'] as $course_code) {
                // Check if faculty prefers the course and has available hours
                if (in_array($course_code, $faculty['preferred_courses']) && $faculty['max_hours'] > 0) {
                    // Find course details
                    $course = array_filter($courses, fn($c) => $c['course_code'] === $course_code && $coursesLimit[$course_code] > 0);
                    if (!$course) continue;

                    $course = current($course);

                    // Determine if the course has strict room requirements
                    $strictRoomType = in_array($course_code, $courseLabBiased); // Example: 6appdev only in lab

                    // Calculate hours for assignment
                    $remainingHours = $course['hours'];
                    while ($remainingHours > 0) {
                        $currentBlockHours = min(3, $remainingHours);

                        // Find a suitable room based on room type preference or strict requirement
                        $suitableRoom = null;
                        foreach ($rooms as $room) {
                            $isLab = $room['room_type'] === 'lab';
                            $isLec = $room['room_type'] === 'lec';

                            // Room must match strict requirements or default to lab/lec logic
                            if (
                                ($strictRoomType && $isLab) ||
                                (!$strictRoomType && (($remainingHours <= 2 && $isLec) || ($remainingHours > 2 && $isLab)))
                            ) {
                                $suitableRoom = $room;
                                break;
                            }
                        }

                        if (!$suitableRoom) break; // Stop if no suitable room is found

                        // Assign this block
                        $assignments[] = [
                            'faculty' => $faculty['name'],
                            'course' => $course_code,
                            'course_hours' => $currentBlockHours,
                            'section' => $section['section'],
                            'room' => $suitableRoom['room'],
                            'room_type' => $suitableRoom['room_type'],
                            'block_hours' => $currentBlockHours,
                        ];

                        $remainingHours -= $currentBlockHours;
                        $faculty['max_hours'] -= $currentBlockHours;

                        // Stop if faculty reaches their max teaching hours
                        if ($faculty['max_hours'] <= 0) {
                            $facultiesReachedLimit[] = $faculty['name'];
                            break;
                        }
                    }

                    // Decrement course availability
                    $coursesLimit[$course_code]--;
                }
            }
        }
    }

    return $assignments;
}

$occupiedRoom = [];
function isRoomAvailable($room, $startTime, $endTime, $roomOccupied)
{

}
function isFacultyAvailable($facultyName, $startTime, $endTime, $faculties)
{


}





print(json_encode(assignCoursesSectionsRoomsToFaculties(), JSON_PRETTY_PRINT));

function canSchedule(){

}


?>

</body>
</html>