<?php

// Days of the week (Monday to Saturday)
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

// Sections
$sections = ['Section A', 'Section B', 'Section C', 'Section D'];

// Time intervals (30 minutes)
$timeIntervals = [];
$startTime = strtotime('08:00');
$endTime = strtotime('18:00');
while ($startTime <= $endTime) {
    $timeIntervals[] = date('H:i', $startTime);
    $startTime = strtotime('+30 minutes', $startTime);
}

// Classes (subjects) with start and end times, and assigned sections
$classes = [
    ['name' => 'Math 101', 'start' => '08:00', 'end' => '09:30', 'days' => 5, 'section' => 'Section A'],
    ['name' => 'History 202', 'start' => '09:30', 'end' => '11:00', 'days' => 3, 'section' => 'Section A'],
    ['name' => 'Physics 303', 'start' => '08:30', 'end' => '10:00', 'days' => 4, 'section' => 'Section B'],
    ['name' => 'Biology 404', 'start' => '11:00', 'end' => '12:30', 'days' => 5, 'section' => 'Section B'],
    ['name' => 'Chemistry 505', 'start' => '01:00', 'end' => '02:30', 'days' => 2, 'section' => 'Section C'],
    ['name' => 'English 101', 'start' => '08:00', 'end' => '09:30', 'days' => 3, 'section' => 'Section C'],
    ['name' => 'Computer Science 201', 'start' => '10:00', 'end' => '11:30', 'days' => 4, 'section' => 'Section D'],
    ['name' => 'Economics 303', 'start' => '09:30', 'end' => '11:00', 'days' => 5, 'section' => 'Section D'],
    ['name' => 'Statistics 404', 'start' => '11:30', 'end' => '01:00', 'days' => 5, 'section' => 'Section A'],
    ['name' => 'Programming 505', 'start' => '02:00', 'end' => '03:30', 'days' => 3, 'section' => 'Section B'],
];

// Rooms
$rooms = [
    ['room' => 'Room A', 'availability' => []],
    ['room' => 'Room B', 'availability' => []],
    ['room' => 'Room C', 'availability' => []],
    ['room' => 'Room D', 'availability' => []],
];

// Check if a room is available
function isRoomAvailable($room, $class, $day) {
    if (!isset($room['availability'][$day])) {
        $room['availability'][$day] = [];
    }

    foreach ($room['availability'][$day] as $slot) {
        if (
            strtotime($class['start']) < strtotime($slot['end']) &&
            strtotime($class['end']) > strtotime($slot['start'])
        ) {
            return false; // Overlapping schedule
        }
    }
    return true;
}

// Assign rooms
$roomAssignments = [];
foreach ($classes as $class) {
    $assignedDays = 0;
    $currentDayIndex = 0;

    while ($assignedDays < $class['days'] && $currentDayIndex < count($days)) {
        $day = $days[$currentDayIndex];
        $assigned = false;

        foreach ($rooms as &$room) {
            if (isRoomAvailable($room, $class, $day)) {
                $roomAssignments[] = [
                    'class' => $class['name'],
                    'room' => $room['room'],
                    'day' => $day,
                    'start' => $class['start'],
                    'end' => $class['end'],
                    'section' => $class['section'],
                ];

                $room['availability'][$day][] = [
                    'start' => $class['start'],
                    'end' => $class['end'],
                ];

                $assigned = true;
                $assignedDays++;
                break;
            }
        }

        if ($assigned) {
            $currentDayIndex++;
        }
    }
}

// Group schedules by section
$sectionSchedules = [];
foreach ($roomAssignments as $assignment) {
    $sectionSchedules[$assignment['section']][] = $assignment;
}

// Display as a calendar-like table
echo "<h1>Class Schedules</h1>";
foreach ($sections as $section) {
    echo "<h2>{$section}</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
    echo "<thead>
            <tr>
                <th>Time</th>";
    foreach ($days as $day) {
        echo "<th>{$day}</th>";
    }
    echo "</tr>
          </thead>";
    echo "<tbody>";

    foreach ($timeIntervals as $time) {
        echo "<tr>";
        echo "<td>{$time}</td>";

        foreach ($days as $day) {
            $cellContent = '';
            foreach ($sectionSchedules[$section] ?? [] as $schedule) {
                if ($schedule['day'] === $day && strtotime($schedule['start']) <= strtotime($time) && strtotime($schedule['end']) > strtotime($time)) {
                    $cellContent = "{$schedule['class']}<br>({$schedule['room']})";
                    break;
                }
            }
            echo "<td style='min-width: 120px;'>{$cellContent}</td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "<br>";
}
?>
