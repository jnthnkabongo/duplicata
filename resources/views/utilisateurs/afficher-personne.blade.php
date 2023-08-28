@extends('layouts.entete')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 mt-5">
            <section class="section">
                <div class="row">
                  <div class="col-lg-12">

                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Ajouter d'un electeur</h5>

                        <form action="{{ route('ajouter-personne',$duplicata->id) }}" method="POST">
                            @csrf
                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                              <input name="nom" type="text" class="form-control" value="{{ $duplicata->nom }}">
                                @error("nom")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Postnom</label>
                            <div class="col-sm-10">
                              <input name="postnom" type="text" class="form-control" value="{{ $duplicata->postnom}}">
                                @error("postnom")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Prenom</label>
                            <div class="col-sm-10">
                              <input name="prenom" type="text" class="form-control" value="{{ $duplicata->prenom }}">
                                @error("prenom")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Numéro national</label>
                            <div class="col-sm-10">
                              <input name="numeronationale" type="number" class="form-control" value="{{ $duplicata->numeronationale }}">
                                @error("numeronationale")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Date impression</label>
                            <div class="col-sm-10">
                                <input name="dateimpression" type="text" placeholder="Format 1/1/2023" class="form-control" value="{{ $duplicata->dateimpression }}">
                                @error("dateimpression")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Numéro série</label>
                            <div class="col-sm-10">
                              <input name="numeroserie" type="text" class="form-control" value="{{ $duplicata->numeroserie }}">
                                @error("numeroserie")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Etat</label>
                            <div class="col-sm-10">
                                <div class="col-sm-12">
                                    <select name="etat" class="form-select" aria-label="Default select example" value="{{ $duplicata->etat }}">
                                      <option>-- Selectionner une valeur --</option>
                                      <option value="Fait">Fait</option>
                                      <option value="En attente">En attente</option>
                                      <option value="Introuvable">Introuvable</option>
                                    </select>
                                  </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Observation</label>
                            <div class="col-sm-10">
                                <input name="observation" class="form-control" value="{{ $duplicata->observation }}">
                                @error("observation")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Demandeur</label>
                            <div class="col-sm-10">
                              <input name="demandeur" type="text" class="form-control" value="{{ $duplicata->demandeur }}">
                                @error("demandeur")
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary btn-md w-100">Submit Form</button>
                                    </div>
                                    <div class="col-lg-2"></div>
                                </div>
                            </div>
                          </div>

                        </form><!-- End General Form Elements -->
                        @if(Session::has('message'))
                        <script>
                            swal("message", "{{ Session::get('message') }}", 'success', {
                                button:true,
                                button: "OK"
                            });
                        </script>
                        @endif
                      </div>
                    </div>

                  </div>
                </div>
              </section>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
