<x-master-layout>
    <div class="row">
        <div class="col-md-12">
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($produits as $produit)
                        <tr>
                            <td scope="row">{{ $produit->designation }}</td>
                            <td>{{ $produit->category ? $produit->category->libelle : "Non catégorisé" }}</td>
                            <td>{{ $produit->prix }}</td>
                            <td>{{ $produit->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-master-layout>