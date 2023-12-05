<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlayerModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newPlayerModal" tabindex="-1" aria-labelledby="newPlayerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newPlayerModalLabel">New Player</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form method="post" action="">
  <div class="mb-3">
    <label for="tID" class="form-label">Team ID</label>
    <input type="text" class="form-control" id="tID" name="tID">
  </div>
  <div class="mb-3">
    <label for="pName" class="form-label">Player Name</label>
    <input type="text" class="form-control" id="pName" name="pName">
  </div>
  <div class="mb-3">
    <label for="pPosition" class="form-label">Player Position</label>
    <input type="text" class="form-control" id="pPosition" name="pPosition">
  </div>
  <div class="mb-3">
    <label for="pJersey" class="form-label">Player Jersey</label>
    <input type="text" class="form-control" id="pJersey" name="pJersey">
  </div>
  <div class="mb-3">
    <label for="pHeight" class="form-label">Player Height</label>
    <input type="text" class="form-control" id="pHeight" name="pHeight">
  </div>
  <div class="mb-3">
    <label for="pWeight" class="form-label">Player Weight</label>
    <input type="text" class="form-control" id="pWeight" name="pWeight">
  </div>
      <input type="hidden" name="actionType" value="Add">
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
      </div>
    </div>
  </div>
</div>
