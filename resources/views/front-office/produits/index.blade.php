<x-master-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
            <h1 class="text-center">Tous nos Produits</h1>
            <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(session('statut'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  {{ session('statut') }}
                </div>
                    
                @endif
                
                <script>
                  $(".alert").alert();
                </script>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Designation</th>
                            <th>Category</th>
                            <th>Prix</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produits as $produit)
                            <tr>
                                <td scope="row">{{ $produit->designation }}</td>
                                <td>{{ $produit->category ? $produit->category->libelle : "Non catégorisé" }}</td>
                                <td>{{ $produit->prix }}</td>
                                <td>{{ $produit->description }}</td>
                                <td>
                                <a href="#" class="btn btn-primary btn-sm mr-2" ><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" ><i class="fas fa-trash    "></i></a>
                                </td>
                            </tr>
            
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-5 text-center d-flex justify-content-center">
                {{ $produits->links() }}
                </div>
            </div>
        </div>
    </div>
</x-master-layout>