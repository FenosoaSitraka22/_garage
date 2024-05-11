<?= form_open("voitures/save")?>
    <div class="form-group">
        <label for="">Marque</label>
        <input type="text" name="marque" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Numéro</label>
        <input type="text" name="numero" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Couleur</label>
        <input type="text" name="couleur" class="form-control">
    </div>
    <div class="form-group">
        <label for="">image</label>
        <input type="text" name="image" class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">Save</button>
</form>