<x-master-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
            <h1 class="text-center">Modifier un nouveau produit</h1>
            <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="{{ route('produits.update', $produit) }}">
                  @csrf
                  @method("PUT")
                    <div class="form-group">
                      <label for="designation">Désignation</label>
                      <input value="{{ $produit->designation }}" type="text" name="designation" id="designation" class="form-control" placeholder="" aria-describedby="helpId">
                      @error("designation")
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="prix">Prix</label>
                      <input value="{{  $produit->prix }}" type="number" name="prix" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      @error("prix")
                      <small class="text-danger">{{ $message }}</small>
                      @enderror                    
                    </div>
                    
                    <div class="form-group">
                      <label for="category_id">Catégorie</label>
                      <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $categorie)
                        <option {{ ($produit->category_id==$categorie->id) ? "selected" : "" }} value="{{ $categorie->id }}" > {{ $categorie->libelle }} </option>
      
                        @endforeach
                      </select>
                      @error("category_id")
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" name="description" id="description" rows="3">{{  $produit->description }}</textarea>
                      @error("description")
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Valider</button>
                </form>
            </div>
        </div>
    </div>
</x-master-layout>