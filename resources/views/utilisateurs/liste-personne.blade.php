@extends('layouts.entete')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <div class="container-fluid mt-5">
            <div class="">
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 col-xs-12"></div>
                    <div class="col-lg-4 col-md-4 col-xs-12 mt-3">
                        <h1>Liste de demade du duplicata</h1>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 mt-4">
                        <div class="col-auto">
                            <a class="btn btn-primary" href="{{ route('ajout-personne') }}">Ajouter un duplicata</a>
                        </div>
                    </div>
               </div>
            </div>
            <div class="pagetitle">

            </div><!-- End Page Title -->

              <section class="section">
                <div class="row">
                  <div class="col-lg-12">

                    <div class="card">
                      <div class="card-body">

                        <!-- Table with stripped rows -->
                        <table class="table datatable table-striped">
                          <thead>
                            <tr>
                              <th scope="col">N°</th>
                              <th scope="col">Nom</th>
                              <th scope="col">Postnom</th>
                              <th scope="col">Prenom</th>
                              <th scope="col">Numéro national</th>
                              <th scope="col">Date impression</th>
                              <th scope="col">Numéro série</th>
                              <th scope="col">Etat</th>
                              <th scope="col">Observation</th>
                              <th scope="col">Démandeur</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($personneduplicata as $i=> $duplicata )
                            <tr>
                                <th scope="row">{{ $duplicata->id}}</th>
                                <td>{{ Str::upper($duplicata->nom) }}</td>
                                <td>{{ Str::upper($duplicata->postnom) }}</td>
                                <td>{{ Str::upper($duplicata->prenom) }}</td>
                                <td>{{ $duplicata->numeronationale }}</td>
                                <td>{{ $duplicata->dateimpression }}</td>
                                <td>{{ Str::upper($duplicata->numeroserie) }}</td>
                                <td>
                                    @if($duplicata->etat->id == '1')
                                        <span class="badge bg-success">
                                            {{ Str::upper($duplicata->etat->intitule) }}
                                        </span>
                                    @endif
                                    @if($duplicata->etat->id == '2')
                                        <span class="badge bg-warning">
                                            {{ Str::upper($duplicata->etat->intitule) }}
                                        </span>
                                    @endif
                                    @if($duplicata->etat->id == '3')
                                        <span class="badge bg-danger">
                                            {{ Str::upper($duplicata->etat->intitule) }}
                                        </span>
                                    @endif
                                </td>
                                <td>{{ Str::upper($duplicata->observation) }}</td>
                                <td>{{ Str::upper($duplicata->demandeur) }}</td>
                                <td>
                                    <a href="{{ route('afficher-personne', $duplicata->id) }}"><i class="bi bi-eye"></i></a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                        {{ $personneduplicata->links() }}
                      </div>
                    </div>
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
              </section>
        </div>




