<div>
    <label for="last_name">Nom</label>
    <input type="text" name="last_name" id="last_name" value="{{old('last_name',$person->last_name)}}">
</div>
<div>
    <label for="first_name">Prénom</label>
    <input type="text" name="first_name" id="first_name" value="{{old('first_name',$person->first_name)}}">
</div>
<div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{old('email',$person->email)}}">
</div>
<button type="submit">Ajouter</button>
