<?php
function selectCoachesByDivision($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, coach_name, coach_position, division_conference, divison_name FROM division d join team t on t.division_id=d.division_id join coach c on c.team_id=t.team_id WHERE coach_id=?");
        $stmt->bind_param("i", $cid);
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
