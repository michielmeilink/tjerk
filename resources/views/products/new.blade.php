<h1>Nieuw product</h1>

<div class="container">
  <h1>Product admin</h1>
  		<label for="name">Naam</label>
      <form method="POST">
      <input type="text" name="name" id="name"/>

  		<label for="description">Beschrijving</label>
  		<textarea name="description" id="description"/></textarea>

  		<label for="price">Prijs</label>
  		<input type="number" name="price" id="price"/>

  		<label for="status"><input type="checkbox" value="1" name="status" checked>Actief</label>

  	{{ csrf_field() }}

  	<input type="submit" name="submit" value="Opslaan">
  </form>
</div>
