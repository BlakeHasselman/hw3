<?php
function selectPlayersByTeam($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, player_position, team_location, team_name, coach_name FROM team t join player p on p.team_id=t.team_id join coach c on t.team_id=c.team_id WHERE player_id=?");
        $stmt->bind_param("i", $pid);
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
