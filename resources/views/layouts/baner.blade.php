<div class="container-fluid w-75" id="tMain">
  <h1 class="text-light text-center text-uppercase text-animation" id="gText">{{ __('main.baner-text.heading') }}</h1>
  <p class="text-light text-center text-animation" id="rezime">{{ __('main.baner-text.description') }}</p> 
  <div class="container d-flex justify-content-center" id="gDugme">
        <button href="kontakt.html" class="btn btn-outline-light fs-4 text-uppercase text-animation" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" id="header_btn">{{ __('main.baner-text.button') }}</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">{{ __('form.button') }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row mb-3">
                              <div class="col my-2">
                                <div class="form-floating">
                                  <input type="text" class="form-control form-control-dark bg-body-tertiary" id="ime" placeholder="Ime" required>
                                  <label for="ime">{{ __('form.modal.name') }}</label>
                                  <div class="invalid-feedback">{{ __('validation.filled') }}</div>
                                </div>
                              </div>
                              <div class="col my-2">
                                <div class="form-floating">
                                  <input type="text" class="form-control form-control-dark bg-body-tertiary" id="prezime" placeholder="Prezime" required>
                                  <label for="prezime">{{ __('form.modal.surname') }}</label>
                                  <div class="invalid-feedback">{{ __('validation.filled') }}</div>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col my-2">
                                  <div class="form-floating">
                                    <input type="tel" id="phone" class="form-control form-control-dark bg-body-tertiary" name="phone" placeholder="Telefon" pattern="[+]?[\d\s-]*" required>
                                    <label for="phone">{{ __('form.modal.phone') }}</label>
                                    <div class="invalid-feedback">{{ __('validation.filled') }}</div>
                                  </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col my-2">
                                <div class="form-floating">
                                  <input type="email" class="form-control form-control-dark bg-body-tertiary" id="email" placeholder="Email" required>
                                  <label for="email">{{ __('form.modal.email') }}</label>
                                  <div class="invalid-feedback">{{ __('validation.filled') }}</div>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col my-2">
                                <div class="form-floating">
                                  <input type="datetime-local" id="datetime" class="form-control form-control-dark bg-body-tertiary" placeholder="Datum i vreme sisanja" value="2024-04-01T09:30" required>
                                  <label for="datetime">{{ __('form.modal.date') }}</label>
                                  <div class="invalid-feedback">{{ __('validation.filled') }}</div>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col my-2 d-flex justify-content-around">
                                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">{{ __('form.modal.exit') }}</button>
                                <button type="submit" class="btn btn-outline-dark">{{ __('form.modal.send') }}</button>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>