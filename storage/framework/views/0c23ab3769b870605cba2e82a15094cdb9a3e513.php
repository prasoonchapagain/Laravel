
<html>
<head>
    <title>Create</title>
</head>
<body>
<form method="post" action="<?php echo e(action([\App\Http\Controllers\PagesController::class,'update'])); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type = "hidden" name = "id" value="<?php echo e($student->id); ?>">
    <label> Name:</label>
    <input type ="text" name="name" value="<?php echo e($student->Name); ?>" required>
    <label> Address:</label>
    <input type ="text" name="address" value = "<?php echo e($student->address); ?>"required>
    <label> Age:</label>
    <input type ="number" name="age" value = "<?php echo e($student->age); ?>"required>
    <input type ="submit">
</form>
<?php /**PATH C:\xampp\book_recommendation\resources\views/update.blade.php ENDPATH**/ ?>