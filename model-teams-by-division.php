<?php
function selectTeamsByDivision($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_location, team_name, division_conference, divison_name FROM division d join team t on t.division_id=d.division_id WHERE team_id=?");
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
