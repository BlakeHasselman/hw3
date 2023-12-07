<?php
function selectStatsByTeam($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT t.team_id, stats_id, team_name, team_location, team_founded, ss.wins, ss.losses, ss.conference_rank, ss.playoff_status, division_id FROM `team` t join season_stats ss on ss.team_id=t.team_id where t.team_id = ?");
        $stmt->bind_param("i", $tid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
