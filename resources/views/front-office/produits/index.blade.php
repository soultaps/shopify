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
                                <a href="#" class="btn btn-primary btn-sm mr-2" >Modifier</a>
                                <a href="#" class="btn btn-danger btn-sm" >Supprimer</a>
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