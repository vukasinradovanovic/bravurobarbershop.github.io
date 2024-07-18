

<?php $__env->startSection('header'); ?>
<div class="row bg-body-tertiary text-center px-0 m-0 align-items-center" style="--bs-bg-opacity: .8;">
            <?php echo $__env->make('layouts.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-12 col-md-5">
                <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <hr class="border border-dark border-3 opacity-75 w-100 my-0">
        
        <div class="container-fluid w-75" id="tMain">
            <h1 class="text-light text-center text-uppercase text-animation" id="gText">Mesto gde se tradicija susreće sa savremenim trendovima</h1>
            <p class="text-light text-center text-animation" id="rezime">Bravuro je berbernica koja kombinuje klasičnu eleganciju sa savremenim trendovima. Naši vešti berberi pružaju vrhunsku uslugu šišanja i brijanja, uz pažljivu negu i stilski dotok. Posetite nas i doživite iskustvo pravog džentlmena!</p>
            <div class="container d-flex justify-content-center" id="gDugme">
                <button href="kontakt.html" class="btn btn-outline-light fs-4 text-uppercase text-animation" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" id="header_btn">Zakažite termin</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Zakažite termin</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row mb-3">
                                      <div class="col my-2">
                                        <div class="form-floating">
                                          <input type="text" class="form-control form-control-dark bg-body-tertiary" id="ime" placeholder="Ime" required>
                                          <label for="ime">Ime</label>
                                          <div class="invalid-feedback">Morate popuniti ovo polje.</div>
                                        </div>
                                      </div>
                                      <div class="col my-2">
                                        <div class="form-floating">
                                          <input type="text" class="form-control form-control-dark bg-body-tertiary" id="prezime" placeholder="Prezime" required>
                                          <label for="prezime">Prezime</label>
                                          <div class="invalid-feedback">Morate popuniti ovo polje.</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col my-2">
                                          <div class="form-floating">
                                            <input type="tel" id="phone" class="form-control form-control-dark bg-body-tertiary" name="phone" placeholder="Telefon" pattern="[+]?[\d\s-]*" required>
                                            <label for="phone">Telefon</label>
                                            <div class="invalid-feedback">Morate popuniti ovo polje sa validnom email adresom.</div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col my-2">
                                        <div class="form-floating">
                                          <input type="email" class="form-control form-control-dark bg-body-tertiary" id="email" placeholder="Email" required>
                                          <label for="email">Email</label>
                                          <div class="invalid-feedback">Morate popuniti ovo polje sa validnom email adresom.</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col my-2">
                                        <div class="form-floating">
                                          <input type="datetime-local" id="datetime" class="form-control form-control-dark bg-body-tertiary" placeholder="Datum i vreme sisanja" value="2024-04-01T09:30" required>
                                          <label for="datetime">Datum i vreme šišanja</label>
                                          <div class="invalid-feedback">Morate popuniti ovo polje.</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col my-2 text-center">
                                        <button type="submit" class="btn btn-outline-light fs-5">Pošalji</button>
                                      </div>
                                    </div>
                                  </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Zatvori</button>
                                <button type="button" class="btn btn-outline-dark">Potvrdi termin</button>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/welcome.blade.php ENDPATH**/ ?>