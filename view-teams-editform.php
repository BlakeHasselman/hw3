<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTeamModal<?php echo $team['team_id']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editTeamModal<?php echo $team['team_id']; ?>" tabindex="-1" aria-labelledby="editTeamModalLabel<?php echo $team['team_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editTeamModalLabel<?php echo $team['team_id']; ?>">Edit Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form method="post" action="">
  <div class="mb-3">
    <label for="dID<?php echo $team['team_id']; ?>" class="form-label">Division ID</label>
    <input type="text" class="form-control" id="dID<?php echo $team['team_id']; ?>" name="dID" value="<?php echo $team['division_id']; ?>">
  </div>
  <div class="mb-3">
    <label for="tName<?php echo $team['team_id']; ?>" class="form-label">Team Name</label>
    <input type="text" class="form-control" id="tName<?php echo $team['team_id']; ?>" name="tName" value="<?php echo $team['team_name']; ?>">
  </div>
  <div class="mb-3">
    <label for="tLocation<?php echo $team['team_id']; ?>" class="form-label">Team Location</label>
    <input type="text" class="form-control" id="tLocation<?php echo $team['team_id']; ?>" name="tLocation" value="<?php echo $team['team_location']; ?>">
  </div>
  <div class="mb-3">
    <label for="tFounded<?php echo $team['team_id']; ?>" class="form-label">Year Founded</label>
    <input type="text" class="form-control" id="tFounded<?php echo $team['team_id']; ?>" name="tFounded" value="<?php echo $team['team_founded']; ?>">
  </div>
  <div class="mb-3">
    <label for="ssWins<?php echo $teamId['wins']; ?>" class="form-label">Season Wins</label>
    <input type="text" class="form-control" id="ssWins<?php echo $teamId['wins']; ?>" name="ssWins" value="<?php echo $teamId['wins']; ?>">
  </div>
  <div class="mb-3">
    <label for="ssLosses<?php echo $teamId['losses']; ?>" class="form-label">Season Losses</label>
    <input type="text" class="form-control" id="ssLosses<?php echo $teamId['losses']; ?>" name="ssLosses" value="<?php echo $teamId['losses']; ?>">
  </div>
  <div class="mb-3">
    <label for="ssRank<?php echo $teamId['conference_rank']; ?>" class="form-label">Conference Rank</label>
    <input type="text" class="form-control" id="ssRank<?php echo $teamId['conference_rank']; ?>" name="ssRank" value="<?php echo $teamId['conference_rank']; ?>">
  </div>
  <div class="mb-3">
    <label for="ssPlayoff<?php echo $teamId['playoff_status']; ?>" class="form-label">Conference Rank</label>
    <input type="text" class="form-control" id="ssPlayoff<?php echo $teamId['playoff_status']; ?>" name="ssPlayoff" value="<?php echo $teamId['playoff_status']; ?>">
  </div>
    <input type="hidden" name="tID" value="<?php echo $team['team_id']; ?>"> 
    <input type="hidden" name="ssID" value="<?php echo $teamId['stats_id']; ?>"> 
    <input type="hidden" name="actionType" value="Edit">
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
      </div>
    </div>
  </div>
</div>
