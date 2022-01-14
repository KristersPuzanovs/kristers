</style>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <?php echo e(__('Dashboard')); ?>

    </h2>
 <?php $__env->endSlot(); ?>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-5">Tasks List</div>
                
                <div class="flex-auto text-right mt-2">
                    <a href="/task" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add new Task</a>
                </div>
            </div>
            <table class="w-full text-md rounded mb-4">
                <thead>
                <tr class="border-b">
                    <th class="text-left p-2 px-5">Task</th>
                    <th class="text-left p-3 px-5">Actions</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = auth()->user()->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-6">
                            <center><?php echo e($task->description); ?></center>
                            <center><input type="checkbox" id="done" name="done1[]" value="1"></center>
                        </td>
                        <td class="p-3 px-5">
                            
                            <a
                                href="/task/<?php echo e($task->id); ?>" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline"><center>Edit</center>
                                </a>
                                <div style="text-align: center;">
                                <form action="/task/<?php echo e($task->id); ?>" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                </div>
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/kristers/Dokumenti/laravel/resources/views/dashboard.blade.php ENDPATH**/ ?>