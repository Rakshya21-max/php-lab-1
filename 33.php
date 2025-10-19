<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "colleges");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// -------- COURSES CRUD --------

// Create Course
if (isset($_POST['add_course'])) {
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];
    $conn->query("INSERT INTO courses (title,duration,status) 
                  VALUES ('$title','$duration','$status')");
}

// Update Course
if (isset($_POST['update_course'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];
    $conn->query("UPDATE courses SET title='$title', duration='$duration', status='$status' WHERE id=$id");
}

// Delete Course
if (isset($_GET['delete_course'])) {
    $id = $_GET['delete_course'];
    $conn->query("DELETE FROM courses WHERE id=$id");
}

// Get course for editing
$editCourse = null;
if (isset($_GET['edit_course'])) {
    $id = $_GET['edit_course'];
    $res = $conn->query("SELECT * FROM courses WHERE id=$id");
    $editCourse = $res->fetch_assoc();
}

// -------- STUDENTS CRUD --------

// Create Student
if (isset($_POST['add_student'])) {
    $name = $_POST['name'];
    $course_id = $_POST['course_id'];
    $fee = $_POST['fee'];
    $rollno = $_POST['rollno'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $status = $_POST['status'];
    $conn->query("INSERT INTO students (name,course_id,fee,rollno,phone,address,dob,status) 
                  VALUES ('$name','$course_id','$fee','$rollno','$phone','$address','$dob','$status')");
}

// Update Student
if (isset($_POST['update_student'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $course_id = $_POST['course_id'];
    $fee = $_POST['fee'];
    $rollno = $_POST['rollno'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $status = $_POST['status'];
    $conn->query("UPDATE students SET 
        name='$name', course_id='$course_id', fee='$fee', rollno='$rollno',
        phone='$phone', address='$address', dob='$dob', status='$status'
        WHERE id=$id");
}

// Delete Student
if (isset($_GET['delete_student'])) {
    $id = $_GET['delete_student'];
    $conn->query("DELETE FROM students WHERE id=$id");
}

// Get student for editing
$editStudent = null;
if (isset($_GET['edit_student'])) {
    $id = $_GET['edit_student'];
    $res = $conn->query("SELECT * FROM students WHERE id=$id");
    $editStudent = $res->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head><title>CRUD - Courses & Students</title></head>
<body>
<h3>Course Form</h3>
<form method="post">
    <input type="hidden" name="id" value="<?= $editCourse['id'] ?? '' ?>">
    Title: <input type="text" name="title" value="<?= $editCourse['title'] ?? '' ?>" required><br>
    Duration: <input type="text" name="duration" value="<?= $editCourse['duration'] ?? '' ?>"><br>
    Status: <input type="text" name="status" value="<?= $editCourse['status'] ?? '' ?>"><br>
    <?php if ($editCourse) { ?>
        <input type="submit" name="update_course" value="Update Course">
    <?php } else { ?>
        <input type="submit" name="add_course" value="Add Course">
    <?php } ?>
</form>

<h3>Courses List</h3>
<table border="1" cellpadding="3">
<tr><th>ID</th><th>Title</th><th>Duration</th><th>Status</th><th>Created</th><th>Updated</th><th>Action</th></tr>
<?php
$res = $conn->query("SELECT * FROM courses");
while($c = $res->fetch_assoc()) {
    echo "<tr>
        <td>{$c['id']}</td><td>{$c['title']}</td><td>{$c['duration']}</td>
        <td>{$c['status']}</td><td>{$c['created_at']}</td><td>{$c['updated_at']}</td>
        <td><a href='?edit_course={$c['id']}'>Edit</a> | <a href='?delete_course={$c['id']}'>Delete</a></td>
    </tr>";
}
?>
</table>

<hr>
<h3>Student Form</h3>
<form method="post">
    <input type="hidden" name="id" value="<?= $editStudent['id'] ?? '' ?>">
    Name: <input type="text" name="name" value="<?= $editStudent['name'] ?? '' ?>" required><br>
    Course: 
    <select name="course_id" required>
        <option value="">--Select--</option>
        <?php
        $courses = $conn->query("SELECT * FROM courses");
        while($c = $courses->fetch_assoc()) {
            $selected = ($editStudent && $editStudent['course_id']==$c['id']) ? "selected" : "";
            echo "<option value='{$c['id']}' $selected>{$c['title']}</option>";
        }
        ?>
    </select><br>
    Fee: <input type="text" name="fee" value="<?= $editStudent['fee'] ?? '' ?>"><br>
    Roll No: <input type="text" name="rollno" value="<?= $editStudent['rollno'] ?? '' ?>"><br>
    Phone: <input type="text" name="phone" value="<?= $editStudent['phone'] ?? '' ?>"><br>
    Address: <input type="text" name="address" value="<?= $editStudent['address'] ?? '' ?>"><br>
    DOB: <input type="date" name="dob" value="<?= $editStudent['dob'] ?? '' ?>"><br>
    Status: <input type="text" name="status" value="<?= $editStudent['status'] ?? '' ?>"><br>
    <?php if ($editStudent) { ?>
        <input type="submit" name="update_student" value="Update Student">
    <?php } else { ?>
        <input type="submit" name="add_student" value="Add Student">
    <?php } ?>
</form>

<h3>Students List</h3>
<table border="1" cellpadding="3">
<tr><th>ID</th><th>Name</th><th>Course</th><th>Fee</th><th>RollNo</th><th>Phone</th><th>Address</th><th>DOB</th><th>Status</th><th>Created</th><th>Updated</th><th>Action</th></tr>
<?php
$res = $conn->query("SELECT students.*, courses.title as course_title 
                     FROM students LEFT JOIN courses ON students.course_id=courses.id");
while($s = $res->fetch_assoc()) {
    echo "<tr>
        <td>{$s['id']}</td><td>{$s['name']}</td><td>{$s['course_title']}</td>
        <td>{$s['fee']}</td><td>{$s['rollno']}</td><td>{$s['phone']}</td>
        <td>{$s['address']}</td><td>{$s['dob']}</td><td>{$s['status']}</td>
        <td>{$s['created_at']}</td><td>{$s['updated_at']}</td>
        <td><a href='?edit_student={$s['id']}'>Edit</a> | <a href='?delete_student={$s['id']}'>Delete</a></td>
    </tr>";
}
?>
</table>
</body>
</html>
