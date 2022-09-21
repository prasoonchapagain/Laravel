<html>
<head>
<body>
<a href="<?php echo e(url('/create')); ?>"><button>Create</button></body></a>
<table>
     <tr>
          <tb>Name</tb>
         <tb>Address</tb>
         <tb>Age</tb>
         <tb>Image</tb>
     </tr>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($student->Name); ?></td>
        <td><?php echo e($student->Address); ?></td>
        <td><?php echo e($student->Age); ?></td>
        <td><img src="<?php echo e(asset('storage/image/'.$student->image)); ?>"></td>
        <td><a href="<?php echo e(url('/edit/'.$student->id)); ?>">Edit</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</head>
</html>
<?php /**PATH C:\xampp\book_recommendation\resources\views/list.blade.php ENDPATH**/ ?>