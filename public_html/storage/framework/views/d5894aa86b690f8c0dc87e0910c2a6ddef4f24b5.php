<form wire:submit.prevent="authenticate" class="space-y-8">

    <img src="/frontpage/content/uploads/2023/07/indokarta.png" style="margin: 0 auto; padding: 10px; width: 250px; height: 250px;">

    <?php echo e($this->form); ?>


    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button','data' => ['type' => 'submit','form' => 'authenticate','class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','form' => 'authenticate','class' => 'w-full']); ?>
        <?php echo e(__('filament::login.buttons.submit.label')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

</form>

<style>
.filament-brand.text-xl.font-bold.leading-5.tracking-tight {
    display: none;
}
</style><?php /**PATH /home/u726706882/domains/tracking.indokarta.co.id/public_html/resources/views/vendor/filament/login.blade.php ENDPATH**/ ?>