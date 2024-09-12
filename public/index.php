<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mijn Abonnement</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-md-6">
      <h1>Mijn abonnement</h1>
      <div class="card p-4" style="background-color: #b3e5fc;">
        <form class="d-flex flex-column" style="position: relative;">
          <div class="mb-3">
            <label for="name" class="form-label">Naam</label>
            <input type="text" class="form-control" id="name" value="Naam" disabled />
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prijs</label>
            <input type="text" class="form-control" id="price" value="Prijs" disabled />
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" value="Status" disabled />
          </div>
          <button type="submit" class="btn btn-danger" style="align-self: flex-end;">Annuleren van abonnement</button>
        </form>
        </div>
      </div>


        <div class="col-md-6">
          <h1>Cursussen</h1>
          <table class="table table-bordered">
            <thead style="background-color: #b3e5fc;">
              <tr>
                <th>Cursus naam</th>
                <th>Tijd</th>
                <th>Datum</th>
                <th>Beschikbaarheid</th>
                <th>Aanmelden</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cursus 1</td>
                <td>10:00</td>
                <td>01-10-2024</td>
                <td><span class="badge bg-success">Beschikbaar</span></td>
                <td><button class="btn btn-primary">Aanmelden</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
