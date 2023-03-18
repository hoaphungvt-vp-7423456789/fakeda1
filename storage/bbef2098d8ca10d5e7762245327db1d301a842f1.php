
<?php $__env->startSection('title', 'Danh sách biến thể'); ?>
<?php $__env->startSection('main'); ?>
<section class="d-flex justify-content-between align-items-center">
    <form class="d-flex align-items-center">
        <div class="col-auto">
            <input type="text" class="form-control" placeholder="Tên biến thể...">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-success ms-2">Tìm kiếm</button>
        </div>
    </form>
    <a href="<?php echo e(BASE_URL . '/variation-create'); ?>" class="btn btn-success">Thêm biến thể</a>
</section>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Màu sắc</th>
            <th scope="col">Size</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá</th>
            <th scope="col">Giảm giá</th>
            <th scope="col" colspan="2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listVariation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e(++$key); ?></th>
            <td scope="row" style="max-width: 150px;">
                <p class="short-3"><?php echo e($item->products->name); ?></p>
            </td>
            <td scope="row"><?php echo e($item->color->name); ?></td>
            <td scope="row"><?php echo e($item->size->name); ?></td>
            <td scope="row"><?php echo e($item->quantity); ?></td>
            <td scope="row"><?php echo e($item->price); ?></td>
            <td scope="row"><?php echo e($item->discount); ?></td>
            <td scope="row" class="text-end">
                <form action="<?php echo e(BASE_URL . '/variation-edit'); ?>">
                    <input type="number" value="<?php echo e($item->id); ?>" name="id" hidden>
                    <button class="btn btn-primary">Sửa</button>
                </form>
            </td>
            <td scope="row" class="text-start">
                <form action="<?php echo e(BASE_URL . '/variation-destroy'); ?>">
                    <input type="number" value="<?php echo e($item->id); ?>" name="id" hidden>
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa biến thể không')">Xóa</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\da1\app\views/admin/variation/index.blade.php ENDPATH**/ ?>