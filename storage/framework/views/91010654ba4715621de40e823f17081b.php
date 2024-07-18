<form>
    <div class="row mb-3">
    <div class="col my-2">
        <div class="form-floating">
        <input type="text" class="form-control form-control-dark bg-body-tertiary" id="ime" placeholder="Ime" required>
        <label for="ime"><?php echo e(__('form.modal.name')); ?></label>
        <div class="invalid-feedback">Morate popuniti ovo polje.</div>
        </div>
    </div>
    <div class="col my-2">
        <div class="form-floating">
        <input type="text" class="form-control form-control-dark bg-body-tertiary" id="prezime" placeholder="Prezime" required>
        <label for="prezime"><?php echo e(__('form.modal.surname')); ?></label>
        <div class="invalid-feedback">Morate popuniti ovo polje.</div>
        </div>
    </div>
    </div>
    <div class="row mb-3">
        <div class="col my-2">
        <div class="form-floating">
            <input type="tel" id="phone" class="form-control form-control-dark bg-body-tertiary" name="phone" placeholder="Telefon" pattern="[+]?[\d\s-]*" required>
            <label for="phone"><?php echo e(__('form.modal.phone')); ?></label>
            <div class="invalid-feedback">Morate popuniti ovo polje sa validnom email adresom.</div>
        </div>
        </div>
    </div>
    <div class="row mb-3">
    <div class="col my-2">
        <div class="form-floating">
        <input type="email" class="form-control form-control-dark bg-body-tertiary" id="email" placeholder="Email" required>
        <label for="email"><?php echo e(__('form.modal.email')); ?></label>
        <div class="invalid-feedback">Morate popuniti ovo polje sa validnom email adresom.</div>
        </div>
    </div>
    </div>
    <div class="row mb-3">
    <div class="col my-2">
        <div class="form-floating">
        <input type="datetime-local" id="datetime" class="form-control form-control-dark bg-body-tertiary" placeholder="Datum i vreme sisanja" value="2024-04-01T09:30" required>
        <label for="datetime"><?php echo e(__('form.modal.date')); ?></label>
        <div class="invalid-feedback">Morate popuniti ovo polje.</div>
        </div>
    </div>
    </div>
    <div class="row mb-3">
    <div class="col my-2 text-center">
        <button type="submit" class="btn btn-outline-light fs-5"><?php echo e(__('form.modal.send')); ?></button>
    </div>
    </div>
</form><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/layouts/form.blade.php ENDPATH**/ ?>